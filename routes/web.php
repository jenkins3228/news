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

Route::get('/','IndexController@show')->name('home');
Route::get('/author','AuthorController@form');
Route::get('/author/add','AuthorController@addAuthor');
Route::get('/user/profile','SettingsController@profile')->name('profile');
Route::get('/user/account','SettingsController@account');
Route::post('/post/add','PostController@postAdd');
Route::get('/news','IndexController@news');
Route::get('/articles','IndexController@article');

Auth::routes();
