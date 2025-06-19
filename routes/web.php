<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ItemController;
use App\Models\Item;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['items' => Item::all()]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'showForm']);

Route::get('/messages', [ContactController::class, 'showMessage']);

Route::post('/contact', [ContactController::class, 'storeMessage']);

Route::get('/itemForm', [ItemController::class, 'showItemForm']);

Route::post('/itemForm', [ItemController::class, 'storeItem']);