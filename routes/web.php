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
Route::get('/portfolio-details', function(){
    return view('frontend.detail.portfolio-details');
})->name('portfolio-details');
Route::get('service-details', function(){
    return view('frontend.detail.service-details');
})->name('service-details');
Route::get('starter-page', function(){
    return view('frontend.detail.starter-page');
})->name('starter-page');
