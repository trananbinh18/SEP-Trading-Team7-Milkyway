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

Route::get('Information',function(){
	return view('EditCustomerInformation');
});
Route::get('Password',function(){
	return view('ResetPassword');
});
Route::get('deliverypolicy',function(){
	return view('FAQ');
});

Route::get('ListProduct',function(){
	return view('listproduct');
});
Route::get('Vegetables',function(){
	return view('Vegetables');
});
Route::get('donhang',function(){
	return view('Donhang');
});


//Redirect to view Rau

//Redirect to view ResetPassword
Route::get('ChangePassword',['as'=>'resetpass', 'uses'=> 'InformationController@Chpass']);
//Redirect to view EditInfor
Route::get('Infomation',['as'=>'editInf', 'uses'=> 'InformationController@inf']);

//Redirect to view "Đăng Nhập"
Route::get('Login',['as'=>'signin','uses'=>'ControllerHome@Login']);
Route::get('Logout',['as'=>'logout','uses'=>'ControllerAccount@Logout']);
//Redirect to view "Đăng Ký""
Route::get('Register',['as'=>'signup','uses'=>'ControllerHome@Register']);
//Redirect to view "Giới thiệu"
Route::get("about",'ControllerHome@about');
//Redirect to view "Trang chủ"
Route::get('home',['as'=>'homepage','uses'=>'ControllerHome@home']);
//Đăng nhập và xử lí đăng nhập
// Route::post('login','AuthController@postLogin');
Route::post('Signin',['as'=>'signinacc','uses'=>'ControllerAccount@Login']);

Route::get('Shipping',['as'=>'Ship','uses'=>'ControllerHome@Shipping']);
Route::get('Contact',['as'=>'Cnt','uses'=>'ControllerHome@Contact']);

//Đăng kí cho người mua
Route::get('SignUp','AuthController@getSignUpBuyer');
Route::post('SignUpBuyer',['as'=>'SignUpBuyer','uses'=>'AuthController@postSignUpBuyer']);
//Đăng kí cho người bán
Route::get('SignUp','AuthController@getSignUpSeller');
Route::post('SignUpSeller',['as'=>'SignUpSeller','uses'=>'AuthController@postSignUpSeller']);
//Đăng sản phẩm
Route::get('Addproduct',['as'=>'PostProduct','uses'=>'Controller@Getproduct']);
Route::post('CreateProduct',['as'=>'CreateProduct','uses'=>'Controller@Postproduct']);
//Tìm kiếm sản phẩm
Route::get('Search',['as'=>'search','uses'=>'Controller@SearchProduct']);
Route::get('SearchResult',function(){
	return view('Search');
});
Route::get('Test','Controller@Test');
//Return view ListProduct
Route::get('ListProduct', function(){
	return view('ListProduct');
});
//Trả về dữ liệu sản phẩm lên view
Route::get('ListProduct',['as'=>'ListProduct','uses'=>'LoadDataController@index']);
//Mua sản phẩm
Route::get('BuyProduct/{id}',['as'=>'buyproduct','uses'=>'Controller@BuyProduct']);
Route::get('shopping',['as'=>'shopping','uses'=>'Controller@Cart']);