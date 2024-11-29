<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Job;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\EvaluationController;
use App\Models\Announcement;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Route
Route::get('/', function () {
    $announcements = Announcement::where('is_published', true)->get();

    return view('welcome', compact('announcements'));
})->name('welcome');

Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');


// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/home', function () {
        $announcements = Announcement::where('is_published', true)->get();

        return view('home', compact('announcements'));
    })->name('home');

    Route::view('/profile/edit', 'profile.edit')->name('profile.edit');
    Route::view('/profile/password', 'profile.password')->name('profile.password');
    Route::view('/profile/two-factor', 'profile.two-factor')->name('profile.two-factor');
    Route::view('/profile/recovery-code', 'auth.recovery-code')->name('profile.recovery-code');

    Route::view('/libraries/datatables', 'libraries.datatables')->name('libraries.datatables');
    Route::view('/libraries/listjs', 'libraries.listjs')->name('libraries.listjs');
});

// Public Routes
Route::get('/services', function () {
    return view('services'); // services.blade.php
})->name('services');

Route::get('/careers', function () {
    $jobs = Job::all();
    return view('careers', compact('jobs')); // careers.blade.php
})->name('careers');


Route::get('/about', function () {
    return view('about'); // about.blade.php
})->name('about');

Route::get('/contact', function () {
    return view('contact'); // contact.blade.php
})->name('contact');

// to remove
Route::get('/sample', function () {
    return view('sample'); // sample.blade.php
})->name('sample');

Route::get('/candi_info', function () {
    return view('candidate.show'); // candi_info.blade.php
})->name('candidate.show');

Route::get('/feedbacks', function () {
    return view('feedback.index'); // candi_info.blade.php
})->name('feedback.index');

Route::get('/chats', function () {
    return view('chats'); // candi_info.blade.php
})->name('chats.index');


Route::get('job_applications', [ApplicationsController::class, 'getJobApplications'])->middleware(['auth', 'verified'])->name('applicants.getJobApplications');
Route::get('evaluation/{application_id}/{job_id}', [ApplicationsController::class, 'showEvaluation'])->middleware(['auth', 'verified'])->name('applicants.showEvaluation');
Route::post('evaluate', [EvaluationController::class, 'evaluate'])->middleware(['auth', 'verified'])->name('applicants.evaluate');



Route::get('jobs', [JobController::class, 'index'])->middleware(['auth', 'verified'])->name('jobs.index');
Route::get('jobs/create', [JobController::class, 'create'])->middleware(['auth', 'verified'])->name('jobs.create');
Route::post('jobs/store', [JobController::class, 'store'])->middleware(['auth', 'verified'])->name('jobs.store');
Route::get('jobs/{job_id}', [JobController::class, 'show'])->middleware(['auth', 'verified'])->name('jobs.show');

Route::get('jobs/{job_id}/edit', [JobController::class, 'edit'])->middleware(['auth', 'verified'])->name('jobs.edit');
Route::put('jobs/{job_id}', [JobController::class, 'update'])->middleware(['auth', 'verified'])->name('jobs.update');
Route::delete('jobs/{job}', [JobController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('jobs.destroy');
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');

Route::post('/applications', [ApplicationsController::class, 'store'])->name('applications.store');
Route::post('/jobs/uploadCv', [ApplicationsController::class, 'uploadCv'])->name('jobs.uploadCv');

Route::get('candidates', [ApplicationsController::class, 'index'])->middleware(['auth', 'verified'])->name('candidate.index');


Route::resource('candidate', ApplicationsController::class);

Route::get('candidates/{id}', [ApplicationsController::class, 'show'])->name('candidates.show');
Route::post('update_status/{application_id}', [ApplicationsController::class, 'updateStatus'])->name('candidates.updateStatus');
Route::post('applications/parse_resume', [ApplicationsController::class, 'parseResume'])->name('candidates.parseResume');


// Feedback - Contact Us - Client Side
Route::post('/feedback/store', [FeedbackController::class, 'store'])->middleware(['auth', 'verified'])->name('feedback.store');
Route::get('/feedbacks', [FeedbackController::class, 'index'])->middleware(['auth', 'verified'])->name('feedback.index');


Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy'])->name('feedback.delete');

Route::resource('notes', NotesController::class);


Route::get('/candidate/{applicationId}', [NotesController::class, 'show'])->name('candidate.show');

Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
Route::get('/activities/create', [ActivityController::class, 'create'])->name('activities.create');
Route::post('/activities/store', [ActivityController::class, 'store'])->name('activities.store');

Route::resource('announcements', AnnouncementController::class)->except(['destroy']);
