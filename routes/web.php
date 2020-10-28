<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');

// About stuff
Route::get('/o-kmeni', function () {
    return view('about.long');
})->name('about');
Route::get('/zasvecovaci-stezka/{type?}/', function ($type = null) {
    return view('about.trail', ['type' => $type]);
})->name('about.trail');

// Events
Route::get('/detail-akce/{event}', [EventController::class, 'get'])->name('event-detail');
Route::get('/plan', [EventController::class,'index'])->name('events');

