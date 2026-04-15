<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationReceived;
use App\Models\CareerApplication;
use App\Models\JobListing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function index()
    {
        $jobs = JobListing::active()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get()
            ->groupBy('department');

        return view('pages.careers', compact('jobs'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'       => ['required', 'string', 'max:200'],
            'email'      => ['required', 'email', 'max:254'],
            'phone'      => ['nullable', 'string', 'max:50'],
            'linkedin'   => ['required', 'url', 'max:500'],
            'role'       => ['required', 'string', 'max:200'],
            'department' => ['required', 'string', 'max:100'],
            'cover_note' => ['required', 'string', 'min:20', 'max:3000'],
            'cv'         => ['required', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
        ]);

        // Store CV
        $cvPath = $request->file('cv')->store('cvs', 'local');

        // Collect department-specific extra fields
        $extra = array_filter([
            'portfolio'            => $request->input('portfolio'),
            'primary_stack'        => $request->input('primary_stack'),
            'years_experience'     => $request->input('years_experience'),
            'technical_assessment' => $request->input('technical_assessment'),
            'design_tools'         => $request->input('design_tools'),
            'methodologies'        => $request->input('methodologies'),
            'case_study'           => $request->input('case_study'),
            'sales_methodology'    => $request->input('sales_methodology'),
            'quota'                => $request->input('quota'),
        ]);

        $application = CareerApplication::create([
            'name'       => $validated['name'],
            'email'      => $validated['email'],
            'phone'      => $validated['phone'] ?? null,
            'linkedin'   => $validated['linkedin'],
            'role'       => $validated['role'],
            'department' => $validated['department'],
            'cv_path'    => $cvPath,
            'cover_note' => $validated['cover_note'],
            'extra_data' => $extra ?: null,
        ]);

        try {
            Mail::to(config('mail.to_address'))->send(new ApplicationReceived($application));
        } catch (\Exception $e) {
            logger()->error('Application mail failed: ' . $e->getMessage());
        }

        return redirect()->route('careers')
            ->with('success', "Thanks {$application->name}! Your application for \"{$application->role}\" has been received. We'll review it and be in touch within 3 business days.");
    }
}
