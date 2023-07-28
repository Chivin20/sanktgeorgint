<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/staff', function () {
    return view('staff');
})->name('staff');

Route::get('/fees', function () {
    return view('fees');
})->name('fees');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact-us');

Route::get('/visit', function () {
    return view('visit');
})->name('visit');

Route::get('/facilities', function () {
    return view('facilities');
})->name('facilities');

Route::get('/others', function () {
    return view('others');
})->name('others');

Route::get('/primary', function () {
    return view('primary');
})->name('primary');

Route::get('/secondary', function () {
    return view('secondary');
})->name('secondary');

Route::get('/priviewcalendarthird', function () {
    return view('priviewcalendarthird');
})->name('priviewcalendarthird');

Route::get('/secviewcalendarthird', function () {
    return view('secviewcalendarthird');
})->name('secviewcalendarthird');

Route::get('/parviewcalendarthird', function () {
    return view('parviewcalendarthird');
})->name('parviewcalendarthird');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

