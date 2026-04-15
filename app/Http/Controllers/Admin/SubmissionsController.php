<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;

class SubmissionsController extends Controller
{
    public function index()
    {
        $submissions = ContactSubmission::latest()->paginate(20);
        return view('admin.submissions.index', compact('submissions'));
    }

    public function show(ContactSubmission $submission)
    {
        if (!$submission->read_at) {
            $submission->update(['read_at' => now()]);
        }
        return view('admin.submissions.show', compact('submission'));
    }

    public function destroy(ContactSubmission $submission): RedirectResponse
    {
        $submission->delete();
        return redirect()->route('admin.submissions.index')->with('success', 'Submission deleted.');
    }
}
