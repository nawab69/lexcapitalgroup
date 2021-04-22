<?php

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
    return view('welcome');
})->name('welcome');



Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/send-btc', [App\Http\Controllers\HomeController::class, 'sentBtc'])->name('sent.btc')->middleware('verified');
Route::get('/deposit', [App\Http\Controllers\HomeController::class, 'deposit'])->name('deposit')->middleware('verified');
Route::get('/send-escrow', [App\Http\Controllers\HomeController::class, 'sentEscrow'])->name('sent.escrow')->middleware('verified');
Route::get('/withdraw-escrow', [App\Http\Controllers\HomeController::class, 'withdrawEscrow'])->name('withdraw.escrow')->middleware('verified');
Route::get('/kyc/', [App\Http\Controllers\HomeController::class, 'kyc'])->name('kyc')->middleware('verified');
Route::view('/about-us','pages.about')->name('about-us');
//Route::view('/faq','pages.faq')->name('faq');
Route::view('/terms-conditions','pages.terms')->name('terms-conditions');
Route::view('/custody','pages.custody');
Route::view('/risk-management','pages.risk-management');
Route::view('/otc-solutions','pages.otc-solutions');
Route::view('/settlement','pages.settlement');
Route::view('/privacy-policy','pages.privacy')->name('privacy-policy');
Route::view('/contact-us','pages.contact-us')->name('contact-us');
Route::post('/contact-us',[App\Http\Controllers\HomeController::class, 'mail'])->name('mail');

Route::get('voice',  function() {
    return response()->view('xml.voice')->header('Content-Type', 'text/xml');
});



