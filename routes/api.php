<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;


Route::post('/contact', [ContactController::class, 'store']);
Route::get('/projects', [ProjectController::class, 'index']);
