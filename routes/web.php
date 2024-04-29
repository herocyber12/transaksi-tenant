<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('index');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::get('buatakun','register_akun')->name('registrasi');
    Route::get('daftartenant','register_tenant')->name('daftartenant');
    Route::get('lupa_password','forget_password')->name('forget_password');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('');
    Route::get('contact','contact')->name('contact');
    Route::get('kategori/{$1}','kategori')->name('kategori');
    Route::get('about','about')->name('about');
    Route::get('paket','paket')->name('paket');
    Route::get('detail_paket/{$1}', 'detail_paket')->name('detail_paket');
    Route::get('event','event')->name('event');
    Route::get('detail_event','detail_event')->name('detail_event');
});