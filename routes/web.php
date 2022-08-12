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

Route::get('/', 'HomeController@index')->name('Home');


Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@getLogout']);
Route::get('/login', 'Auth\LoginController@getLogin')->name('login');
Route::post('/login', 'Auth\LoginController@postLogin');
Route::get('/register', 'Auth\RegisterController@getRegister')->name('register');
Route::post('/register', 'Auth\RegisterController@postRegister');
Route::get('/room', 'RoomController@index')->name('Kind_of_room');
Route::get('blog', 'BlogController@index')->name('Blog');
Route::get('about', 'AboutController@index')->name('About');
Route::match(['get', 'post'], 'contact', 'ContactController@add')->name('contact');
Route::match(['get', 'post'], '/room_detail/{id}', 'RoomController@booking')->name('room_details');
Route::get('/room_by_cate/{id_kind_of_room}', 'RoomController@roombycate')->name('room_by_cate');

Route::middleware(['auth'])->group(function () {
    Route::get('/booked/{id_user}', 'List_bookingController@booked')->name('booked');
    Route::get('/booking_details/{id}', 'List_bookingController@bookingDetail')->name('booking_details');
    Route::match(['get', 'post'], '/pay/{id}', 'PayController@index')->name('pay');
    Route::get('/pay_detail/{id}', 'PayController@detailPay')->name('pay_detail');
    Route::get('/end','PayController@end')->name('end');
    //Route::match(['get', 'post'], '/bank/{id}', 'PayController@bank')->name('bank');
    Route::get('/bank/{id}', 'PayController@bank')->name('bank');
    Route::post('/bank/{id}', 'PayController@saveBank')->name('save_bank');
    //admin
    Route::get('/admin', 'AdminController@index')->name('admin');
    //loai phong
    Route::match(['get', 'post'], 'admin/kind_of_room_add', 'Kind_of_roomController@add')->name('kind_of_room_add');
    Route::get('/admin/kind_of_room_list', 'Kind_of_roomController@index')->name('list_kind_of_room');
    Route::get('/admin/kind_of_room_detail/{id}', 'Kind_of_roomController@detail')->name('kind_of_room_detail');
    Route::post('/admin/kind_of_room_update/{id}', 'Kind_of_roomController@update')->name('kind_of_room_update');
    Route::get('/admin/kind_of_room_delete/{id}', 'Kind_of_roomController@deleteKind')->name('kind_of_room_delete');
    //phong
    Route::match(['get', 'post'], 'admin/room_add', 'RoomController@add')->name('room_add');
    Route::get('/admin/room_list', 'RoomController@index1')->name('list_room');
    Route::get('/admin/room_detail/{id}', 'RoomController@detail')->name('room_detail');
    Route::post('/admin/room_update/{id}', 'RoomController@update')->name('room_update');
    Route::get('/admin/room_detail/{id}', 'RoomController@detail')->name('room_detail');
    Route::get('/admin/room_delete/{id}', 'RoomController@deleteRoom')->name('room_delete');
    //service
    Route::get('/admin/service_list', 'ServiceController@index')->name('list_service');
    Route::match(['get', 'post'], 'admin/service_add', 'ServiceController@add')->name('service_add');
    Route::get('/admin/service_detail/{id}', 'ServiceController@detail')->name('service_detail');
    Route::post('/admin/service_update/{id}', 'ServiceController@update')->name('service_update');
    Route::get('/admin/service_delete/{id}', 'ServiceController@deleteService')->name('service_delete');
    //banner
    Route::get('/admin/banner_list', 'BannerController@index1')->name('list_banner');
    Route::match(['get', 'post'], 'admin/banner_add', 'BannerController@add')->name('banner_add');
    Route::get('/admin/banner_detail/{id}', 'BannerController@detail')->name('banner_detail');
    Route::get('/admin/banner_delete/{id}', 'BannerController@deleteBanner')->name('banner_delete');
    Route::post('/admin/banner_update/{id}', 'BannerController@update')->name('banner_update');


    //contact
    Route::get('/admin/contact_list', 'ContactController@index')->name('list_contact');
    Route::get('/admin/contact_delete/{id}', 'ContactController@deleteContact')->name('contact_delete');

    //list-booking
    Route::get('/admin/booking_list', 'List_bookingController@index')->name('list_booking');
    Route::get('/admin/booking_delete/{id}', 'List_bookingController@deleteBooking')->name('booking_delete');


    //blog
    Route::get('/admin/blog_list', 'BlogController@index1')->name('list_blog');
    Route::match(['get', 'post'], 'admin/blog_add', 'BlogController@add')->name('blog_add');
    Route::get('/admin/blog_detail/{id}', 'BlogController@detail')->name('blog_detail');
    Route::post('/admin/blog_update/{id}', 'BlogController@update')->name('blog_update');
});
