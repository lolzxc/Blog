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

// Route::get('/', function () {
//     return view('welcome');
// }, ['test' => 'WORKING']);

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/home', 'home')->name('home');
Route::view('/signin', 'signin')->name('signin');
Route::view('/register', 'register')->name('register');
