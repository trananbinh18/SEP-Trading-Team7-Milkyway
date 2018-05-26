    @extends('layout.master')
    @section (' title ')
    Sửa thông tin
    @stop
    @section('content')
    <div class="row row-addproduct">
      <div class="col-md-3 box-shadow control-infotproduct">
        <div>
          <aside class="widget widget_product_categories" style="padding-left: 10px;">
            <div class="categories-home3">
             <h3>THÔNG TIN TÀI KHOẢN</h3>
             <i class="fa fa-chevron-circle-down icon-click"></i>
             <ul class="menu-vertical">
              <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('listpro')}}" title="">Danh sách sản phẩm</a></li>
              <li><img src="resources/assets/images/icon-choose-2.png" alt=""><a href="{{route('Seller_Infor')}}" title="Sửa thông tin">Sửa thông tin</a></li>
              <li><img src="resources/assets/images/icon-choose-4.png" alt=""><a href="{{route('Seller_Pass')}}"" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
            </ul>
           </div>
          </aside>
        </div>
      </div>
    <div class="col-md-8 control-infotproduct box-shadow">
      @if(session('thongbao'))
      <div class="alert-success">
        {{session('thongbao')}}
      </div>
      @endif

      <form class="form-horizontal" action="{{route('changeInfor')}}" role="form" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="center">
          <h2>THÔNG TIN TÀI KHOẢN</h2>
        </div>
        <div class="form-group signupseller">
          <label for="inputEmail3" class="col-sm-3 control-lab">Họ và tên</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Họ và tên" name="name" value="{{session()->get('name')}}" required>
          </div>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Số điện thoại</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Số điện thoại" name="phone" value="{{session()->get('phone')}}" required >
          </div>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Địa chỉ</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Địa chỉ" name="number_house" value="{{session()->get('address')}}" required>
          </div>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Phường</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Phường" name="ward" value="{{session()->get('ward')}}" required>
          </div>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Quận</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Quận" name="district" value="{{session()->get('district')}}" required>
          </div>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Thành phố</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Thành phố" name="city" value="{{session()->get('city')}}" required>
          </div>
        </div>
        <div class="col-md-12 center">
          <br>
          <a href="#"><button type="submit" class="link-v1 rt">Cập nhật</button></a>
        </div>
      </form>
    </div>
  </div>
  <div id="back-to-top">
  <i class="fa fa-long-arrow-up"></i>
</div>
  @endsection