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
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/sondz', 'AdminController@index')->name('sondz');
//loai phong
Route::match(['get', 'post'], 'admin/kind_of_room_add', 'Kind_of_roomController@add')->name('kind_of_room_add');
Route::get('/admin/kind_of_room_list', 'Kind_of_roomController@index')->name('list_kind_of_room');
//phong
Route::match(['get', 'post'], 'admin/room_add', 'RoomController@add')->name('room_add');
Route::get('/admin/room_list', 'RoomController@index1')->name('list_room');

//service
Route::get('/admin/service_list', 'ServiceController@index')->name('list_service');
Route::match(['get', 'post'], 'admin/service_add', 'ServiceController@add')->name('service_add');
