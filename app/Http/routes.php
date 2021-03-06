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
Route::any('pageArticle',"IndexHome\IndexHomeController@pageArticle");
Route::any("photoWall","IndexHome\IndexHomeController@photoWall");
Route::any("customer","IndexHome\IndexHomeController@customer");
Route::any("cart","IndexHome\CartController@cart");
Route::any("bjh","IndexHome\BjhController@index");
Route::any('senth',"IndexHome\SenthController@index");
Route::any('yishuh',"IndexHome\YishuhController@index");
Route::any('upload',"Common\CommonController@upload");
Route::any('detail/{productId}',"IndexHome\IndexHomeController@detail");
Route::any('bjhDetial/productId/{id}',"IndexHome\BjhController@detail");
//后台
Route::any('admin',"AdminHome\AdminHomeController@admin");
Route::post('Adminlogin',"AdminHome\AdminHomeController@login");
Route::any('index',"AdminHome\AdminHomeController@index");
Route::any('zuoping/{cateId?}',"AdminHome\ZuoPingController@zuoping");
Route::any('insert',"AdminHome\ZuoPingController@insert");
Route::any('system',"AdminHome\SystemController@system");
Route::any('Adminloginout',"AdminHome\AdminHomeController@loginout");
Route::any('category',"AdminHome\CategoryController@category");
Route::any('insertCate',"AdminHome\CategoryController@insertCate");
Route::any('cateProccess',"AdminHome\CategoryController@cateProccess");
Route::any('editCate/cateId/{cateId}',"AdminHome\CategoryController@editCate");
Route::any('delCate/cateId/{cateId}',"AdminHome\CategoryController@delCate");
Route::any('insertProccess',"AdminHome\ZuoPingController@insertProccess");
Route::any('editProduct/productId/{productId}',"AdminHome\ZuoPingController@editProduct");
Route::any('goodType',"AdminHome\GoodTypeController@goodType");
Route::auth();


Route::get('/home', 'HomeController@index');
// Route::resource('test','TestController');
// Route::resource('tangshuai','TestController');
Route::resource('goodType',"AdminHome\GoodTypeController");
Route::resource('attribute',"AdminHome\AttributeController");


