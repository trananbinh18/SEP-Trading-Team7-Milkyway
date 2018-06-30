@extends ('layout.master')
@section(' title ')
Đăng Kí
@stop 
@section('content') 
<link rel="stylesheet" href="resources/assets/css/style_signup.css">
<div class="container">
    <div class="banner-header banner-lbook3 space-30">
        <img src="resources/assets/images/banner-product-checkout.jpg" alt="Banner-header">
        <div class="text">
            <h3>Đăng kí</h3>
            <p><a href="#" title="Home">TRANG CHỦ</a><i class="fa fa-caret-right"></i>Đăng kí</p>
        </div>
    </div>
</div>
<!-- End banner -->
<div class="BchangeSB">
    <button class="tablink" onclick="openPage('Seller', this, '#80b435')">BÁN</button>
    <button class="tablink" onclick="openPage('Buyer', this, '#80b435')" id="defaultOpen">MUA</button>
</div>
<div id="Buyer" class="tabcontent">
    {{-- Confirm popup --}}
      <div class="quickview-wrapper buyerpopup open" style="display: none">
       <div onclick="hideQuickViwrapperew()" class="overlay-bg"></div>
       <div class="quick-modal show">
          <span class="qvloading"></span><span class="closeqv"><i class="fa fa-times"></i></span>
          <div id="quickview-content">
             <div class="woocommerce product product-details-content">
              <h1 style="position: absolute; left: 19px;top: 13px;font-weight:bold;font:700 24px/60px 'Roboto Slab';">Xác Nhận</h1>
              <p>Bạn có đồng ý đăng ký tài khoản mua hàng bằng toàn bộ thông tin trên.</p>
              
              <div class="form-group">
                    <div class="input-group">
                        <button class="binhml" id="btnacceptbuyer" type="submit">Đồng ý</button>
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
   <div class="container container-ver2">
        <div class="page-seller">
            <div class="container container-ver2">
                <div class="content-text space-50">
                    <div class="row">
                        <div class="center">
                            <h2>ĐĂNG KÝ</h2>
                            <p>Cùng tạo tài khoản mua rau củ quả thượng hạng!</p>
                        </div>

                        <form id="formbuyer" class="form-horizontal"action="{{route('SignUpBuyer')}}" method="POST">
                             @if(session('thanhcong'))
                                <div class="alert-success">
                                    {{session('thanhcong')}}
                                </div>
                            @endif
                            <div class="col-md-6 space-50" id="bodyinput">
                                <div class="form-group signupseller">
                                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                                   <label for="inputname" class="col-md-4 control-lab">Họ và tên</label>
                                   <div class="col-md-8">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <input type="text" class="form-control" name="name" id="inputname" placeholder="Nhập Họ và tên" required>
                                </div>
                                </div>
                                <div class="form-group signupseller">
                                    <label for="inpuphone" class="col-md-4 control-lab">Số điện thoại</label>
                                    <div class="col-md-8">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                        <input type="text" class="form-control" name="phone" id="inputphone" placeholder="Nhập số điện thoại" required>
                                    </div>
                                </div>
                                <div class="form-group signupseller">
                                    <label for="inputEmail3" class="col-md-4 control-lab">Email</label>
                                    <div class="col-md-8">
                                        @if(session('thongbao'))
                                        <div class="alert-success">
                                          {{session('thongbao')}}
                                        </div>
                                        @endif
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        <input type="text" class="form-control" name="email" id="inputemail" placeholder="Nhập Email" required>
                                    </div> 
                                </div>
                                <div class="form-group signupseller">
                                    <label for="inputpass" class="col-md-4 control-lab">Mật khẩu</label>
                                    <div class="col-md-8">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        <input type="password" class="form-control" name="password" id="inputpass" placeholder="Nhập mậtkhẩu" required>
                                    </div>
                                </div>
                            </div> 
                            <!--end cột trái đăng kí ng bán-->
                            <div class="col-md-6 space-50">
                                <div class="form-group signupseller">
                                    <label for="inputaddress" class="col-md-4 control-lab">Tỉnh/Thành phố</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Hồ Chí Minh" name="city" disabled>
                                    </div>
                                </div>
                                <div class="form-group signupseller">
                                    <label for="inputaddress" class="col-md-4 control-lab">Quận/Huyện</label>
                                    <div class="col-md-8">
                                          @if ($errors->has('district'))
                                            <span class="text-danger">{{ $errors->first('district') }}</span>
                                          @endif
                                         <select class="form-control" id="cbxquanbuyer" name="district">
                                                <option disabled selected>--Chọn Quận--</option>
                                            @foreach($district as $row)
                                                <option value="{{ $row->MAQUAN }}">{{ $row->TENQUAN }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group signupseller">
                                    <label for="inputaddress" class="col-md-4 control-lab">Phường/Xã</label>
                                    <div class="col-md-8">
                                       @if ($errors->has('ward'))
                                            <span class="text-danger">{{ $errors->first('ward') }}</span>
                                          @endif
                                      <select class="form-control" id="cbxphuongbuyer" name="ward">
                                        <option value="" disabled selected>--Chọn Phường--</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group signupseller">
                                    <label for="inputaddress" class="col-md-4 control-lab">Địa chỉ</label>
                                    <div class="col-md-8">
                                         @if ($errors->has('number_house'))
                                            <span class="text-danger">{{ $errors->first('number_house') }}</span>
                                        @endif
                                        <input type="text" class="form-control" name="number_house" id="inputaddress" placeholder="Nhập địa chỉ" required>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <div class="col-md-12 center">
                                <a href="#"><button id="submitbuyer" type="submit" class="link-v1 rt">Đăng Ký</button></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End register buyer -->  
<div id="Seller" class="tabcontent">
    {{-- Confirm popup --}}
      <div class="quickview-wrapper sellerpopup open" style="display: none">
       <div onclick="hideQuickView()" class="overlay-bg"></div>
       <div class="quick-modal show">
          <span class="qvloading"></span><span class="closeqv"><i class="fa fa-times"></i></span>
          <div id="quickview-content">
             <div class="woocommerce product product-details-content">
              <h1 style="position: absolute; left: 19px;top: 13px;font-weight:bold;font:700 24px/60px 'Roboto Slab';">Xác Nhận</h1>
              <p>Bạn có đồng ý đăng ký tài khoản bán hàng bằng toàn bộ thông tin tài trên.</p>
              
              <div class="form-group">
                    <div class="input-group">
                        <button class="binhml" id="btnacceptseller" type="submit">Đồng ý</button>
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
   <div class="container container-ver2">
    <div class="page-seller">
        <div class="container container-ver2">
            <div class="content-text space-50">
                <div class="row">
                    <div class="center sloganseller">
                        <h2>ĐĂNG KÍ BÁN HÀNG CÙNG WHOLE FOODS</h2>
                        <p>Chúng tôi sẻ đưa sản phẩm của bạn đi toàn thế giới</p>
                    </div>
                    <form id="formseller" class="form-horizontal" action="{{route('SignUpSeller')}}" method="POST" enctype="multipart/form-data" role="form">
                         @if(session('thanhcong'))
                                <div class="alert-success">
                                    {{session('thanhcong')}}
                                </div>
                            @endif
                        <div class="col-md-6 space-50" id="bodyinput">
                            <div class="form-group signupseller">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                               <label for="inputname" class="col-md-4 control-lab">Họ và tên</label>
                               <div class="col-md-8">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <input type="text" class="form-control" name="name" id="inputname" placeholder="Nhập Họ và tên" required>
                                </div>
                            </div>
                            <div class="form-group signupseller">
                                <label for="inpuphone" class="col-md-4 control-lab">Số điện thoại</label>
                                <div class="col-md-8">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                    <input type="text" class="form-control" name="phone" id="inputphone" placeholder="Nhập số điện thoại" required>
                                </div>
                            </div>
                            <div class="form-group signupseller">
                                <label for="inputEmail3" class="col-md-4 control-lab">Email</label>
                                <div class="col-md-8">
                                     @if(session('thongbao'))
                                        <div class="alert-success">
                                          {{session('thongbao')}}
                                        </div>
                                      @endif
                                      @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <input type="text" class="form-control" name="email" id="inputemail" placeholder="Nhập Email" required>
                                </div>
                            </div>
                            <div class="form-group signupseller">
                                <label for="inputpass" class="col-md-4 control-lab">Mật khẩu</label>
                                <div class="col-md-8">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                    <input type="password" class="form-control" name="password" id="inputpass" placeholder="Nhập mậtkhẩu" required>
                                </div>
                            </div>
                            <div class="form-group signupseller">
                                <label for="inpuimgGPKD" class="col-md-4 control-lab">Giấy Phép Kinh Doanh</label>
                                <div class="row">
                                    <div class="img col-md-3 img12">
                                        <div class="img-picker">
                                            @if ($errors->has('image'))
                                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                             @endif
                                            <div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" class="imgin" name="image" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div> <!--end cột trái đăng kí ng bán-->
                    <div class="col-md-6 space-50"> 
                        <div class="form-group signupseller">
                            <label for="inputaddress" class="col-md-4 control-lab">Tỉnh/Thành phố</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Hồ Chí Minh" name="city" disabled>
                            </div>
                        </div>
                         <div class="form-group signupseller">
                            <label for="inputaddress" class="col-md-4 control-lab">Quận/Huyện</label>
                            <div class="col-md-8">
                               @if ($errors->has('district'))
                                            <span class="text-danger">{{ $errors->first('district') }}</span>
                                @endif
                                <select class="form-control" id="cbxquanseller" name="district">
                                  <option disabled selected>--Chọn Quận--</option>
                                    @foreach($district as $row)
                                        <option value="{{ $row->MAQUAN }}">{{ $row->TENQUAN }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                         <div class="form-group signupseller">
                            <label for="inputaddress" class="col-md-4 control-lab">Phường/Xã</label>
                            <div class="col-md-8">
                               @if ($errors->has('ward'))
                                            <span class="text-danger">{{ $errors->first('ward') }}</span>
                                          @endif
                              <select class="form-control" id="cbxphuongseller" name="ward">
                                <option value="" disabled selected>--Chọn Phường--</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group signupseller">
                            <label for="inputaddress" class="col-md-4 control-lab">Địa chỉ</label>
                            <div class="col-md-8">
                                @if ($errors->has('number_house'))
                                    <span class="text-danger">{{ $errors->first('number_house') }}</span>
                                @endif
                                <input type="text" class="form-control" name="number_house" id="inputaddress" placeholder="Nhập địa chỉ" required>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="col-md-12 center">

                        <a href="#"><button id="submitseller" type="submit" class="link-v1 rt">Đăng Ký</button></a>
                    </div>
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script type="text/javascript" src="{!!url("resources/assets/js/message.js")!!}"></script>

<script>
    function openPage(pageName,elmnt,color) {
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
    $(document).ready(function(){
        $("#submitbuyer").click(function(){
            $(".buyerpopup").show();
            $("#btnacceptbuyer").click(function(){
                $("#formbuyer").submit();
            });
        });

        $("#submitseller").click(function(){
            $(".sellerpopup").show();
            $("#btnacceptseller").click(function(){
                $("#formseller").submit();
            });
        });

        $("#cbxquanseller").change(function(){
      		$.getJSON('ward/'+$(this).val(), function (data){
        		$("#cbxphuongseller").empty();
        		for(i=0;i<data.length;i++){
          			$("#cbxphuongseller").append("<option value='"+data[i]['MAPHUONG']+"'>"+data[i]['TENPHUONG']+"</option>");
        		}
      		});
    	});

    	$("#cbxquanbuyer").change(function(){
      		$.getJSON('ward/'+$(this).val(), function (data){
        		$("#cbxphuongbuyer").empty();
        		for(i=0;i<data.length;i++){
          			$("#cbxphuongbuyer").append("<option value='"+data[i]['MAPHUONG']+"'>"+data[i]['TENPHUONG']+"</option>");
        		}
      		});
    	});
    });

</script>
@stop
