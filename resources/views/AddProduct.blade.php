@extends('layout.master')
@section('content')
<div class="container">
    <div class="banner-header banner-lbook3">
      <img src="resources/assets/images/banner/1.png" alt="Banner-header">
      <div class="text">
       <h3>Tất cả sản phẩm</h3>
        <p><a href="#" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Danh sách sản phẩm</a><i class="fa fa-caret-right"></i>Đăng sản phẩm</p>
      </div>
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
                <form class="form-horizontal" role="form" action="{{route('CreateProduct')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Tên sản phẩm(*);</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="tensanpham" id="inputEmail3" placeholder="Nhập tên sản phẩm">
                    </div>
                  </div>                  
                  <div class="form-group">                  
                    <label for="inputEmail3" class="col-md-3 control-lab">Ảnh sản phẩm(*):</label>                    
                    <div class="row" style="width: 100%;">
                      <div class="form-group col-md-3 img12" style="padding-left: 18px;">
                          <div class="img-picker">
                            <div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" class="imgin" name="imagesSP">
                            </div>
                          </div>
                      </div>                                                                     
                    </div>
                    <label for="inputEmail3" class="col-md-3 control-lab">Ảnh chứng nhận(*):</label>
                    <div class="row" style="width: 100%;">
                      <div class="form-group col-md-3 img12" style="padding-left: 18px;">
                          <div class="img-picker">
                            <div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" class="imgin" name="imagesGCN">
                            </div>
                          </div>
                      </div>                                                                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-md-3 control-lab">Danh mục(*):</label>
                    <div class="col-md-4">
                        <select id="enterprise" class="Unit" name="cbCategory" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                          <option value="4">Rau</option>
                          <option value="5">Trái cây</option>
                          <option value="6">Củ</option>                      
                      </select> 
                    </div>
                    <label class="col-md-2 control-lab">Số lượng:</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" name="Soluong" id="inputEmail3">
                    </div> 
                  </div>                             
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Giá sản phẩm(*):</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="Giasanpham" id="inputEmail3" placeholder="VND">
                    </div> 
                    <label class="col-md-2 control-lab">Đơn vị:</label>
                    <div class="col-md-3">
                      <select id="enterprise" class="Unit" name="cdDonvi" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                        <option>Kilogram</option>
                        <option>Trái</option>                      
                      </select>                                              
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Miêu tả sản phẩm:</label>
                    <div class="col-md-9">
                      <textarea type="text" class="form-control" name="mieutasanpham" rows="5" placeholder="Nhập thông tin miêu tả sản phẩm."></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                        <button class="button_search" type="submit">Đăng sản phẩm</button>
                    </div>
                  </div>
                </form>
            </div>
       </div>
</div>
@endsection