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

Route::get('/', function () {
    return view('Home/home');
});
Route::get('home',['uses'=>'UserController@home_index']);
Route::get('service',['uses'=>'UserController@service_index']);
Route::get('reservation',['uses'=>'UserController@reservation_index']);
Route::get('aboutus',['uses'=>'UserController@aboutus_index']);

Route::get('admin',['uses'=>'UserController@adminhome_index']);
Route::get('login',['uses'=>'UserController@adminlogin_index']);

Route::post('signin',['uses'=>'UserController@signin']);

Route::get('admin',['uses'=>'UserController@adminhomepage']);

Route::get('logout',['uses'=>'UserController@adminlogout']);