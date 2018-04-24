@extends('layout.master')
@section('content')
     <div class="main-content">
            <div class="container">
                <div class="banner-header banner-lbook3">
                    <img src="resources/assets/images/banner/1.png" alt="Banner-header">
                </div>
            </div>
            <div class="cart-box-container">
                <div class="container container-ver2 space-padding-tb-30">
                    <div class="row head-cart">
                        <div class="col-md-4 space-30">
                            <div class="item active center">
                                <p class="icon">01</p>
                                <h3>Giỏ hàng</h3>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                        <div class="col-md-4 space-30">
                            <div class="item center">
                                <p class="icon">02</p>
                                <h3>Kiểm tra</h3>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                        <div class="col-md-4 space-30">
                            <div class="item center">
                                <p class="icon">03</p>
                                <h3>Nhiệm vụ đã hoàn thành</h3>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                    </div>
                </div>
                <!-- End container -->
                <div class="container container-ver2">
                    <div class="box cart-container">
                        <table class="table cart-table space-30">
                            <thead>
                                <tr>
                                    <th class="product-photo">Danh sách sản phẩm</th>
                                    <th class="produc-name"></th>
                                    <th class="produc-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="total-price">Tổng</th>
                                    <th class="product-remove"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="item_cart">
                                    <td class="product-photo"><img src="resources/assets/images/products/featured/1.jpg" alt="Futurelife"></td>
                                    <td class="produc-name"><a href="#" title="">Name product 01</a></td>
                                    <td class="produc-price"><input value="120000" size="4" type="text"></td>
                                    <td class="product-quantity">
                                        <form enctype="multipart/form-data">
                                        <div class="product-signle-options product_15 clearfix">
                                            <div class="selector-wrapper size">
                                                <div class="quantity">
                                                    <input data-step="1" value="1" title="Qty" class="qty" size="4" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </td>
                                    <td class="total-price"></td>
                                    <td class="product-remove"><a class="remove" href="#" title="close"><img src="resources/assets/images/icon-delete-cart.png" alt="close"></a></td>
                                </tr>
                                <tr class="item_cart">
                                    <td class="product-photo"><img src="resources/assets/images/products/featured/1.jpg" alt="Futurelife"></td>
                                    <td class="produc-name"><a href="#" title="">Name product 01</a></td>
                                    <td class="produc-price"><input value="250000" size="4" type="text"></td>
                                    <td class="product-quantity">
                                        <form enctype="multipart/form-data">
                                            <div class="product-signle-options product_15 clearfix">
                                                <div class="selector-wrapper size">
                                                    <div class="quantity">
                                                        <input data-step="1" value="2" title="Qty" class="qty" size="4" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="total-price"></td>
                                    <td class="product-remove"><a class="remove" href="#" title="close"><img src="resources/assets/images/icon-delete-cart.png" alt="close"></a></td>
                                </tr>
                                <tr class="item_cart">
                                    <td class="product-photo"><img src="resources/assets/images/products/featured/1.jpg" alt="Futurelife"></td>
                                    <td class="produc-name"><a href="#" title="">Name product 01</a></td>
                                    <td class="produc-price"><input value="150000" size="4" type="text"></td>
                                    <td class="product-quantity">
                                        <form enctype="multipart/form-data">
                                            <div class="product-signle-options product_15 clearfix">
                                                <div class="selector-wrapper size">
                                                    <div class="quantity">
                                                        <input data-step="1" value="2" title="Qty" class="qty" size="4" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="total-price"></td>
                                    <td class="product-remove"><a class="remove" href="#" title="close"><img src="resources/assets/images/icon-delete-cart.png" alt="close"></a></td>
                                </tr>
                                <tr class="item_cart">
                                    <td class="product-photo"><img src="resources/assets/images/products/featured/1.jpg" alt="Futurelife"></td>
                                    <td class="produc-name"><a href="#" title="">Name product 01</a></td>
                                    <td class="produc-price"><input value="170000" size="4" type="text"></td>
                                    <td class="product-quantity">
                                        <form enctype="multipart/form-data">
                                            <div class="product-signle-options product_15 clearfix">
                                                <div class="selector-wrapper size">
                                                    <div class="quantity">
                                                        <input data-step="1" value="2" title="Qty" class="qty" size="4" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="total-price"></td>
                                    <td class="product-remove"><a class="remove" href="#" title="close"><img src="resources/assets/images/icon-delete-cart.png" alt="close"></a></td>
                                </tr>
                                <tr class="item_cart">
                                    <td class="product-photo"><img src="resources/assets/images/products/featured/1.jpg" alt="Futurelife"></td>
                                    <td class="produc-name"><a href="#" title="">Name product 01</a></td>
                                    <td class="produc-price"><input value="220000" size="4" type="text"></td>
                                    <td class="product-quantity">
                                        <form enctype="multipart/form-data">
                                            <div class="product-signle-options product_15 clearfix">
                                                <div class="selector-wrapper size">
                                                    <div class="quantity">
                                                        <input data-step="1" value="2" title="Qty" class="qty" size="4" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="total-price"></td>
                                    <td class="product-remove"><a class="remove" href="#" title="close"><img src="resources/assets/images/icon-delete-cart.png" alt="close"></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row-total">
                            <div class="float-left">
                                <h3>Tổng các sản phẩm</h3>
                            </div>
                            <!--End align-left-->
                            <div class="float-right">
                                <p>$1,156.00</p>
                            </div>
                            <!--End align-right-->
                        </div>
                        <div class="box space-30">
                            <div class="float-left">
                                <a class="link-v1 lh-50 margin-right-20 space-20" href="#" title="CLEAR SHOPPING CART">XÓA GIỎ HÀNG</a>
                                <a class="link-v1 lh-50 space-20" href="#" title="UPDATE SHOPPING CART">UPDATE GIỎ HÀNG</a>
                            </div>
                            <!-- End float left -->
                            <div class="float-right">
                                <a class="link-v1 lh-50 bg-brand" href="#" title="CONTINUS SHOPPING">Tiếp tục mua sắm</a>
                            </div>
                            <!-- End float-right -->
                        </div>
                        <!-- End box -->
                        <div class="box cart-total space-30">
                            <div class="row">
                                <div class="col-md-4 space-30">
                                    <div class="item coupon-code">
                                        <h3 class="title">MÃ GIẢM GIÁ</h3>
                                        <p>Nhập mã phiếu giảm giá của bạn nếu bạn có</p>
                                        <form enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" class="form-control space-20" id="coundpon">
                                            </div>
                                        </form>
                                        <a class="link-v1 lh-50 rt" href="#" title="apply coupon">ÁP DỤNG THANH TOÁN</a>
                                    </div>
                                </div>
                                <div class="col-md-4 space-30">
                                    <div class="item">
                                        <h3 class="title">Nhận thông tin của bạn để vận chuyển</h3>
                                        <p>Nhập địa chỉ của bạn </p>
                                        <form enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class=" control-label" for="inputcountry">Thành phố</label>
                                                <input type="text" class="form-control space-20" id="inputcountry">
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label" for="state">Địa chỉ <span>*</span></label>
                                                <input type="text" class="form-control space-20" id="state">
                                            </div>                                            
                                        </form>
                                        <a class="link-v1 lh-50 rt" href="#" title="ESTIMADE">Xác nhận</a>
                                    </div>
                                </div>
                                <!-- End col-md-4 -->
                                <div class="col-md-4 space-30">
                                    <div class="item">
                                        <h3 class="title">TỔNG HÀNG</h3>
                                        <p class="box"><span class="float-left">Phí vận chuyển</span><span class="float-right">40000</span></p>
                                        <p class="box space-30"><span class="float-left"><b>Tổng chi phí</b></span><span class="float-right"><b class="color-brand">520000</b></span></p>
                                        <a class="link-v1 lh-50 rt" href="#" title="POCEEED TO CHECKOUT">THANH TOÁN</a>
                                    </div>
                                </div>
                                <!-- End col-md-4 -->
                            </div>
                        </div>
                        <!-- End box -->
                </div>
                <!-- End container -->
            </div>
            <!-- End cat-box-container -->
@endsection