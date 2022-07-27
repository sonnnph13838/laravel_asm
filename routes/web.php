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
Route::get('/tuyen', 'HomeController@index');
Route::get('/logout', ['as'=>'logout','uses'=>'Auth\LoginController@getLogout']);
Route::get('/login','Auth\LoginController@getLogin');
Route::post('/login','Auth\LoginController@postLogin');
Route::get('/register','Auth\RegisterController@getRegister');
Route::post('/register','Auth\RegisterController@postRegister');
Route::middleware(['auth'])->group(function(){
//    Route::get('/sinh-vien', 'SinhVien@index');
//    Route::match(['get','post'],'/sinh-vien/add','SinhVien@add')
//        ->name('route_BackEnd_Users_Add');
//    Route::get('/sinh-vien/detail/{id}', 'SinhVien@detail');
});
