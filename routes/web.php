<?php

use App\Http\Controllers\scanController;
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
    return view('index');
});
Route::get('/scan',[scanController::class,'scan'])->name('scan');
Route::post('/validasi',[scanController::class,'validasi'])->name('validasi');


