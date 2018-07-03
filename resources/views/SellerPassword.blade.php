@extends ('layout.master')
@section(' title ')
Đổi mật khẩu
@stop
@section('content')
<div class="row" style="margin-bottom: 200px">
  <div class="col-md-3 box-shadow control-infotproduct">
    <div>
      <aside class="widget widget_product_categories" style="padding-left: 10px;">
        <div class="categories-home3">
             <h3>Thông Tin Sản Phẩm</h3>
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
      <div class="page">
        <div class="container container-ver2">
          <div class="content-text space-50">
            <form class="form-horizontal" role="form" action="{{route('changePassword')}}" method="POST">
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
                      <input type="password" class="form-control" name="current_password" id="inputpass" placeholder="Nhập mật khẩu hiện tại" >
                    </div>
                  </div>
                  <div class="form-group signupseller">
                    <label for="inputpass" class="col-md-4 control-lab">Mật khẩu mới</label>
                    <div class="col-md-8">
                      @if ($errors->has('new_password'))
                    <span class="text-danger">{{ $errors->first('new_password') }}</span>
                  @endif
                      <input type="password" class="form-control" name="new_password" id="inputpass" placeholder="Nhập mật khẩu mới" >
                    </div>
                  </div>
                  <div class="form-group signupseller">
                    <label for="inputpass" class="col-md-4 control-lab">Nhập lại mật khẩu</label>
                    <div class="col-md-8">
                      @if ($errors->has('confirm_password'))
                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                  @endif
                      <input type="password" class="form-control" name="confirm_password" id="inputpass" placeholder="Nhập lại mật khẩu" >
                    </div>
                  </div>
                  <div class="col-md-12 center">
                    <a href="#"><button type="submit" class="link-v1 rt">Cập nhật</button></a>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>


<!-- DataTables JavaScript -->
<script src="resources/assets/js/dataTables/jquery.dataTables.min.js"></script>
<script src="resources/assets/js/dataTables/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script type="text/javascript" src="{!!url("resources/assets/js/message.js")!!}"></script>
<script src="resources/assets/js/startmin.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
  $(document).ready(function() {
    $('#dataTables-example').DataTable({
      responsive: true
    });
  });
</script>
@endsection