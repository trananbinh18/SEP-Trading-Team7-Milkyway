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

Route::get('',['as'=>'homepageA','uses'=>'ControllerHome@home']);


Route::get("Productdetail/{id}",'ControllerSanPham@productdetail')->name('Productdetail');

Route::get('catalog','ControllerSanPham@catalog')->name('Catalog');

// Route::get('catalog/{id}','ControllerSanPham@catalog');

Route::get('shopping',function(){
	return view('Shopping_cart');
});

Route::get('Editproduct/{id}','ControllerSanPham@editproduct');
Route::post('Editproductpost','ControllerSanPham@saveproduct')->name('Editproductpost');

Route::get('popUp',function(){
	return view('popup');
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
// Route::get('SignUp',function(){
// 	return view('SignUp');
// });
// Route::get('SignIn',function(){
// 	return view('SignIn');
// });
// Route::get('Admin',function(){
// 	return view('databackend');
// });

Route::get('testdb',function(){
	$user = App\sanpham::find(5)->nguoiban->toArray();
	return $user;
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
Route::get('Error',function(){
	return view('Error');
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
// Route::get('ChangeInfomation',['as'=>'sellerChangeInfo','uses'=>'Controller@sellerChangeInfomation']);
Route::get('Test','Controller@Test');
//Trả về dữ liệu sản phẩm chưa duyệt của người bán
Route::get('Listproduct',['as'=>'listpro','uses'=>'LoadDataController@index']);
//Trả về view Thống kê
Route::get('Salerevenue',['as'=>'Salerevenue','uses'=>'LoadDataController@Salerevenue']);
//Trả về dữ liệu thống kê theo thang
Route::get('SalerevenueDatathang/{id}','LoadDataController@loadDataAnalyzethang');
//Trả về dữ liệu thống kê theo ngay
Route::get('SalerevenueDatangay/{id}','LoadDataController@loadDataAnalyzengay');
//Trả về dữ liệu thống kê theo tuan
Route::get('SalerevenueDatatuan/{id}','LoadDataController@loadDataAnalyzetuan');

//Trả về dữ liệu thống kê theo thang cho nhân viên
Route::get('SalerevenueDatathangforEmployee','LoadDataController@loadDataAnalyzethangforEmployee');
//Trả về dữ liệu thống kê theo ngay cho nhân viên
Route::get('SalerevenueDatangayforEmployee','LoadDataController@loadDataAnalyzengayforEmployee');
//Trả về dữ liệu thống kê theo tuan cho nhân viên
Route::get('SalerevenueDatatuanforEmployee','LoadDataController@loadDataAnalyzetuanforEmployee');
//Trả về dữ liệu thống kê theo tuan cho nhân viên
Route::get('SalerevenueDatanamforEmployee','LoadDataController@loadDataAnalyzenamforEmployee');

//Trả về dữ liệu sản phẩm đã duyệt của người bán
Route::get('ListproductApproved',['as'=>'ListApproved','uses'=>'LoadDataController@ListApproved']);
//Trả về dữ liệu sản phẩm đã ẩn của người bán
Route::get('ListproductHide',['as'=>'ListHide','uses'=>'LoadDataController@ListHide']);
//Ẩn sản phẩm nhanh
Route::get('QuickHideProduct/{id}','LoadDataController@QuickHide');
//Hiện sản phẩm nhanh
Route::get('QuickShowProduct/{id}','LoadDataController@QuickShow');
//Danh sách đơn hàng được đặt
Route::get('Ordersplaced',['as'=>'ordersplaced','uses'=>'LoadDataController@ordersplaced']);
//Xác nhận đơn hàng nhanh
Route::get('Quickodersplaced/{id}',['as'=>'quickodersplaced','uses'=>'LoadDataController@quickodersplaced']);
//chi add product
Route::get('AddToCart/{id}',['as'=>'buyproduct','uses'=>'Controller@AddToCart']);
//Mua sản phẩm
Route::get('BuyProduct',['as'=>'buyproduct','uses'=>'Controller@BuyProduct']);
Route::get('shopping',['as'=>'shopping','uses'=>'Controller@Cart']);
Route::get('Checkout',['as'=>'Checkout','uses'=>'Controller@CheckoutCart']);
Route::get('DeleteProduct/{id}',['as'=>'deleteproduct','uses'=>'Controller@Delete']);
Route::get('DeleteProductMaster/{id}',['as'=>'deleteproductmaster','uses'=>'Controller@DeleteProductMaster']);
Route::post('continueshopping','Controller@continueshopping')->name('continueshopping');
Route::post('order',['as'=>'Order','uses'=>'Controller@postCheckout']);

//Redirect to view ResetPassword for Employees
Route::get('ResetPassword',['as'=>'ResetPassword', 'uses' =>'AuthController@resetPass']);
//Redirect to view ResetPassword for Buyer
Route::get('BuyerPassword',['as'=>'Buyer_Pass', 'uses'=> 'AuthController@Chpass']);
//Handle Change Password for All
Route::post('changePassword',['as'=>'changePassword','uses'=>'AuthController@ChangePassword']);

//Redirect view Buyer Change Information
Route::get('BuyerInformation',['as'=>'Buyer_Infor', 'uses'=> 'AuthController@inf']);
//Handle Change Infor for Seller
Route::post('changeSellerInfor',['as'=>'changeSellerInfor','uses'=>'AuthController@ChangeSellerInfor']);
//Handle Change Infor for Buyer
Route::post('changeBuyerInfor',['as'=>'changeBuyerInfor','uses'=>'AuthController@ChangeBuyerInfor']);

//Trả về toàn bộ sản phẩm trong database lên view
Route::get('Products', ['as' => 'listprosale', 'uses'=> 'LoadDataController@loadListProduct_Sale']);

//Thông báo
Route::get('Message',['as'=>'message','uses'=>'Controller@Message']);

Route::get('ProductFilter/{dm}/{sx}', ['as' => 'productfilter', 'uses'=> 'ControllerSanPham@productfilter']);

//Danh sách tài khoản người bán
Route::get('Account_Seller',['as'=>'Account_Seller', 'uses' => 'LoadDataController@accountSeller']);
//Danh sách tài khoản người mua
Route::get('Account_Buyer',['as'=>'Account_Buyer', 'uses' => 'LoadDataController@accountBuyer']);
//Danh sách tài khoản nhân viên
Route::get('Account_Employees',['as'=>'Account_Employees', 'uses' => 'LoadDataController@accountEmployees']);
//Return view Đơn Hàng
Route::get('Orders',['as' =>'Orders','uses' => 'LoadDataController@orders']);
//Return view Seller Change Passowrd
Route::get('SellerPassword', ['as'=>'Seller_Pass','uses' =>'AuthController@Chpass']);
//Return view Seller Change Information
Route::get('SellerInformation', ['as'=>'Seller_Infor','uses'=>'AuthController@inf']);
//Edit Information Buyer for Employees
Route::get('EditBuyer/{id}', 'AuthController@editbuyer');
//Update Information Buyer for Employees
Route::post('EditBuyer','AuthController@updatebuyer')->name('EditBuyer');
//Edit Information Seller for Employees
Route::get('EditSeller/{id}', 'AuthController@editseller');
//Update Information Seller for Employees
Route::post('EditSeller','AuthController@updateseller')->name('EditSeller');
//Orders Details
Route::get("Ordersdetail/{id}",'AuthController@ordersdetail')->name('Ordersdetail');
//Edit ChangeStatus view
Route::get('ChangeStatus/{id}','AuthController@editstatus');
//Update ChangeStatus view
Route::post('ChangeStatus','AuthController@updatestatus')->name('ChangeStatus');
//Ẩn/Hủy đơn hàng nhanh
Route::get('QuickHideOrders/{id}','LoadDataController@deleteOrders');
//Trả về view lịch sử mua hàng
Route::get('HistoryOrders',['as' => 'HistoryOrders' , 'uses' => 'LoadDataController@historyOrders']);
//Trả về view lịch sử bán hàng
Route::get('HistoryBuyProducts',['as' => 'historybuyproducts','uses'=>'Controller@HistoryBuyProducts']);
//Chuyển trạng thái sản phẩm nhanh
Route::get('unapprovedProducts/{id}','AuthController@unapprovedProducts');
//Thay đổi nhanh trạng thái tài khoản người bán
Route::get('changeStatusforSeller/{id}','AuthController@changeStatusforSeller');
//Ajax Quận và Phường
Route::get('ward/{idquan}','AuthController@ward');
//Tạo tài khoản cho nhân viên
Route::get('CreateAccount', ['as' => 'CreateAccount' , 'uses' => 'AuthController@getCreateAccount']);
Route::post('CreateAccountEmployees', ['as'=> 'CreateAccountEmployees' , 'uses' => 'AuthController@postCreateAccount']); 
//Trả về trang Revenue của nhân viên
Route::get('Salerevenueemployee',['as'=>'Salerevenueemployee','uses'=>'LoadDataController@Salerevenueemployee']);
