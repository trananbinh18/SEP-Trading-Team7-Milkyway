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

Route::get('product-detail',function(){
	return view('product_detail');
});
Route::get('Addproduct',function(){
	return view('Addproduct');
});
Route::get('catalog',function(){
	return view('catalog_sidebar');
});
Route::get('shopping',function(){
	return view('shopping_cart');
});

Route::get('Editproduct/{id}','SanPhamController@editproduct');

Route::get('de',function(){
	return view('EditProduct');
});


Route::post('Editproductpost',['as'=>'Editproductpost','uses'=>'SanPhamController@edit']);

Route::get('info',function(){
	return view('changeInfo');
});
Route::get('phanquyen',function(){
	return view('Phanquyen');
});
Route::get('featured',function(){
	return view('Featured_Products');
});
Route::get('discounted',function(){
	return view('product_is_discounted');
});
Route::get('Admin',function(){
	return view('databackend');
});

Route::get('testdb',function(){
	$user = App\sanpham::all();
	return $user;
});

Route::get('Login',['as'=>'signin','uses'=>'ControllerHome@Login']);
Route::get('Register',['as'=>'signup','uses'=>'ControllerHome@Register']);
Route::get("about",'ControllerHome@about');
Route::get("home",'ControllerHome@home');
//Đăng nhập và xử lí đăng nhập
Route::post('login','AuthController@login')->name('login');

Route::get('Addproduct','Controller@Getproduct');
Route::post('CreateProduct',['as'=>'CreateProduct','uses'=>'Controller@Postproduct']);