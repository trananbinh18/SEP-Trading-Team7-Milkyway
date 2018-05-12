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
	                            <li><img src="resources/assets/images/icon-categories-8.png" alt=""><a href="#" title="Sửa thông tin">Sửa thông tin</a></li>
	                            <li><img src="resources/assets/images/icon-categories-8.png" alt=""><a href="#" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
	                        </ul>
	                    </div>
	                </aside>
            	</div>
            </div>
            <div class="col-md-8 control-infotproduct box-shadow">
                <form class="form-horizontal" role="form">
                  <div style="padding-left: 240px;">
                    <h3 style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'">ĐỔI MẬT KHẨU</h3>
                    <br>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Mật khẩu hiện tại*</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Mật khẩu hiện tại">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Mật khẩu mới*</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Mật khẩu mới">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Xác nhận lại mật khẩu*</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Xác nhận lại mật khẩu">
                    </div>
                  </div>
                  <div style="padding-left: 240px;">
                    <br>
                    <a href="#"><button type="submit" class="link-v1 rt">Cập nhật</button></a>
                  </div>
            </div>
       </div>
@endsection