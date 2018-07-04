    @extends('layout.master')
    @section (' title ')
    Sửa mật khẩu
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
             <h3>TRANG NHÂN VIÊN</h3>
             <i class="fa fa-chevron-circle-down icon-click"></i>
             <ul class="menu-vertical">
               <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('Account_Seller')}}" title="Danh sách sản phẩm">Danh Sách Người Bán</a></li>
               <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('Account_Buyer')}}" title="Danh sách sản phẩm">Danh Sách Người Mua</a></li>
               <li><img src="resources/assets/images/icon-choose-2.png" alt=""><a href="{{route('listprosale')}}" title="Sửa thông tin">Danh Sách Sản Phẩm</a></li>
               <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('Salerevenueemployee')}}" title="Doanh số">Doanh Thu</a></li>
               <li><img src="resources/assets/images/icon-choose-4.png" alt=""><a href="{{route('ResetPassword')}}" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
             </ul>
           </div>
         </aside>
       </div>
     </div>
     <div class="col-md-8 control-infotproduct box-shadow">
      <div class="alert-success">
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
      </div>
      <div class="page">
        <div class="container container-ver2">
          <div class="content-text space-50">

            <form class="form-horizontal" role="form" id="formedit" action="{{route('changePassword')}}" method="POST">
             <div class="col-md-8 space-80" id="bodyinput">
              <div class="center">
                <h2>ĐỔI MẬT KHẨU</h2>
              </div>
              <div class="form-group signupseller">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label for="inputpass" class="col-md-4 control-lab">Mật khẩu hiện tại</label>
                <div class="col-md-8">
                  @if ($errors->has('current_password'))
                    <span class="text-danger">{{ $errors->first('current_password') }}</span>
                  @endif
                  <input type="password" class="form-control" name="current_password" id="inputpass" placeholder="Nhập mật khẩu hiện tại" required>
                </div>
              </div>
              <div class="form-group signupseller">
                <label for="inputpass" class="col-md-4 control-lab">Mật khẩu mới</label>
                <div class="col-md-8">
                  @if ($errors->has('new_password'))
                    <span class="text-danger">{{ $errors->first('new_password') }}</span>
                  @endif
                  <input type="password" class="form-control" name="new_password" id="inputpass" placeholder="Nhập mật khẩu mới" required>
                </div>
              </div>
              <div class="form-group signupseller">
                <label for="inputpass" class="col-md-4 control-lab">Nhập lại mật khẩu</label>
                <div class="col-md-8">
                  @if ($errors->has('confirm_password'))
                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                  @endif
                  <input type="password" class="form-control" name="confirm_password" id="inputpass" placeholder="Nhập lại mật khẩu" required>
                </div>
              </div>  
              </div>
          </form>
              <div class="col-md-12 center">
                <button type="submit" id="btnsubmit" class="link-v1 rt">Cập nhật</button>
              </div>
            

        </div>
      </div>
    </div>
    
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
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