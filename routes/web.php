<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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
    return view('landingpage');
});

Route::get('/Home', [ItemController::class, 'viewHome'])->middleware('checkUser', 'localization');
Route::get('/ItemDetail/{id}', [ItemController::class, 'viewItemDetail'])->name('itemdetail')->middleware('checkUser', 'localization');
Route::get('/Register', [UserController::class, 'viewRegister'])->middleware('localization');
Route::post('/Register', [UserController::class, 'register']);
Route::get('/Login', [UserController::class, 'viewLogin']);
Route::post('/Login', [UserController::class, 'login'])->middleware('localization');
Route::get('/Buy/{id}', [ItemController::class, 'buyItem'])->middleware('checkUser');
Route::get('/Cart', [CartController::class, 'showCart'])->middleware('checkUser', 'localization');
Route::get('/RemoveCart/{id}', [CartController::class, 'removeCart'])->middleware('checkUser');
Route::post('/Checkout', [CartController::class, 'checkOut'])->middleware('checkUser');
Route::get('/EditAccount', [UserController::class, 'showEditProfile'])->middleware('localization');
Route::get('/Profile', [UserController::class, 'showProfile'])->middleware('checkUser')->middleware('checkUser', 'localization');
Route::post('/UpdateProfile', [UserController::class, 'updateProfile'])->middleware('checkUser', 'localization');
Route::get('/Update/{id}', [UserController::class, 'showUpdate'])->middleware('checkAdmin','localization');
Route::post('/Update/{id}', [UserController::class, 'update'])->middleware('checkAdmin');
Route::get('/Delete/{id}', [UserController::class, 'showDelete'])->middleware('checkAdmin');
Route::get('/LogOut', [UserController::class, 'logOut'])->middleware('localization');

Route::get('/language/{locale}', [LocalizationController::class, 'language']);
