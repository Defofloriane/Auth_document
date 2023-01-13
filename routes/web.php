<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\Qrcodegenerate;
use App\Http\Controllers\scanController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/scan',[scanController::class,'scan'])->name('scan');
Route::get('/qrcode',[Qrcodegenerate::class,'qrcode'])->name('qrcode');
Route::get('/export_pdf',[Qrcodegenerate::class,'export_pdf'])->name('export_pdf');
Route::post('/validasi',[scanController::class,'validasi'])->name('validasi');
Route::post('/store',[AbsenController::class,'store'])->name('store');



