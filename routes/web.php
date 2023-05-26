<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/twilio/voice-response', [App\Http\Controllers\TwilioController::class, 'voiceResponse'])->name('twilio.voice-response');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/conversaciones', [App\Http\Controllers\ConversacionesController::class, 'index'])->name('conversaciones');

Route::get('/logs', [App\Http\Controllers\HomeController::class, 'index'])->name('logs');
Route::get('/make-call', [App\Http\Controllers\TwilioController::class, 'makeCall'])->name('makeCall');
