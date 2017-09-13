<?php

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
Route::get('/','mycontroller@gioithieu');
Route::get('email','mycontroller@email');
Route::get('hoatdongsv','mycontroller@hoatdongsv');
Route::get('hoatdong','mycontroller@hoatdongcb');
Route::post('login','mycontroller@login')->name('login');