<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/o-nas', function () {
    return view('about');
});

Route::get('/akce', function () {return view('event/events');})->name('akce');
Route::get('/detail-akce/{event?}', 'EventController@get')->name('event-detail');
Route::post('/events', 'EventController@index')->name('events');
