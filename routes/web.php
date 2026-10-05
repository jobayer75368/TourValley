<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.index');
})->name('home');
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/packages', function () {
    return view('frontend.packages');
})->name('packages');
Route::get('/destination', function () {
    return view('frontend.destination');
})->name('destination');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::get('/guides', function () {
    return view('frontend.guides');
})->name('guides');
Route::get('/package_details', function () {
    return view('frontend.package_details');
})->name('package_details');
