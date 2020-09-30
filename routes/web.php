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
Route::post('/massage','HomeController@pesan');
Route::get('/Rumahsakit','HomeController@Info');

Route::get('/login','AuthController@index')->name('login');
Route::get('/register','AuthController@register');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');
Route::POST('/tambah','AuthController@adduser');

Route::get('/pasien','PasienController@index')->middleware('auth');
Route::post('/pasien/create','PasienController@create')->middleware('auth');
Route::get('/pasien/{id}/edit','PasienController@edit')->middleware('auth');
Route::post('/pasien/{id}/update','PasienController@update')->middleware('auth');
Route::get('/pasien/{id}/delete','PasienController@delete')->middleware('auth');

Route::get('/user','UserController@index')->middleware('auth');
Route::get('/user/{id}/edit','UserController@edit')->middleware('auth');
Route::POST('/user/{id}/updatepassword','UserController@updatepassword')->middleware('auth');
Route::POST('/user/{id}/updatelevel','UserController@updatelevel')->middleware('auth');
Route::get('/user/{id}/delete','UserController@delete')->middleware('auth');

Route::get('/profile/{id}','ProfileController@index')->middleware('auth');
Route::get('/profile/{id}/edit','ProfileController@edit')->middleware('auth');
Route::POST('/profile/{id}/upload','ProfileController@upload')->middleware('auth');

Route::get('/pesan','DashboardController@pesan')->middleware('auth');
Route::get('/pesan/{id}/delete','DashboardController@pesandelete')->middleware('auth');
Route::get('/dashboard','DashboardController@index')->middleware('auth');
