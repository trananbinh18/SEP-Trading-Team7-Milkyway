@extends('layout.master')
@section('content')
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
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Tên sản phẩm(*);</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Nhập tên sản phẩm">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputPassword3" class="col-sm-3 control-lab">Danh mục(*):</label>
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
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Ảnh sản phẩm(*):</label>
                    <div class="col-sm-2 form-group">
                        <input type="file" name="img_file[]" multiple="true" onchange="previewImg(event);" id="img_file" accept="image/*">
                    </div>
                    <div class="col-sm-7">
                      <textarea class="form-control" rows="8"></textarea>
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Giá sản phẩm(*)</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="VND">
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-weight: 400; font-size: 18px; font-family: 'Roboto Slab'" for="inputEmail3" class="col-sm-3 control-lab">Miêu tả sản phẩm:</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" rows="5" placeholder="Nhập thông tin miêu tả sản phẩm."></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                        <button class="link-v1 rt" style="float: right;" type="button">Đăng sản phẩm</button>
                    </div>
                  </div>
                </form>
            </div>
       </div>
        
        <div id="back-to-top">
            <i class="fa fa-long-arrow-up"></i>
@endsection