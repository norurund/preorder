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

Route::get('/', 'FolderController@ordersform')->name('order.create');
Route::get('/{id}/thankyou', 'FolderController@thankyou')->name('order.thankyou');
Route::post('/', 'FolderController@create');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/admin/ref', 'AdminController@showorders')->name('admin.ref');
    Route::get('/admin/ref/dl', 'AdminController@export')->name('admin.export');
});

Auth::routes();