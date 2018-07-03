    @extends('layout.master')
    @section (' title ')
    Sửa thông tin
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
              <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('listpro')}}" title="Sản phẩm chơ duyệt">Sản phẩm chờ duyệt</a><span class="badge"><?php echo $countUnapprovedproduct; ?></span></li>
                <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('ListApproved')}}" title="Sản phẩm đã duyệt">Sản phẩm đã duyệt</a><span class="badge"><?php echo $countApproveproduct; ?></span></li>
                <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('ListHide')}}" title="Sản phẩm đã ẩn">Sản phẩm đã ẩn</a><span class="badge"><?php echo $countHideproduct; ?></li>
                <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('ordersplaced')}}" title="Đơn hàng được đặt">Đơn hàng được đặt</a></li>
                <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('Salerevenue')}}" title="Doanh số">Doanh số</a></li>
                <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('historybuyproducts')}}" title="Lịch sử bán hàng">Lịch sử bán hàng</a></li>
                <li><img src="resources/assets/images/icon-choose-2.png" alt=""><a href="{{route('Seller_Infor')}}" title="Sửa thông tin">Sửa thông tin</a></li>
                <li><img src="resources/assets/images/icon-choose-4.png" alt=""><a href="{{route('Seller_Pass')}}"" title="Đổi mật khẩu">Đổi mật khẩu</a></li>     
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

      <form class="form-horizontal" id="formedit" action="{{route('changeSellerInfor')}}" role="form" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="center">
          <h2>THÔNG TIN TÀI KHOẢN</h2>
        </div>
        <div class="form-group signupseller">
          <label for="inputEmail3" class="col-sm-3 control-lab">Họ và tên</label>
          <div class="col-sm-9">
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
            <input type="text" class="form-control" id="inputEmail3" placeholder="Họ và tên" name="name" value="{{session()->get('name')}}" >
          </div>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Số điện thoại</label>
          <div class="col-sm-9">
            @if ($errors->has('phone'))
              <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
            <input type="text" class="form-control" id="inputEmail3" placeholder="Số điện thoại" name="phone" value="{{session()->get('phone')}}"  >
          </div>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Địa chỉ</label>
          <div class="col-sm-9">
            @if ($errors->has('number_house'))
              <span class="text-danger">{{ $errors->first('number_house') }}</span>
            @endif
            <input type="text" class="form-control" id="inputEmail3" placeholder="Địa chỉ" name="number_house" value="{{session()->get('address')}}" >
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
            <select class="form-control" id="cbxquan" name="district">
              @foreach($distr as $row)
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
          <a href="#"><button type="submit" id="btnsubmit" class="link-v1 rt">Cập nhật</button></a>
        </div>
      
    </div>
  </div>
  <script type="text/javascript" src="{!!url("resources/assets/js/message.js")!!}"></script>

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
  @endsection