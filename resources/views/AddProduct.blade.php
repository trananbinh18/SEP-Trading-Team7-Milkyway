@extends('layout.master')
@section('content')
<div class="container">
    <div class="row row-addproduct">
            <div class="col-md-3 box-shadow control-infotproduct">
                <h1 class="control-h1">Thông tin sản phẩm</h1>
                <div>
                    <aside class="widget widget_product_categories" style="padding-left: 10px;">
                    <ul class="product-categories">
                        <li><a href="#" title="Danh sách sản phẩm">Danh sách sản phẩm</a></li>
                        <li><a href="#" title="Doanh số">Doanh số</a></li>
                        <li><a href="#" title="Thông báo">Thông báo</a></li>                       
                    </ul>
                </aside>    
                </div>            
            </div>
            <div class="col-md-8 control-infotproduct box-shadow">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-lab">Tên sản phẩm(*);</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control control-tbrow" id="inputEmail3" placeholder="Nhập tên sản phẩm">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-lab">Danh mục(*):</label>
                    <div class="col-sm-9">
                        <select id="enterprise" class="Unit" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                          <option>Thực phẩm tươi</option>
                          <option>Thực phẩm khô</option>
                          <option>Sản phẩm khác</option>                      
                      </select> 
                    </div>
                  </div>
                 <div class="form-group">                  
                    <label for="inputEmail3" class="col-sm-3 control-lab">Ảnh sản phẩm(*):</label>                    
                    <div class="col-sm-2 form-group"> 
                      <span id="previewImg"></span>                       
                      <input class="hinh" type="image" src="resources/assets/images/uploadImg.jpg" width="100px" />
                    </div>
                    <div class="col-sm-7">
                      <input style="display: none" type='file' id="files" name="image" multiple="multiple" />
                    </div>                  
                  </div>
                  <div class="row">
                    <label for="inputEmail3" class="col-sm-3 control-lab">Ảnh chứng nhận(*):</label>
                    <div class="col-sm-2">
                      <input type='file' onchange="readURL(this);" />
                    </div>
                    <div class="col-sm-7">
                      <img id="blah" src="resources/assets/images/uploadImg.jpg" alt="your image" />
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-lab">Giá sản phẩm(*):</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control control-tbrow" id="inputEmail3" placeholder="VND">
                    </div> 
                    <label class="col-sm-2 control-lab">Đơn vị:</label>
                    <div class="col-sm-3">
                      <select id="enterprise" class="Unit" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                        <option>Kilogram</option>
                        <option>Gram</option>                      
                      </select>                                              
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-lab">Miêu tả sản phẩm:</label>
                    <div class="col-sm-9">
                      <textarea class="form-control control-tbrow" rows="5" placeholder="Nhập thông tin miêu tả sản phẩm."></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
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