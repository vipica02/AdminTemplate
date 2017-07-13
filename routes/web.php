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
//khong can login van xem duoc

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function(){
        // login thi moi xem duoc
    Route::group(['middleware' => ['ckAdmin']], function(){
        //phai login voi quyen admin moi xem duoc
        Route::get('admin','Admin\DashboardController@index');
        Route::get('admin/category', 'Admin\CategoryController@index');
    });
});