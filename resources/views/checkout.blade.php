@extends('layout.master')
@section (' title ')
Kiểm tra
@stop
@section('content')
        <div class="main-content">
            <div class="container">
                <div class="banner-header banner-lbook3">
                    <img src="resources/assets/images/banner-product-checkout.jpg" alt="Banner-header">
                    <div class="text">
                        <h3>Kiểm tra</h3>
                        <p><a href="#" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i>Kiểm tra</p>
                    </div>
                </div>
            </div>
            <div class="container container-ver2 space-padding-tb-30">
                    <div class="row head-cart">
                        <div class="col-md-4 space-30">
                            <div class="item active center">
                                <p class="icon">01</p>
                                <h3>GIỎ HÀNG</h3>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                        <div class="col-md-4 space-30">
                            <div class="item active center">
                                <p class="icon">02</p>
                                <h3>KIỂM TRA</h3>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                        <div class="col-md-4 space-30">
                            <div class="item center">
                                <p class="icon">03</p>
                                <h3>THANH TOÁN THÀNH CÔNG</h3>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                    </div>
                </div>
                <!-- End container -->
            <div class="cart-box-container check-out ">
                <div class="container container-ver2">
                    <div class="row">
                        <!-- End col-md-8 -->
                        <div class="col-md-6 space-30">
                            <div class="box">
                                <h3 class="title-brand">Giỏ hàng của bạn</h3>
                                <div class="info-order">
                                    <div class="product-name">
                                        <ul>
                                            <li class="head">
                                                <span class="name">Tên sản phẩm</span>
                                                <span class="qty"><b>Số lượng</b></span>
                                                <span class="dgia"><b>Đơn vị</b></span>    
                                                <span class="total"><b>Thành tiền</b></span>
                                            </li>
                                            @foreach($content as $item)                                           
                                            <li>                                                 
                                                <span class="name">{{$item->name}}</span>
                                                <span class="qty">{{$item->qty}}</span>
                                                <span class="dgiaR2">{{$item->options['unit']}}</span>
                                                <span class="total">{{$item->price}}</span>                                               
                                            </li>
                                            @endforeach                                           
                                        </ul>
                                    </div>
                                    <!-- End product-name -->
                                    <ul class="product-order">
                                        <li>
                                            <span class="left">Tạm Tính</span>
                                            <span class="right">{{Cart::total()}}VND</span>
                                        </li>
                                        <li>
                                            <span class="left">Phí giao hàng</span>
                                            <span class="right">Miễn phí</span>
                                        </li>
                                        <li>
                                            <span class="left">Tổng cộng</span>
                                            <span class="right brand">{{Cart::total()}}VND</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End info-order -->
                                <a class="link-v1 box lh-50 rt full" href="#" title="PLACE ORDER">THANH TOÁN</a>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                </div>
                <!-- End container -->
            </div>
            <!-- End cat-box-container -->
        </div>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/engo-plugins.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.zoom.js"></script>
    <script type="text/javascript" src="assets/js/store.js"></script>

@stop
