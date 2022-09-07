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


Route::get('BuyPack1',[BuyPackController::class,'index1']);
Route::get('BuyPack2',[BuyPackController::class,'index2']);
Route::get('BuyPack3',[BuyPackController::class,'index3']);
Route::post('process',[BuyPackController::class, 'process'])->name('process');
Route::post('submit',[BuyPackController::class, 'submit'])->name('submit');

Route::get('/okFail', [BuyPackController::class, 'okFail']);
Route::post('okSuccess',[BuyPackController::class, 'okSuccess'])->withoutMiddleware([VerifyCsrfToken::class]);

Route::get('send-mail', function () {



    $participated = [

        'title' => 'Mail Title',

        'body' => 'This is for testing email using smtp'

    ];

    Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\RegisteredUser($participated));
    dd('Email is Sent Successfully!!!.');




 });



Auth::routes();

