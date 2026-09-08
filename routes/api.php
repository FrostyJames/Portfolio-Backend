<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

Route::post('/contact', [ContactController::class, 'store']);
Route::get('/projects', [ProjectController::class, 'index']);

//endpoint for testing email sending
Route::get('/test-email', function () {
    Mail::to('ivanlavan773@gmail.com')->send(new TestEmail());

    return 'Test email sent.';
});