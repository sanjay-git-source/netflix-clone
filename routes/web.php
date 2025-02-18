<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\url_controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[url_controller::class,'index']);
Route::get('/explore',[url_controller::class,'explore'])->name('movie.explore');
Route::get('/movie/{slug}',[url_controller::class,'movieDetail'])->name('movie.detail');
Route::get('/contact',[ContactController::class,'contact'])->name('contactform');
Route::post('/contact',[ContactController::class,'submitcontactForm'])->name('contactSubmitted');
