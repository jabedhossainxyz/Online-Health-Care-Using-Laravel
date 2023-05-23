<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/home', [HomeController::class, 'redirect'])->name('home.index');
Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view', [AdminController::class, 'addview']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);
Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myAppointment', [HomeController::class, 'myAppointment'])->name('my-appointment');
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancelAppointment'])->name('cancel-appointment');
Route::get('/show_appointment', [AdminController::class, 'showAppointment']);
Route::get('/approved/{id}', [AdminController::class, 'approved']);
Route::get('/cancel/{id}', [AdminController::class, 'cancel']);
Route::get('/show_doctor', [AdminController::class, 'showDoctor']);
Route::get('/delete_doctor/{id}', [AdminController::class, 'deleteDoctor']);
Route::get('/update_doctor/{id}', [AdminController::class, 'updateDoctor']);
Route::post('/edit_doctor/{id}', [AdminController::class, 'editDoctor']);

Route::get('/doctors', [HomeController::class, 'doctorPage'])->name('show.doctor');
Route::get('/about-us', [HomeController::class, 'About_us'])->name('show.about-us');
Route::get('/blogs', [HomeController::class, 'blog'])->name('show.blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('show.contact');
