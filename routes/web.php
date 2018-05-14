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


Route::get("Productdetail/{id}",'ControllerSanPham@productdetail')->name('Productdetail');

Route::get('catalog',function(){
	return view('catalog_sidebar');
});
Route::get('shopping',function(){
	return view('shopping_cart');
});

Route::get('Editproduct/{id}','ControllerSanPham@editproduct');
Route::post('Editproductpost','ControllerSanPham@saveproduct')->name('Editproductpost');



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
	$user = App\sanpham::find(5)->nguoiban->toArray();
	return $user;
});
Route::get('contact',function(){
	return view('contact');
});

Route::get('checkout',function(){
	return view('checkout');
});

Route::get('shoppingcart',function(){
	return view('shopping_cart');
});

Route::get('order',function(){
	return view('order');
});

Route::get('customer',function(){
	return view('EditCustomerInformation');
});
Route::get('password',function(){
	return view('ResetPassword');
});
Route::get('deliverypolicy',function(){
	return view('FAQ');
});

Route::get('listproduct',function(){
	return view('listproduct');
});



//Redirect to view ResetPassword
Route::get('ChangePassword',['as'=>'resetpass', 'uses'=> 'InformationController@Chpass']);
//Redirect to view EditInfor
Route::get('Infomation',['as'=>'editInf', 'uses'=> 'InformationController@inf']);

//Redirect to view "Đăng Nhập"
Route::get('Login',['as'=>'signin','uses'=>'ControllerHome@Login']);
//Redirect to view "Đăng Ký""
Route::get('Register',['as'=>'signup','uses'=>'ControllerHome@Register']);
//Redirect to view "Giới thiệu"
Route::get("about",'ControllerHome@about');
//Redirect to view "Trang chủ"
Route::get('home',['as'=>'homepage','uses'=>'ControllerHome@home'])->name('home');
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
Route::get('Search',['as'=>'search','uses'=>'Controller@SearchProduct']);
Route::get('SearchResult',function(){
	return view('Search');
});
Route::get('Test','Controller@Test');