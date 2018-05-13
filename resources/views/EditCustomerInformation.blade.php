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
                <form class="form-horizontal" role="form">
                  <div style="padding-left: 240px;">
                    <h3 style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'">THÔNG TIN TÀI KHOẢN</h3>
                    <br>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Họ và tên*</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Họ và tên">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Số điện thoại*</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Số điện thoại">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Số nhà*</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Số nhà">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Phường*</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Phường">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Quận*</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Quận">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Thành phố*</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Thành phố">
                    </div>
                  </div>
                  <div style="padding-left: 240px;">
                    <br>
                    <a href="#"><button type="submit" class="link-v1 rt">Cập nhật</button></a>
                  </div>
            </div>
       </div>
@endsection