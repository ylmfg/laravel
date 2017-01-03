<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::any('/',"IndexHome\IndexHomeController@index");
Route::any("photoWall","IndexHome\IndexHomeController@photoWall");
Route::any("customer","IndexHome\IndexHomeController@customer");
Route::any("cart","IndexHome\IndexHomeController@cart");

Route::any("bjh","IndexHome\BjhController@index");
Route::any('senth',"IndexHome\SenthController@index");
Route::any('yishuh',"IndexHome\YishuhController@index");
Route::any('admin',"AdminHome\AdminHomeController@admin");