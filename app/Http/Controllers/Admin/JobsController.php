<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobListing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = JobListing::orderBy('department')->orderBy('sort_order')->orderBy('id')->get();
        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('admin.jobs.form', ['job' => new JobListing()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateJob($request);
        JobListing::create($validated);
        return redirect()->route('admin.jobs.index')->with('success', 'Job listing created.');
    }

    public function edit(JobListing $job)
    {
        return view('admin.jobs.form', compact('job'));
    }

    public function update(Request $request, JobListing $job): RedirectResponse
    {
        $validated = $this->validateJob($request);
        $job->update($validated);
        return redirect()->route('admin.jobs.index')->with('success', 'Job listing updated.');
    }

    public function destroy(JobListing $job): RedirectResponse
    {
        $job->delete();
        return redirect()->route('admin.jobs.index')->with('success', 'Job listing deleted.');
    }

    private function validateJob(Request $request): array
    {
        return $request->validate([
            'title'           => ['required', 'string', 'max:200'],
            'department'      => ['required', 'string', 'max:100'],
            'department_type' => ['required', 'in:engineering,design,product,sales'],
            'type'            => ['required', 'in:Full-time,Part-time,Contract'],
            'location'        => ['required', 'string', 'max:100'],
            'active'          => ['nullable', 'boolean'],
            'sort_order'      => ['nullable', 'integer', 'min:0'],
        ]);
    }
}
