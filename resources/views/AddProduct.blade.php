@extends('layout.master')
@section('content')
<div class="breadcrumb-wrap">
  <div container>
    <ul class="breadcrumb">
      <li>
        <a href="{{action('Controller@home')}}">Trang chủ</a>
      </li>
      <li>
        <a href="#">Danh sách sản phẩm</a>
      </li>
      <li>
        <a href="#">Đăng sản phẩm</a>
      </li>
    </ul>
  </div>
</div>
<div class="container">
    <div class="row row-addproduct">
            <div class="col-md-3 box-shadow control-infotproduct">
                <div>
                  <aside class="widget widget_product_categories" style="padding-left: 10px;">
                    <div class="categories-home3">
                       <h3>Thông tin sản phẩm</h3>
                        <i class="fa fa-chevron-circle-down icon-click"></i>
                        <ul class="menu-vertical">
                            <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="#" title="Danh sách sản phẩm">Danh sách sản phẩm</a></li>
                            <li><img src="resources/assets/images/icon-categories-7.png" alt=""><a href="#" title="Doanh số">Doanh số</a></li>
                            <li><img src="resources/assets/images/icon-categories-8.png" alt=""><a href="#" title="Thông báo">Thông báo</a></li>
                        </ul>
                    </div>
                </div>
                </aside>             
            </div>
            <div class="col-md-8 control-infotproduct box-shadow">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Tên sản phẩm(*);</label>
                    <div class="col-md-9">
                      <input type="email" class="form-control control-tbrow" id="inputEmail3" placeholder="Nhập tên sản phẩm">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-md-3 control-lab">Danh mục(*):</label>
                    <div class="col-md-9">
                        <select id="enterprise" class="Unit" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                          <option>Thực phẩm tươi</option>
                          <option>Thực phẩm khô</option>
                          <option>Sản phẩm khác</option>                      
                      </select> 
                    </div>
                  </div>
                  <div class="form-group">                  
                    <label for="inputEmail3" class="col-md-3 control-lab">Ảnh sản phẩm(*):</label>                    
                    <div class="row" style="width: 100%;">
                      <div class="form-group col-md-3 img12">
                          <div class="img-picker">
                            <div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" class="imgin" name="images">
                            </div>
                          </div>
                      </div>                                                                     
                    </div>
                  </div>                             
                  <div class="row">
                    <label for="inputEmail3" class="col-md-3 control-lab">Ảnh chứng nhận(*):</label>
                    <div class="row" style="width: 100%;">
                      <div class="form-group col-md-3 img12">
                          <div class="img-picker">
                            <div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" class="imgin" name="images">
                            </div>
                          </div>
                      </div>                                                                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Giá sản phẩm(*):</label>
                    <div class="col-md-4">
                      <input type="email" class="form-control control-tbrow" id="inputEmail3" placeholder="VND">
                    </div> 
                    <label class="col-md-2 control-lab">Đơn vị:</label>
                    <div class="col-md-3">
                      <select id="enterprise" class="Unit" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                        <option>Kilogram</option>
                        <option>Gram</option>                      
                      </select>                                              
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Miêu tả sản phẩm:</label>
                    <div class="col-md-9">
                      <textarea class="form-control control-tbrow" rows="5" placeholder="Nhập thông tin miêu tả sản phẩm."></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                        <button class="button_search" type="button">Đăng sản phẩm</button>
                    </div>
                  </div>
                </form>
            </div>
       </div>
        
</div>
@endsection