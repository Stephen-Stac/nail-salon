<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('user.about');
})->name('about');

Route::get('/team', function () {
    return view('user.team');
})->name('team');

Route::get('/expert', function () {
    return view('user.expert');
})->name('expert');

Route::get('/services', function () {
    return view('user.service');
})->name('services');

Route::get('/gallery', function () {
    return view('user.gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('user.contact');
})->name('contact');

Route::get('/appointment', function () {
    return view('user.appointment');
})->name('appointment');

// news letter route
Route::post('/', [SubscriberController::class, 'save'])->name('subscriber.save');

// contact us route
Route::post('/contact', [QuestionController::class, 'save'])->name('question.save');

// appointment route
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment');