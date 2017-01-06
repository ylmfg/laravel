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
//前台
Route::any('/',"IndexHome\IndexHomeController@index");
Route::any("photoWall","IndexHome\IndexHomeController@photoWall");
Route::any("customer","IndexHome\IndexHomeController@customer");
Route::any("cart","IndexHome\IndexHomeController@cart");
Route::any("bjh","IndexHome\BjhController@index");
Route::any('senth',"IndexHome\SenthController@index");
Route::any('yishuh',"IndexHome\YishuhController@index");
Route::any('upload',"Common\CommonController@upload");
//后台
Route::any('admin',"AdminHome\AdminHomeController@admin");
Route::post('login',"AdminHome\AdminHomeController@login");
Route::any('index',"AdminHome\AdminHomeController@index");
Route::any('zuoping',"AdminHome\ZuoPingController@zuoping");
Route::any('insert',"AdminHome\ZuoPingController@insert");
Route::any('system',"AdminHome\SystemController@system");
Route::any('loginout',"AdminHome\AdminHomeController@loginout");
Route::any('category',"AdminHome\CategoryController@category");
Route::any('insertCate',"AdminHome\CategoryController@insertCate");
Route::any('cateProccess',"AdminHome\CategoryController@cateProccess");
Route::any('editCate/cateId/{cateId}',"AdminHome\CategoryController@editCate");
Route::any('delCate/cateId/{cateId}',"AdminHome\CategoryController@delCate");
Route::any('insertProccess',"AdminHome\ZuoPingController@insertProccess");