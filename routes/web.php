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

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/', 'PagesConrtoller@index')->name('home');
Route::get('/admin/dashboard', 'PagesConrtoller@dashboard')->name('admin.dashboard');
Route::get('/admin/main', 'MainpagesController@index')->name('admin.main');
Route::put('/admin/main', 'MainpagesController@update')->name('admin.main.update');




Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
