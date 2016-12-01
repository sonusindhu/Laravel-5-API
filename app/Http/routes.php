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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/v1/products', function () {
//    return view('welcome');
//});


//Route::get('/v1/products', [function() {
//
//$products = App\Model\Product::all();
////$users = DB::table('products')->get();
////print_r($users);exit;
//    $products = array();
//return Response::json(array(
//        'error' => false,
//        'products' => $products,
//        'status_code' => 200
//    ));
//exit;
//}]);

// Product API routes
Route::get('/v1/products/', 'productController@index');
Route::get('/v1/products/{id?}', 'productController@get');
Route::get('/v1/productsByCategory/{category_id?}', 'productController@getbycategory');

// Category API routes
Route::get('/v1/categories', 'categoryController@index');
Route::get('/v1/category/{id?}', 'categoryController@get');

//Users API routes
Route::get('/v1/users/', 'userController@index');
Route::get('/v1/user/{id?}', 'userController@get');

