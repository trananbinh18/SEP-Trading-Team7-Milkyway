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
            {{-- Confirm popup --}}
              <div class="quickview-wrapper open" style="display: none">
               <div onclick="hideQuickView()" class="overlay-bg"></div>
               <div class="quick-modal show">
                  <span class="qvloading"></span><span class="closeqv"><i class="fa fa-times"></i></span>
                  <div id="quickview-content">
                     <div class="woocommerce product product-details-content">
                      <h1>Thông báo xác Nhận</h1>
                      <p>Bạn có đồng ý thanh toán tất cả sản phẩm trong giỏ hàng ?</p>
                      
              <div class="form-group">
                    <div class="input-group">
                        <button class="binhml" id="btnaccept" type="submit">Đồng ý</button>
                    </div>
              </div>
              

                <!-- End product-info -->
             </div>
             <!-- End product -->
          </div>
          <!-- End quick view -->
       </div>
       <!-- End quick modal -->
    </div>
      {{-- End Confirm popup --}}
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
                                        <input id="optmacdinh" checked="true" class="tablink" type="radio" name="inlineRadioOptions" value="option1" onclick="openPage('defaultaddress', this)" id="defaultOpen">ĐỊA CHỈ MẶC ĐỊNH
                                    </label>
                                    <label class="radio-inline checkoutchose">
                                        <input type="radio" id="opttuychon" name="inlineRadioOptions" value="option2" onclick="openPage('newaddress', this)" >ĐỊA CHỈ NHẬN HÀNG
                                    </label>
                                </div>
                            </div>
                            <div id="defaultaddress" class="tabcontent">
                                <div class="col-md-10 headerDFadd">
                                <h2>Hàng sẽ được giao đến địa chỉ mặc định</h2>
                                <form id="formMacDinh" action="{{route('Order')}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="phone" value="{{session()->get('phone')}}" >
                               <!--  <input type="hidden" name="address" value="{{session()->get('address')}}" > -->
                                <input type="hidden" name="city" value="{{session()->get('city')}}" >
                                <input type="hidden" name="district" value="{{session()->get('district')}}" >
                                <input type="hidden" name="ward" value="{{session()->get('ward')}}" >
                                <input type="hidden" name="inputaddress" value="{{session()->get('address')}}" >
                                </form>
                                </div>                           
                            </div>
                            <div id="newaddress" class="tabcontent space-50" style="display: none;">
                                <form id="formDiaChi" action="{{route('Order')}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group newaddressbox">
                                    <label for="inputaddress" class="col-md-4 control-lab">Số điện thoại</label>
                                    <div class="col-md-8">
                                        @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                        <input type="text" class="form-control" name="phone"  placeholder="Nhập số điện thoại" required>
                                    </div>
                                </div>
                                <div class="form-group newaddressbox">
                                    <label for="inputaddress" class="col-md-4 control-lab">Tỉnh/Thành phố</label>
                                    <div class="col-md-8">
                                        @if ($errors->has('city'))
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                        @endif
                                        <input type="text" class="form-control" name="city"  placeholder="Nhập Tỉnh/Thành phố" required>
                                    </div>
                                </div>
                                <div class="form-group newaddressbox">
                                    <label for="inputaddress" class="col-md-4 control-lab" >Quận</label>
                                    <div class="col-md-8">
                                        <select class="form-control" id="cbxquan" name="district" style="margin: 10px 0px 10px 0px">
                                            @foreach($district as $row)
                                                <option value="{{ $row->MAQUAN }}">{{ $row->TENQUAN }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group newaddressbox">
                                    <label for="inputaddress" class="col-md-4 control-lab">Phường</label>
                                    <div class="col-md-8">
                                       <select class="form-control" id="cbxphuong" name="ward" style="margin: 10px 0px 10px 0px">
                                            <option value="" disabled selected>--Chọn Phường--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group newaddressbox">
                                    <label for="inputaddress" class="col-md-4 control-lab">Địa chỉ</label>
                                    <div class="col-md-8">
                                        @if ($errors->has('inputaddress'))
                                        <span class="text-danger">{{ $errors->first('inputaddress') }}</span>
                                        @endif
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
                                @if(Cart::count()!=0)
                                <button id="btnthanhtoan" type="submit" class="link-v1 box lh-50 rt full" title="PLACE ORDER">THANH TOÁN</button>
                                @endif
                                @if(Cart::count()==0)
                                <a href="{{route('Checkout')}}"><button id="btnthanhtoan" type="submit" class="link-v1 box lh-50 rt full" title="PLACE ORDER">THANH TOÁN</button></a>
                                @endif
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
        // elmnt.style.backgroundColor = color;

    }
// Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();

    $(document).ready(function(){
        $("#btnthanhtoan").click(function() {
            $(".quickview-wrapper").show();
            $("#btnaccept").click(function(){
                if($('#optmacdinh').is(':checked')){
                    $("#formMacDinh").submit();
                }else{
                   $("#formDiaChi").submit();
                }
            });
        });


    $("#cbxquan").val({{session()->get('district')}});
    $.getJSON('ward/'+{{session()->get('district')}}, function (data){
      $("#cbxphuong").empty();
      for(i=0;i<data.length;i++){
        $("#cbxphuong").append("<option value='"+data[i]['MAPHUONG']+"'>"+data[i]['TENPHUONG']+"</option>");
      }
    });

    $("#cbxquan").change(function(){
      $.getJSON('ward/'+$(this).val(), function (data){
        $("#cbxphuong").empty();
        for(i=0;i<data.length;i++){
          $("#cbxphuong").append("<option value='"+data[i]['MAPHUONG']+"'>"+data[i]['TENPHUONG']+"</option>");
        }
      });
    });


  });
</script>
@stop
