    @extends('layout.master')
        @section (' title ')
        Sửa thông tin khách hàng
        @stop
        @section('content')
        <div class="row row-addproduct">
          <div class="col-md-3 box-shadow control-infotproduct">
            <div>
              <aside class="widget widget_product_categories" style="padding-left: 10px;">
                      <div class="categories-home3">
                         <h3>Thông tin khách hàng</h3>
                          <i class="fa fa-chevron-circle-down icon-click"></i>
                          <ul class="menu-vertical">
                              <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="#" title="Đơn hàng">Đơn hàng</a></li>
                              <li><img src="resources/assets/images/icon-categories-8.png" alt=""><a href="{{route('editInf')}}" title="Sửa thông tin">Sửa thông tin</a></li>
                              <li><img src="resources/assets/images/icon-categories-8.png" alt=""><a href="{{route('resetpass')}}"" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
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
                  <div style="padding-left: 240px;">
                    <h3 style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'">THÔNG TIN TÀI KHOẢN</h3>
                    <br>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Họ và tên*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Họ và tên" name="name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Số điện thoại*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Số điện thoại" name="phone" value="{!! old('name', isset($data)) ? $data['SĐT']  : null !!}" required >
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Số nhà*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Số nhà" name="number_house" value="{!! old('name', isset($data)) ? $data['SONHA']  : null !!}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Phường*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Phường" name="ward" value="{!! old('name', isset($data)) ? $data['PHUONG']  : null !!}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Quận*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Quận" name="district" value="{!! old('name', isset($data)) ? $data['QUAN']  : null !!}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Thành phố*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Thành phố" name="city" value="{!! old('name', isset($data)) ? $data['TP']  : null !!}" required>
                    </div>
                  </div>
                  <div style="padding-left: 240px;">
                    <br>
                    <a href="#"><button type="submit" class="link-v1 rt">Cập nhật</button></a>
                  </div>
            </div>
       </div>
@endsection