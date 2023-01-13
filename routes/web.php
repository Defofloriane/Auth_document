<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\scanController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/scan',[scanController::class,'scan'])->name('scan');
Route::post('/validasi',[scanController::class,'validasi'])->name('validasi');
Route::post('/store',[AbsenController::class,'store'])->name('store');
Route::get('/test',[testController::class,'store'])->name('store');
Route::get('/post',[PostController::class,'getAllPost'])->name('post.getallpost');



 