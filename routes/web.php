<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/service', function () {
    return view('frontend.service');
})->name('service');
Route::get('/portfolio', function(){
    return view('frontend.portfolio');
})->name('portfolio');
Route::get('/team', function(){
    return view('frontend.team');
})->name('team');

Route::get('/contact', function(){
    return view('frontend.contact');
})->name('contact');
Route::get('/about', function(){
    return view('frontend.about');
})->name('about');
