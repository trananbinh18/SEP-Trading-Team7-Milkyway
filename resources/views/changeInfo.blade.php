 @extends ('layout.master')
@section(' title ')
    thông tin tài khoản
@stop

@section('content')
    <div class="row" style="margin-bottom: 200px">
            <div class="col-md-3 box-shadow control-infotproduct">
                <div>
                    <aside class="widget widget_product_categories" style="padding-left: 10px;">
                    <div class="categories-home3">
                       <h3>BÁCH TRẦN</h3>
                        <i class="fa fa-chevron-circle-down icon-click"></i>
                        <ul class="menu-vertical">
                            <li><img src="resources/assets/images/icon-choose-2.png" alt=""><a href="#" title="Danh sách sản phẩm">Thông tin tài khoản</a></li>
                            <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="#" title="Doanh số">Giỏ hàng</a></li>
                        </ul>
                    </div>

            </div>
                </aside>    
                </div>

            <div class="col-md-8 control-infotproduct">
                <form class="form-horizontal" role="form">
                  <div style="padding-left: 240px;">
                    <h3 style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'">THÔNG TIN TÀI KHOẢN</h3>
                    <br>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Họ Tên*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" placeholder="Nhập họ và tên">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputPassword3" class="col-sm-3 control-lab">Giới tính*</label>
                    <div class="col-sm-9">
                        <label class="radio-inline control-tbrow">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Nam
                        </label>
                        <label class="radio-inline control-tbrow">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Nữ
                        </label>
                        <label class="radio-inline control-tbrow">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Khác
                        </label>
                    </div>
                  </div>
                 <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Ngày sinh*</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="inputdate" placeholder="dd/mm/yyyy">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Địa chỉ*</label>
                    <div class="col-sm-9">
                      <input type="test" class="form-control" id="inputaddress" placeholder="Nhập địa chỉ của bạn">
                    </div>
                  </div>
                   <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">số điện thoại*</label>
                    <div class="col-sm-9">
                      <input type="test" class="form-control" id="inputphone" placeholder="Nhập số điện thoại">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Email*</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputemail" placeholder="Nhập Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Mật khẩu mới*</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputpassword" placeholder="Nhập mật khẩu mới">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                        <button class="link-v1 rt" style="margin-left: 45%" type="button">Cập nhập</button>
                    </div>
                  </div>
                </form>
            </div>
       </div> 
        <div id="back-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </div>
@endsection