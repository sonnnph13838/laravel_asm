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
//     return view('welcome');
// });
Route::get('/', 'HomeController@index')->name('Home');
Route::get('/room', 'RoomController@index')->name('Kind_of_room');
Route::get('blog', 'BlogController@index')->name('Blog');
Route::get('contact', 'ContactController@index')->name('Contact');
Route::get('about', 'AboutController@index')->name('About');
