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
})->name('Checkout');

Route::get('shoppingcart',function(){
	return view('shopping_cart');
});

Route::get('deliverypolicy',function(){
	return view('FAQ');
});

Route::get('Vegetables',function(){
	return view('Vegetables');
});
Route::get('donhang',function(){
	return view('Donhang');
});

Route::get('Legal',['as'=>'Le','uses'=>'ControllerHome@Legal']);
Route::get('Term&Condition',['as'=>'Term','uses'=>'ControllerHome@Term']);

//Redirect to view "Đăng Nhập"
Route::get('Login',['as'=>'signin','uses'=>'ControllerHome@Login']);
Route::get('Logout',['as'=>'logout','uses'=>'ControllerAccount@Logout']);
//Redirect to view "Đăng Ký""
Route::get('Register',['as'=>'signup','uses'=>'ControllerHome@Register']);
//Redirect to view "Giới thiệu"
Route::get("about",['as'=>'About','uses'=>'ControllerHome@about']);
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
Route::get('ChangeInfomation',['as'=>'sellerChangeInfo','uses'=>'Controller@sellerChangeInfomation']);
Route::get('Test','Controller@Test');
//Trả về dữ liệu sản phẩm lên view
Route::get('Listproduct',['as'=>'listpro','uses'=>'LoadDataController@index']);
//Mua sản phẩm
Route::get('BuyProduct',['as'=>'buyproduct','uses'=>'Controller@BuyProduct']);
Route::get('shopping',['as'=>'shopping','uses'=>'Controller@Cart']);
Route::get('checkout',['as'=>'Checkout','uses'=>'Controller@CheckoutCart']);
Route::get('DeleteProduct/{id}',['as'=>'deleteproduct','uses'=>'Controller@Delete']);
Route::post('continueshopping','Controller@continueshopping')->name('continueshopping');
Route::post('order',['as'=>'Order','uses'=>'Controller@postCheckout']);

//Redirect to view ResetPassword for Employees
Route::get('ResetPassword',['as'=>'ResetPassword', 'uses' =>'AuthController@resetPass']);
//Redirect to view ResetPassword for Buyer
Route::get('BuyerPassword',['as'=>'Buyer_Pass', 'uses'=> 'AuthController@Chpass']);
Route::post('changePassword',['as'=>'changePassword','uses'=>'AuthController@ChangePassword']);

//Redirect to view EditInfor
Route::get('BuyerInformation',['as'=>'Buyer_Infor', 'uses'=> 'AuthController@inf']);
Route::post('changeInfor',['as'=>'changeInfor','uses'=>'AuthController@ChangeInfor']);

//Trả về toàn bộ sản phẩm trong database lên view
Route::get('Products', ['as' => 'listprosale', 'uses'=> 'LoadDataController@loadListProduct_Sale']);
//Danh sách tài khoản người bán
Route::get('Account_Seller',['as'=>'Account_Seller', 'uses' => 'LoadDataController@accountSeller']);
//Danh sách tài khoản người mua
Route::get('Account_Buyer',['as'=>'Account_Buyer', 'uses' => 'LoadDataController@accountBuyer']);
//Return view Đơn Hàng
Route::get('Orders',['as' =>'Orders','uses' => 'LoadDataController@orders']);
//Return view Seller Change Passowrd
Route::get('SellerPassword', ['as'=>'Seller_Pass','uses' =>'AuthController@Chpass']);
//Return view Seller Change Information
Route::get('SellerInformation', ['as'=>'Seller_Infor','uses'=>'AuthController@inf']);