@extends('layout.master')
@section('content')
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
                        <label class="radio-inline control-tbrow">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Thực phẩm tươi
                        </label>
                        <label class="radio-inline control-tbrow">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Thực phẩm khô
                        </label>
                        <label class="radio-inline control-tbrow">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Sản phẩm khác
                        </label>
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-lab">Ảnh sản phẩm(*):</label>
                    <div class="col-sm-2 form-group">
                        <input type="file" name="img_file[]" multiple="true" onchange="previewImg(event);" id="img_file" accept="image/*">
                    </div>
                    <div class="col-sm-7">
                      <textarea class="form-control control-tbrow" rows="8"></textarea>
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-lab">Giá sản phẩm(*)</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control control-tbrow" id="inputEmail3" placeholder="VND">
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
        
        <div id="back-to-top">
            <i class="fa fa-long-arrow-up"></i>
@endsection