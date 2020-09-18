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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pesan/{id}', 'HomeController@show');
Route::get('/pesanan', 'HomeController@cart');

Route::delete('/pesanan/{id}','HomeController@destroy');
Route::post('/pesan/{id}', 'HomeController@order');
Route::post('/pesanan/bayar/{id}', 'HomeController@payment');



//routing view admin
Route::get('/admin', 'AdminController@index')->name('admin_home');

//view makanan
Route::get('/admin/makanan', 'MakananController@index')->name('food_index');
Route::get('/admin/makanan/create', 'MakananController@create')->name('create_food');
Route::get('/admin/makanan/edit/{makanan}', 'MakananController@edit')->name('edit_food');


//crud makanan
Route::post('/admin/makanan/create','MakananController@store')->name('store_food');
Route::delete('/admin/makanan/{makanan}','MakananController@destroy')->name('destroy_food');
Route::put('/admin/makanan/{makanan}','MakananController@update')->name('update_food');




//view admin user
Route::get('/admin/user', 'AdminController@user')->name('admin_user');
