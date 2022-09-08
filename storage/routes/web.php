<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YonetimController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/index',[YonetimController::class,'index'])->name("index");
Route::get('/musteri-ekle',[YonetimController::class,'musteriEkle'])->name("musteri-ekle");
Route::post('/musteri-ekle-post',[YonetimController::class,'MusteriEklePost'])->name("musteri-ekle-post");
Route::get('/musteri-liste',[YonetimController::class,'musteriListe'])->name("musteri-liste");
