<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ApplicationsController extends Controller
{
    public function index()
    {
        $applications = CareerApplication::latest()->paginate(20);
        return view('admin.applications.index', compact('applications'));
    }

    public function show(CareerApplication $application)
    {
        if (!$application->read_at) {
            $application->update(['read_at' => now()]);
        }
        return view('admin.applications.show', compact('application'));
    }

    public function downloadCv(CareerApplication $application)
    {
        if (!Storage::disk('local')->exists($application->cv_path)) {
            abort(404, 'CV file not found.');
        }
        return Storage::disk('local')->download($application->cv_path);
    }

    public function destroy(CareerApplication $application): RedirectResponse
    {
        Storage::disk('local')->delete($application->cv_path);
        $application->delete();
        return redirect()->route('admin.applications.index')->with('success', 'Application deleted.');
    }
}
