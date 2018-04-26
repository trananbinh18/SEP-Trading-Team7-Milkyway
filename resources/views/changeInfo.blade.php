 <!DOCTYPE html>
 @extends('layout.master')
 @section('content')      
       <div>
         <div class="row Ttttk">
            <div class="col-md-3 LTtttk">
                <p>Tài khoản của</p>
                <h3>BÁCH TRẦN</h3>
            </div>
            <div class="col-md-9 RTtttk">       
                <h2>Thông tin tài khoản</h2>
            </div>
         </div>
         <br>
         <div class="row Btttk">
           <div class="col-md-3 LBtttk">
             <p><a style="color: black" href="" >Thông tin tài khoản</a></p>
             <p><a style="color: black" href="" >Quản lý đơn hàng</a></p>
             <p><a style="color: black" href="" >Sản phẩm yêu thích</a></p>
           </div>
           <div class="col-md-5">
              <div class="form-group">
                <label class="control-label" for="full_name">Họ tên </label>
                <div class="input-wrap">
                  <input type="text" class="form-control"  value="" placeholder="Bách Trần">
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group ">
                                <label class="control-label" for="phone_number">Số điện thoại</label>
                                <div class="input-wrap update-phone">
                                    <input type="text" placeholder="Hãy nhập SĐT để bảo mật tốt hơn" value="" class="form-control" name="phone_number" id="phone_number">
                                    <span class="help-block"></span>
                                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="full_name">Email </label>
                <div class="input-wrap">
                  <input type="text"  class="form-control" value="" placeholder="Email">
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="full_name">Ngày Sinh </label>
                <div class="input-wrap">
                  <input type="text"  class="form-control"  value="" placeholder="dd/mm/yyyy">
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="full_name">Mật khẩu </label>
                <div class="input-wrap">
                  <input type="pasword"  class="form-control"  value="" placeholder="hãy nhập mật khẩu mới">
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group gender-select-wrap" id="register_name">
                            <label class="control-label" for="pasword">Giới tính</label>
                            <div class="input-wrap">
                                <div class="row">
                                    <div class="col-xs-4">
                                         <label>
                                            <input type="radio" name="gender" value="on" id="gender_male" class="gender">
                                            <span>
                                                 <i class="ico"></i>
                                            </span>
                                             Nam

                                          </label>

                                    </div>
                                    <div class="col-xs-4">
                                         <label>

                                            <input type="radio" name="gender" value="off" id="gender_female" class="gender" checked="">
                                            <span>
                                                 <i class="ico"></i>
                                            </span>
                                             Nữ
                                         </label>

                                    </div>
                                </div>
                                

                            </div>
                        </div>
              <div>
                 <button style="margin-left: 40%;" type="button" class="btn btn-success">Cập nhập</button>
              </div>
            </div>
            
         </div> 
       </div>
          
@endsection