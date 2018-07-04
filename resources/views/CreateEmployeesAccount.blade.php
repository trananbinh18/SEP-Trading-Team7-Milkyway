    @extends('layout.master')
    @section (' title ')
    Tạo tài khoản
    @stop
    @section('content')
    {{-- Confirm popup --}}
              <div class="quickview-wrapper open" style="display: none">
               <div onclick="hideQuickView()" class="overlay-bg"></div>
               <div class="quick-modal show">
                  <span class="qvloading"></span><span class="closeqv"><i class="fa fa-times"></i></span>
                  <div id="quickview-content">
                     <div class="woocommerce product product-details-content">
                      <h1>Thông báo xác Nhận</h1>
                      <p>Bạn có đồng ý sửa thông tin của bạn ?</p>
                      
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
    <div class="row row-addproduct">
      <div class="col-md-3 box-shadow control-infotproduct">
        <div>
          <aside class="widget widget_product_categories" style="padding-left: 10px;">
            <div class="categories-home3">
             <h3>THÔNG TIN TÀI KHOẢN</h3>
             <i class="fa fa-chevron-circle-down icon-click"></i>
             <ul class="menu-vertical">
               <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('Account_Employees')}}" title="Danh sách sản phẩm">Tài Khoản Nhân viên</a></li>
               <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('CreateAccount')}}" title="Doanh số">Tạo tài khoản</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
    <div class="col-md-8 control-infotproduct box-shadow">
      @if(session('thanhcong'))
          <div class="alert-success">
            {{session('thanhcong')}}
          </div>
      @endif
      @if(session('thongbao'))
          <div class="alert-success">
            {{session('thongbao')}}
          </div>
      @endif
      <form class="form-horizontal" id="formedit" action="{{route('CreateAccountEmployees')}}" role="form" method="POST">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <div class="center">
        <h2>TẠO TÀI KHOẢN NHÂN VIÊN</h2>
        <br>
      </div>
      <div class="form-group signupseller">
        <label for="inputEmail3" class="col-sm-3 control-lab">Email</label>
        <div class="col-sm-9">
          @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
          <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="email" >
        </div>
      </div>
      <div class="form-group signupseller">
        <label for="inputEmail3" class="col-sm-3 control-lab">Mật Khẩu</label>
        <div class="col-sm-9">
          @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
          @endif
          <input type="password" class="form-control" id="inputEmail3" placeholder="Mật khẩu" name="password" >
        </div>
      </div>
      <div class="form-group signupseller">
        <label for="inputEmail3" class="col-sm-3 control-lab">Họ và tên</label>
        <div class="col-sm-9">
          @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif
          <input type="text" class="form-control" id="inputEmail3" placeholder="Họ và tên" name="name" >
        </div>
      </div>
      <div class="form-group signupseller">
        <label for="inputpass" class="col-sm-3 control-lab">Số điện thoại</label>
        <div class="col-sm-9">
          @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
          @endif
          <input type="text" class="form-control" id="inputEmail3" placeholder="Số điện thoại" name="phone">
        </div>
      </div>
      <div class="form-group signupseller">
        <label for="inputpass" class="col-sm-3 control-lab">Địa chỉ</label>
        <div class="col-sm-9">
          @if ($errors->has('number_house'))
            <span class="text-danger">{{ $errors->first('number_house') }}</span>
          @endif
          <input type="text" class="form-control" id="inputEmail3" placeholder="Địa chỉ" name="number_house">
        </div>
      </div>
      <div class="form-group signupseller">
        <label for="inputpass" class="col-sm-3 control-lab">Thành phố</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Hồ Chí Minh" name="city" disabled>
        </div>
      </div>
       <div class="form-group signupseller">
        <label for="inputpass" class="col-sm-3 control-lab">Quận</label>
        <div class="col-sm-9">
          <select class="form-control" name="district" id="cbxquan">
            @foreach($district as $row)
              <option value="{{ $row->MAQUAN }}">{{ $row->TENQUAN }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group signupseller">
        <label for="inputpass" class="col-sm-3 control-lab">Phường</label>
        <div class="col-sm-9">
          <select class="form-control" id="cbxphuong" name="ward">
            <option value="" disabled selected>--Tải Phường--</option>
          </select>
        </div>
      </div>
    </form>
      <div class="col-md-12 center">
        <br>
        <button id="btnsubmit" type="submit" class="link-v1 rt">Tạo Tài Khoản</button>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function(){
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
    $("#btnsubmit").click(function() {
            $(".quickview-wrapper").show();
            $("#btnaccept").click(function(){
                $("#formedit").submit();
            });
      });

  });
  </script>
  <script type="text/javascript" src="{!!url("resources/assets/js/message.js")!!}"></script>
  @endsection