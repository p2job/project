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
    return view('welcome');
});

Route::get('/login', 'UserController@index');
Route::post('/login/checklogin', 'UserController@checklogin');
Route::get('/login/successlogin', 'UserController@successlogin');
Route::get('/login/logout', 'UserController@logout');

Route::get('/admin', 'UserController@admin');
Route::get('/home', 'UserController@users');
Route::get('/admin/equip', 'EquipmentController@index');
Route::resource('/equip', 'EquipmentController');
Route::get('/admin/search', 'SearchController@search')->name('admin.search');
Route::get('/admin/action', 'SearchController@action')->name('admin.action');
Route::get('/admin/borrows', 'BorrowaController@index');
Route::resource('/borrows', 'BorrowaController');
Route::get('/admin/report', 'BorrowaController@repost');



Route::get('/home/search', 'SearchController@search1')->name('home.search');
Route::get('/home/action', 'SearchController@action')->name('home.action');
Route::resource('/borrow', 'BorrowhController');
Route::get('/home/borrow/{id}', 'BorrowhController@index');
Route::get('/home/report/{id}', 'BorrowhController@repost');
Route::get('/downloadPDF/{id}','BorrowhController@downloadPDF');
