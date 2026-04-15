<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ApplicationsController;
use App\Http\Controllers\Admin\JobsController;
use App\Http\Controllers\Admin\SubmissionsController;
use Illuminate\Support\Facades\Route;

// Public pages
Route::get('/', fn() => view('home'))->name('home');
Route::get('/about',   fn() => view('pages.about'))->name('about');
Route::get('/blog',    fn() => view('pages.blog'))->name('blog');
Route::get('/press',   fn() => view('pages.press'))->name('press');
Route::get('/privacy', fn() => view('pages.privacy'))->name('privacy');
Route::get('/terms',   fn() => view('pages.terms'))->name('terms');
Route::get('/cookies', fn() => view('pages.cookies'))->name('cookies');

// Contact
Route::get('/contact',  fn() => view('pages.contact'))->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Careers
Route::get('/careers',        [CareerController::class, 'index'])->name('careers');
Route::post('/careers/apply', [CareerController::class, 'store'])->name('careers.apply');

// Admin — login (unauthenticated)
Route::get('/admin/login',  [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');

// Admin — authenticated
Route::prefix('admin')->middleware('admin.auth')->group(function () {
    Route::get('/',        [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Contact submissions
    Route::get('/submissions',                  [SubmissionsController::class, 'index'])->name('admin.submissions.index');
    Route::get('/submissions/{submission}',     [SubmissionsController::class, 'show'])->name('admin.submissions.show');
    Route::delete('/submissions/{submission}',  [SubmissionsController::class, 'destroy'])->name('admin.submissions.destroy');

    // Career applications
    Route::get('/applications',                  [ApplicationsController::class, 'index'])->name('admin.applications.index');
    Route::get('/applications/{application}',    [ApplicationsController::class, 'show'])->name('admin.applications.show');
    Route::get('/applications/{application}/cv', [ApplicationsController::class, 'downloadCv'])->name('admin.applications.cv');
    Route::delete('/applications/{application}', [ApplicationsController::class, 'destroy'])->name('admin.applications.destroy');

    // Job listings
    Route::get('/jobs',              [JobsController::class, 'index'])->name('admin.jobs.index');
    Route::get('/jobs/create',       [JobsController::class, 'create'])->name('admin.jobs.create');
    Route::post('/jobs',             [JobsController::class, 'store'])->name('admin.jobs.store');
    Route::get('/jobs/{job}/edit',   [JobsController::class, 'edit'])->name('admin.jobs.edit');
    Route::put('/jobs/{job}',        [JobsController::class, 'update'])->name('admin.jobs.update');
    Route::delete('/jobs/{job}',     [JobsController::class, 'destroy'])->name('admin.jobs.destroy');
});
