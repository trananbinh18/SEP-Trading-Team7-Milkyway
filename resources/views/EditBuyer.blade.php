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
              <li><img src="resources/assets/images/icon-choose-2.png" alt=""><a href="" title="Sửa thông tin">Sửa thông tin</a></li>
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

      <form class="form-horizontal" action="{{route('EditBuyer')}}" role="form" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MANM" value="<?php echo "{$ngmua['MANM']}";?>">
        <div class="center">
          <h2>THÔNG TIN TÀI KHOẢN</h2>
        </div>
        <div class="form-group signupseller">
          <label for="inputEmail3" class="col-sm-3 control-lab">Họ và tên</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Họ và tên" name="name" value="<?php echo "{$ngmua['TENNM']}"; ?>" required>
          </div>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Số điện thoại</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Số điện thoại" name="phone" value="<?php echo "{$ngmua['SDT']}"; ?>" required >
          </div>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Địa chỉ</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Địa chỉ" name="number_house" value="<?php echo "{$ngmua['SONHA']}"; ?>" required>
          </div>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Phường</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Phường" name="ward" value="<?php echo "{$ngmua['PHUONG']}"; ?>" required>
          </div>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Quận</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Quận" name="district" value="<?php echo "{$ngmua['QUAN']}"; ?>" required>
          </div>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Thành phố</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Thành phố" name="city" value="<?php echo "{$ngmua['TP']}"; ?>" required>
          </div>
        </div>
        <div class="col-md-12 center">
          <br>
          <div class="col-md-6">
          <a href="{{route('Account_Buyer')}}"><button id="" type="button" class="link-v1 rt">Quay lại</button></a>  
          </div>
          <div class="col-md-6">
          <a href="#"><button id="capnhat" type="submit" class="link-v1 rt">Cập nhật</button></a>  
          </div>
        </div>
      </form>
    </div>
  </div>
  @endsection