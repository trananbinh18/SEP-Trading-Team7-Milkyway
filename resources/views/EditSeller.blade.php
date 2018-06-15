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

      <form class="form-horizontal" action="{{route('EditSeller')}}" role="form" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MANB" value="<?php echo "{$ngban['MANB']}";?>">
        <div class="center">
          <h2></h2>
        </div>
        <div class="form-group signupseller">
          <label for="inputpass" class="col-sm-3 control-lab">Trạng Thái</label>
         
            <div class="col-md-4">
                  <select id="enterprise" class="Unit" name="status" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                          <option value="0" <?php if($ngban['TTNB'] == '0'){echo("selected");} ?> >Chưa Duyệt</option>
                          <option value="1" <?php if($ngban['TTNB'] == '1'){echo("selected");} ?> >Đã Duyệt</option>                    
                      </select>
                  
                </div>
        </div>
        <div class="col-md-12 center">
          <br>
          <div class="col-md-6">
          <a href="{{route('Account_Seller')}}"><button id="" type="button" class="link-v1 rt">Quay lại</button></a>  
          </div>
          <div class="col-md-6">
          <a href="#"><button id="capnhat" type="submit" class="link-v1 rt">Cập nhật</button></a>  
          </div>
        </div>
      </form>
    </div>
  </div>
<script type="text/javascript" src="{!!url("resources/assets/js/message.js")!!}"></script>
  @endsection