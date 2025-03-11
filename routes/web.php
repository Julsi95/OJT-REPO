<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/service', 'service');
Route::view('/partners', 'partners');