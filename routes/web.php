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
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/filldata', function () {
    return view('fillDataRegis');
});

Route::get('/reset', function () {
    return view('resetPassword');
});

Route::get('/404', function () {
    return view('404');
});
Route::get('/500', function () {
    return view('500');
});
Route::get('/503', function () {
    return view('503');
});

Route::get('/dashboard', function (){
    return view('dashboard/dashboardHome');
});