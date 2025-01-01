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
    return view('frontend.portfolio-detail.portfolio-details');
})->name('portfolio-details');
Route::get('/service-details', function(){
    return view('frontend.detail.service-details');
})->name('service-details');
Route::get('/starter-page', function(){
    return view('frontend.starter-page.starter-page');
})->name('starter-page');
Route::get('/asset3d-service-details', function(){
    return view('frontend.detail.asset3d-service-details');
})->name('asset3d-service-details');
Route::get('/design-service-details', function(){
    return view('frontend.detail.design-service-details');
})->name('design-service-details');
Route::get('/game-service-details', function(){
    return view('frontend.detail.game-service-details');
})->name('game-service-details');
Route::get('/media-service-details', function(){
    return view('frontend.detail.media-service-details');
})->name('media-service-details');
Route::get('skripsi-service-details', function(){
    return view('frontend.detail.skripsi-service-details');
})->name('skripsi-service-details');
Route::get('/website-service-details', function(){
    return view('frontend.detail.website-service-details');
})->name('website-service-details');
Route::get('/luluk', function(){
    return view('frontend.detail_team.luluk');
})->name('luluk');
Route::get('/sauki', function(){
    return view('frontend.detail_team.sauki');
})->name('sauki');
Route::get('/Dimas', function(){
    return view('frontend.detail_team.Dimas');
})->name('Dimas');
Route::get('/ibs-detail', function(){
    return view('frontend.portfolio-detail.ibs-detail');
})->name('ibs-detail');
Route::get('/ketosin-detail', function(){
    return view('frontend.portfolio-detail.ketosin-detail');
})->name('ketosin-detail');
Route::get('/asset_konsep_gaya-detail', function(){
    return view('frontend.portfolio-detail.asset_konsep_gaya-detail');
})->name('asset_konsep_gaya-detail');
Route::get('/asset_newton-detail', function(){
    return view('frontend.portfolio-detail.asset_newton-detail');
})->name('asset_newton-detail');
Route::get('/asset_sapi-detail', function(){
    return view('frontend.portfolio-detail.asset_sapi-detail');
})->name('asset_sapi-detail');
Route::get('/es-mr-detail', function(){
    return view('frontend.portfolio-detail.es-mr-detail');
})->name('es-mr-detail');
Route::get('/hukum_newton-detail', function(){
    return view('frontend.portfolio-detail.hukum_newton-detail');
})->name('hukum_newton-detail');
Route::get('/karapan_sapi-detail', function(){
    return view('frontend.portfolio-detail.karapan_sapi-detail');
})->name('karapan_sapi-detail');
Route::get('/konsleting_listrik-detail', function(){
    return view('frontend.portfolio-detail.konsleting_listrik-detail');
})->name('konsleting_listrik-detail');
Route::get('/puzzle-detail', function(){
    return view('frontend.portfolio-detail.puzzle-detail');
})->name('puzzle-detail');
Route::get('/virtual_lab-detail', function(){
    return view('frontend.portfolio-detail.virtual_lab-detail');
})->name('virtual_lab-detail');





