<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index.index');
})->name('index.index');

Route::get('about', function () {
    return view('about.index');
})->name('about.index');

Route::get('accomodation', function () {
    return view('glamping.accomodation');
})->name('glamping.accomodation');

Route::get('activities', function () {
    return view('glamping.activities');
})->name('glamping.activities');

Route::get('horsey-holidays', function () {
    return view('glamping.horsey-holidays');
})->name('glamping.horsey-holidays');

Route::prefix('how-to-book')->group(function () {
    Route::get('/', 'BookingController@index')->name('glamping.booking.index');
    Route::post('submit', 'BookingController@send')->name('glamping.booking.send');
});

Route::get('brookshill-hampers', function () {
    return view('glamping.hampers');
})->name('glamping.hampers');

Route::get('eating-out', function () {
    return view('glamping.eating-out');
})->name('glamping.eating-out');


Route::get('countryside-management', function () {
    return view('countryside-management.index');
})->name('countryside-management.index');

Route::get('events', function () {
    return view('events.index');
})->name('events.index');

Route::get('news', function () {
    return view('news.index');
})->name('news.index');

Route::get('gallery', function () {
    return view('gallery.index');
})->name('gallery.index');

Route::get('contact-us', function () {
    return view('contact.index');
})->name('contact.index');

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('test', 'IndexController@index')->name('admin.dashboard');
});
