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
                        <div class="col-md-6 ">
                            <div class="form-group ">
                                <div class="optionAddress">
                                    <label class="radio-inline checkoutchoosse">
                                        <input  class="tablink" type="radio" name="inlineRadioOptions" value="option1" onclick="openPage('defaultaddress', this)" id="defaultOpen">ĐỊA CHỈ MẶC ĐỊNH
                                    </label>
                                    <label class="radio-inline checkoutchose">
                                        <input type="radio" name="inlineRadioOptions" value="option2" onclick="openPage('newaddress', this)" >ĐỊA CHỈ NHẬN HÀNG
                                    </label>
                                </div>
                            </div>
                            <div id="defaultaddress" class="tabcontent">
                                <div class="col-md-10 headerDFadd">
                                    <h2>Hàng sẻ được giao đến địa chỉ mặc định</h2>
                                </div>                           
                            </div>
                            <div id="newaddress" class="tabcontent space-50">
                                <form id="formDiaChi" action="{{route('Order')}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group newaddressbox">
                                    <label for="inputaddress" class="col-md-4 control-lab">Số điện thoại</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="phone"  placeholder="Nhập số điện thoại" required>
                                    </div>
                                </div>
                                <div class="form-group newaddressbox">
                                    <label for="inputaddress" class="col-md-4 control-lab">Tỉnh/Thành phố</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="city"  placeholder="Nhập Tỉnh/Thành phố" required>
                                    </div>
                                </div>
                                <div class="form-group newaddressbox">
                                    <label for="inputaddress" class="col-md-4 control-lab">Quận</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="district"  placeholder="Nhập quận" required>
                                    </div>
                                </div>
                                <div class="form-group newaddressbox">
                                    <label for="inputaddress" class="col-md-4 control-lab">Phường</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="ward"  placeholder="Nhập phường" required>
                                    </div>
                                </div>
                                <div class="form-group newaddressbox">
                                    <label for="inputaddress" class="col-md-4 control-lab">Địa chỉ</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="inputaddress"  placeholder="Nhập địa chỉ" required>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
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
                                            <span class="right">{{Cart::subtotal()}} VND</span>
                                        </li>
                                        <li>
                                            <span class="left">Phí giao hàng</span>
                                            <span class="right">Miễn phí</span>
                                        </li>
                                        <li>
                                            <span class="left">Tổng cộng</span>
                                            <span class="right brand">{{Cart::subtotal()}} VND</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End info-order -->
                                <button id="btnthanhtoan" type="submit" class="link-v1 box lh-50 rt full" title="PLACE ORDER">THANH TOÁN</button>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                </div>
                <!-- End container -->
            </div>
            <!-- End cat-box-container -->
        </div>
   {{--  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/engo-plugins.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.zoom.js"></script>
    <script type="text/javascript" src="assets/js/store.js"></script> --}}
    <script>
    function openPage(pageName,elmnt) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;

    }
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

@stop
