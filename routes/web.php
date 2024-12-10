<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\VerificationController;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->middleware('verified');
//Route::get('/home', [HomeController::class, 'index']);

Route::get('/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::post('/verify', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/verification/resend', [VerificationController::class, 'resend'])->name('verification.resend');

Route::get('/send-email',function(){
    $data = [
        'nama' => 'Syahrizal As',
        'body' => 'Testing Kirim Email'
    ];
   
    Mail::to('maulaisma382@gmail.com')->send(new SendEmail($data));
   
    dd("Email Berhasil dikirim.");
});