<?php

use App\Http\Controllers\arbaController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelResourceController;
use App\Http\Controllers\religController;
use App\Http\Controllers\naturController;



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

    //arba controller

Route::resource('addPlaceToArba', arbaController::class);
//relig controller
Route::resource('addReligArea', religController::class);
//nature controller
Route::resource('addPlaceToNuture', naturController::class);
Route::resource('list',HotelResourceController::class);
Route::resource('blogs', blogController::class)-> middleware('auth');
Route::delete('/users/{id}', [userController::class, 'destroy'])->name('deleteUser');

// to display index
Route::get('/', [userController::class, 'index'])->name('index');

// navigate to signup page
Route::get('/signup',[userController::class,'create'])->name('signup') -> middleware('guest');

//registiration os user
Route::POST('/singup',[userController::class,'store'])->name('store') -> middleware('guest');

//navigate to login
Route::get('/login', [userController::class, 'login'])->name('login') -> middleware('guest');

//login user
Route::POST('/login',[userController::class,'authenticate'])->name('authenticate');

//store user's message
Route::post('/', [messageController::class, 'store'])->name('storeMessage') -> middleware('auth');

//user log out
Route::post('/logout', [userController::class, 'logout'])->name('logout')-> middleware('auth');
//

// navigate to users list
Route::get('/users', [userController::class, 'usersIndex'])->name('usersIndex');

// message controller for admin
Route::resource('posts', messageController::class)-> middleware('auth');
//Dispalys Hotel.blade.php
Route::get('/hotel', [HotelController::class, 'index'])->name('hotel')-> middleware('auth');;
//To filter the hotel from the DB
// Route::get('/hotels', [HotelController::class, 'to_search'])->name('search');
//To display listof hotels for admin


Route::get('/to_book/{id}', [BookController::class, 'book'])->name('to_book')-> middleware('auth');

// go to destin list
Route::get('/destinList', [userController::class, 'goToDestinLIst'])->name('goToL')-> middleware('auth');




