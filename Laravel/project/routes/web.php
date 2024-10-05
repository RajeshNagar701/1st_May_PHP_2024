<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\basicController; // import Basic controller create function by self

use App\Http\Controllers\invokableController; // import --invokable controller __contruct function created

use App\Http\Controllers\resourceController; // import --resource controller which gives all crud functionality readyment

use App\Http\Controllers\contactController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\userController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\adminController;

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

/*  view by basic function

Route::get('/', function () {
    return view('website.index');
});

*/

// view by Controller

//Route::get('/',[basicController::class,'index']);  // Basic controller

//Route::get('/',invokableController::class); // --invokable controller

//Route::get('/',[resourceController::class,'index']); // --resource controller



Route::get('/', function () {
    return view('website.about');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/service', function () {
    return view('website.service');
});

Route::get('/contact',[contactController::class,'create']);
Route::post('/insert_contact',[contactController::class,'store']);


Route::get('/signup',[userController::class,'create']);
Route::post('/insert_signup',[userController::class,'store']);

Route::get('/login',[userController::class,'login']);
///============================ Admin ==================================

Route::get('/admin_login',[adminController::class,'index'] );

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/manage_contact',[contactController::class,'index']);

Route::get('/add_categories', [categoryController::class,'create']);
Route::post('/insert_categories', [categoryController::class,'store']);

Route::get('/manage_categories', [categoryController::class,'index']);
Route::get('/delete_categories/{id}', [categoryController::class,'destroy']);

Route::get('/manage_user', [userController::class,'index']);
Route::get('/delete_user/{id}', [userController::class,'destroy']);


Route::get('/manage_service', [serviceController::class,'index']);
Route::get('/delete_service/{id}', [serviceController::class,'destroy']);


Route::get('/manage_contact', [contactController::class,'index']);
Route::get('/delete_contact/{id}', [contactController::class,'destroy']);