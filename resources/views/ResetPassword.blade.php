    @extends('layout.master')
        @section (' title ')
        Sửa mật khẩu
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
                              <li><img src="resources/assets/images/icon-categories-8.png" alt=""><a href="{{route('resetpass')}}" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
                          </ul>
                      </div>
                  </aside>
              </div>
            </div>
            <div class="col-md-8 control-infotproduct box-shadow">
                <form class="form-horizontal"  method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="group box space-20">
                        <label class="control-label" for="email" >Mật khẩu hiện tại *</label>
                        <input class="form-control" type="Password" placeholder="Mật Khẩu Hiện Tại" id="current-password" name="current-password" name="current-password" required>
                    </div>
                    <div class="group box">
                        <label class="control-label" for="new-password" >Mật khẩu mới *</label>
                        <input class="form-control" type="Password" placeholder="Mật Khẩu Mới" id="new-password"
                        name="new-password" required>
                    </div>
                      <div class="group box">
                        <label class="control-label" for="new-password" >Nhập lại mật khẩu *</label>
                        <input class="form-control" type="Password" placeholder="Nhập lại mật khẩu" id="valid-new-password"
                        name="valid-new-password" required> 
                      </div>
                      <br>
                      <br>
                    <button type="submit" class="link-v1 rt" >Đăng Nhập</button>
                </form>
            </div>
       </div>
@endsection