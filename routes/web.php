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



//admin
Route::get('/admin', 'AdminController@index')->name('Admin');
Route::match(['get', 'post'], 'admin/Kind_of_room_add', 'Kind_of_roomController@add')->name('Kind_of_room_add');
Route::get('/admin/Kind_of_room_list', 'Kind_of_roomController@index')->name('List_kind_of_room');
Route::match(['get', 'post'], 'admin/Room_add', 'RoomController@add')->name('Room_add');
Route::get('/admin/Room_list', 'RoomController@index')->name('List_room');
