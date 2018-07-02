 @extends('layout.master')
        @section (' title ')
        WholeFoods.com
        @stop
        @section('content')
       <div class="main-content">
            <div class="container">
                <div class="banner-header banner-lbook3">
                <img src="resources/assets/images/banner-product-checkout.jpg" alt="Banner-header">
                <div class="text">
                    <h3>Thành công</h3>
                    {{-- <p><a href="#" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i>Giỏ hàng</p> --}}
                </div>
            </div>
            </div>
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
                        <div class="item active center">
                            <p class="icon">02</p>
                            <h3>Kiểm tra</h3>
                        </div>
                    </div>
                    <!-- End col-md-4 -->
                    <div class="col-md-4 space-30">
                        <div class="item center active">
                            <p class="icon">03</p>
                            <h3>Đặt hàng thành công</h3>
                        </div>
                    </div>
                    <!-- End col-md-4 -->
                </div>
            </div>
            <!-- End container -->
            <div class="container container-ver2">
                <div class="box float-left order-complete center space-50">
                    <div class="icon space-20">
                        <img src="resources/assets/images/icon-order-complete.png" alt="icon">
                    </div>
                    <div class="centerrr">
                        <p>Cảm ơn bạn đã mua hàng của WholeFoods, Đơn hàng của bạn đã được đặt thành công!</p>
                        <p>Mã hóa đơn của bạn là: <strong><?php
                            echo $SOHD;
                        ?></strong></p>
                        <div class="box">
                            <a class="link-v1 lh-50 rt space-20" href="{{route('homepage')}}" title="CONTINUS SHOPPING">TIẾP TỤC MUA SẮM</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End container -->
        </div>
        
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/engo-plugins.js"></script>
    
    <script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.zoom.js"></script>
    <script type="text/javascript" src="assets/js/store.js"></script>
@stop

