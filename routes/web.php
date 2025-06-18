<?php

use App\Http\Controllers\ContactController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'showForm']);

Route::get('/messages', [ContactController::class, 'showMessage']);

Route::post('/contact', [ContactController::class, 'storeMessage']);