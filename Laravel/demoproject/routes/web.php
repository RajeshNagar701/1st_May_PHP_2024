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
    return view('welcome');  // resource/views/mypage 
});

Route::get('/mypage', function () {
    return view('mypage');  // resource/views/mypage 
});

Route::get('/template', function () {
    return view('template');  // resource/views/mypage 
});