<?php

namespace App\Http\Controllers;

use App\Mail\ContactEnquiry;
use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name'  => ['required', 'string', 'max:100'],
            'email'      => ['required', 'email', 'max:254'],
            'company'    => ['nullable', 'string', 'max:200'],
            'service'    => ['required', 'string', 'max:100'],
            'budget'     => ['nullable', 'string', 'max:100'],
            'message'    => ['required', 'string', 'min:10', 'max:5000'],
        ]);

        $submission = ContactSubmission::create($validated);

        try {
            Mail::to(config('mail.to_address'))->send(new ContactEnquiry($submission));
        } catch (\Exception $e) {
            // Mail failure should not block the user – log and continue
            logger()->error('Contact mail failed: ' . $e->getMessage());
        }

        return redirect()->route('contact')
            ->with('success', "Thanks {$submission->first_name}! We've received your message and will get back to you within one business day.");
    }
}
