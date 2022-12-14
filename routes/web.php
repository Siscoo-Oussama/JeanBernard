<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BuyPackController;
use App\Http\Controllers\BuyPackSaveOnlyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
USE App\Http\Middleware\VerifyCsrfToken;
use App\Models\Participation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

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



Route::get('paymentrequest',[BuyPackController::class,'paymentrequest']);
Route::post('okSuccessAmex',[BuyPackController::class, 'okSuccessAmex']);
Route::get('changeprice',[BuyPackController::class,'changeprice']);
Route::get('BuyPack',[BuyPackController::class,'index']);
Route::get('BuyPack1',[BuyPackController::class,'index1']);
Route::get('BuyPack2',[BuyPackController::class,'index2']);
Route::get('BuyPack3',[BuyPackController::class,'index3']);
Route::post('processwithamex',[BuyPackController::class, 'processwithamex'])->name('processwithamex');
Route::post('process',[BuyPackController::class, 'process'])->name('process');
Route::post('submit',[BuyPackController::class, 'submit'])->name('submit');
Route::post('okFail', [BuyPackController::class, 'okFail'])->name('okFail')->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('callback', [BuyPackController::class, 'callback'])->name('callback')->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('okSuccess',[BuyPackController::class, 'okSuccess'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::get('/dashboard',[AdminController::class,'dashboard']);
Route::get('/participation/cancel/{id}',[AdminController::class,'cancel']);
Route::get('/participation/confirm/{id}',[AdminController::class,'confirm']);


Route::get("/" ,function(){
    return Redirect::to('http://hbsmorocco2023.com');
});

Auth::routes();

