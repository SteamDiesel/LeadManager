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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', function(){
    return view('pages.profile');
});
Route::get('/team', function(){
    return view('pages.team');
});
Route::get('/settings', function(){
    return view('pages.settings');
});
Route::get('/leads', function(){
    return view('pages.leads');
});
Route::get('/tasks', function(){
    return view('pages.tasks');
});
