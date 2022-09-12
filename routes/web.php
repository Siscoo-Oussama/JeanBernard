<?php

use App\Http\Controllers\BuyPackController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
USE App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Mail;


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

Route::get('/okFail', [BuyPackController::class, 'okFail']);

Route::post('okSuccess',[BuyPackController::class, 'okSuccess'])->withoutMiddleware([VerifyCsrfToken::class]);


Route::get('MainHotelPack',function(){
    return view('BuyPack1v2');
});
Route::get('PalaceOptionPack',function(){
    return view('BuyPack2v2');
});
Route::get('4StarsOptionPack',function(){
    return view('BuyPack3v2');
});




Auth::routes();

