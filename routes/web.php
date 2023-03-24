<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\mapping;
use App\Http\Controllers\Qrcodegenerate;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Releve1;
use App\Http\Controllers\scanController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\WebcamController;
use Illuminate\Http\Request;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/welcome', [AbsenController::class, 'welcome'])->name('welcome');
Route::get('/scan', [scanController::class, 'scan'])->name('scan');
Route::get('/', [UserControllers::class, 'home'])->name('home');
Route::get('/qrcode', [Qrcodegenerate::class, 'qrcode'])->name('qrcode');
Route::get('/export_pdf', [Qrcodegenerate::class, 'export_pdf'])->name('export_pdf');
Route::post('/validasi', [scanController::class, 'validasi'])->name('validasi');
Route::post('/store', [AbsenController::class, 'store'])->name('store');
Route::get('/test', [testController::class, 'store'])->name('store');
Route::get('/post', [PostController::class, 'getAllPost'])->name('post.getallpost');
// // route Authentification
Route::get('/home', [UserControllers::class, 'home'])->name('home');
Route::get('/dd', [UserControllers::class, 'dd'])->name('dd');
Route::get('/login', [UserControllers::class, 'login'])->name('login');
Route::post('/customLogin', [UserControllers::class, 'customLogin'])->name('customLogin');
Route::get('/registration', [UserControllers::class, 'registration'])->name('register');
Route::post('/custom-registration', [UserControllers::class, 'customRegistration'])->name('register.custom');
Route::get('/signout', [UserControllers::class, 'signOut'])->name('signout');
//route Home
Route::get('/mapping', [mapping::class,'mapping'])->name('mapping');
Route::get('/mapping1', [Releve1::class,'releve1'])->name('mapping1');
Route::get('/mapping2', [Releve1::class,'releve2'])->name('mapping2');
Route::get('/mapping3', [Releve1::class,'releve3'])->name('mapping3');
Route::post('/upload', [UploadController::class,'upload'])->name('upload');
Route::post('/scan_releve', [UploadController::class,'scan_releve'])->name('scan_releve');
Route::get('/ocr', [WebcamController::class,'ocr'])->name('ocr');

Route::controller(WebcamController::class)->group(function () {
    Route::get('webcam', 'index')->name('webcam.capture');
    Route::post('webcam', 'store');
});