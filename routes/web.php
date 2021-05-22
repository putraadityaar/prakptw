<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\putraadityaa;

Route::get('/', function () {
    return "Hello Word";
    });
    Route::get('/home', [putraadityaa::class, 'home']);

Route::get('/', function () {
    return "Hello Word";
    });
    Route::get('/artikel', [putraadityaa::class, 'artikel']);

Route::get('/', function () {
    return "Hello Word";
    });
    Route::get('/profil', [putraadityaa::class, 'profil']);