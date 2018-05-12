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
Route::get('SignUp',function(){
	return view('SignUp');
});
Route::get('SignIn',function(){
	return view('SignIn');
});
Route::get('Admin',function(){
	return view('databackend');
});

Route::get('testdb',function(){
	$user = App\sanpham::all();
	return $user;
});
Route::get('contact',function(){
	return view('contact');
});
// <<<<<<< HEAD
Route::get('checkout',function(){
	return view('checkout');
});

Route::get('shoppingcart',function(){
	return view('shopping_cart');
});

Route::get('order',function(){
	return view('order');
});

// ======
Route::get('customer',function(){
	return view('EditCustomerInformation');
});
Route::get('password',function(){
	return view('ResetPassword');
});
Route::get('deliverypolicy',function(){
	return view('FAQ');
});
// >>>>>>> 7de33c3894ff48fda4c8d1eeb7f3414fce452723

//Redirect to view "Đăng Nhập"
Route::get('Login',['as'=>'signin','uses'=>'ControllerHome@Login']);
//Redirect to view "Đăng Ký""
Route::get('Register',['as'=>'signup','uses'=>'ControllerHome@Register']);
//Redirect to view "Giới thiệu"
Route::get("about",'ControllerHome@about');
//Redirect to view "Trang chủ"
Route::get('home',['as'=>'homepage','uses'=>'ControllerHome@home']);
//Đăng nhập và xử lí đăng nhập
// Route::post('login','AuthController@postLogin');
Route::post('Signin',['as'=>'signinacc','uses'=>'ControllerAccount@Login']);

//Đăng kí cho người mua
Route::get('SignUp','AuthController@getSignUpBuyer');
Route::post('SignUp',['as'=>'SignUp','uses'=>'AuthController@postSignUpBuyer']);
//Đăng kí cho người bán
Route::get('SignUp','AuthController@getSignUpSeller');
Route::post('SignUp',['as'=>'SignUp','uses'=>'AuthController@postSignUpSeller']);
//Đăng sản phẩm
Route::get('Addproduct','Controller@Getproduct');
Route::post('CreateProduct',['as'=>'CreateProduct','uses'=>'Controller@Postproduct']);
//Tìm kiếm sản phẩm
Route::get('Search',['as'=>'Search','uses'=>'Controller@Searchproduct']);