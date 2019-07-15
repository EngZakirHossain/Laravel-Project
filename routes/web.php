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

Route::get('/dashboard','Admincontroller@dashboard');

Route::get('/addcontract','Admincontroller@add_contract');

Route::get('/allcontract','Admincontroller@all_contract');
Route::post('/save_data','Admincontroller@save_data');
Route::get('/delect_content/{id}','Admincontroller@delect_content');
Route::get('/edit_content/{id}','Admincontroller@edit_content');
Route::post('/update_data/{id}','Admincontroller@update_data');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
