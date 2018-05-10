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

Route::get('home',function(){
	return view('home');
});
Route::get('product-detail',function(){
	return view('product_detail');
});
Route::get('about',function(){
	return view('about');
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

Route::get('SignUp',function(){
	return view('SignUp');
});
Route::get('SignIn',function(){
	return view('SignIn');
});
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

//Đăng nhập và xử lí đăng nhập
Route::post('login','AuthController@login')->name('login');
//
Route::get('Login',['as'=>'signin','uses'=>'Controller@Login']);
Route::get('Register',['as'=>'signup','uses'=>'Controller@Register']);
Route::get("about",'Controller@about');
Route::get("home",'Controller@home');

Route::get('Addproduct','Controller@Getproduct');
Route::post('CreateProduct',['as'=>'CreateProduct','uses'=>'Controller@Postproduct']);