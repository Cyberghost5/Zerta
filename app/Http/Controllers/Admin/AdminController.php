<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerApplication;
use App\Models\ContactSubmission;
use App\Models\JobListing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginForm()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate(['password' => 'required']);

        $adminPassword = config('app.admin_password');

        if ($request->input('password') === $adminPassword) {
            session(['admin_authenticated' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['password' => 'Incorrect password.']);
    }

    public function logout(): RedirectResponse
    {
        session()->forget('admin_authenticated');
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        $stats = [
            'contacts'     => ContactSubmission::count(),
            'unread_contacts' => ContactSubmission::whereNull('read_at')->count(),
            'applications' => CareerApplication::count(),
            'unread_apps'  => CareerApplication::whereNull('read_at')->count(),
            'active_jobs'  => JobListing::where('active', true)->count(),
            'total_jobs'   => JobListing::count(),
        ];
        $recent_contacts = ContactSubmission::latest()->take(5)->get();
        $recent_apps     = CareerApplication::latest()->take(5)->get();
        return view('admin.dashboard', compact('stats', 'recent_contacts', 'recent_apps'));
    }
}
