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

Route::get('/', "Pages@homePage")->name('home');
Route::get('/pages/home', "Pages@homePage");
Route::get('/pages/admin', "Pages@adminPage") -> name('page.admin') ;
Route::get('/pages/user', "Pages@userPage")-> name('page.user');

