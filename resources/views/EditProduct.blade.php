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
                            <li><img src="{!!url("resources/assets/images/icon-categories-1.png") !!}" alt=""><a href="#" title="Danh sách sản phẩm">Danh sách sản phẩm</a></li>
                            <li><img src="{!!url("resources/assets/images/icon-categories-7.png") !!}" alt=""><a href="#" title="Doanh số">Doanh số</a></li>
                            <li><img src="{!!url("resources/assets/images/icon-categories-8.png") !!}" alt=""><a href="#" title="Thông báo">Thông báo</a></li>
                        </ul>
                    </div>
                    
            </div>
                </aside>    
                </div>
          
                
                


            <div class="col-md-8 control-infotproduct box-shadow">
                <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Tên sản phẩm(*);</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="tensanpham" id="inputEmail3" placeholder="Nhập tên sản phẩm" value="<?php echo "{$sanpham['TENSP']}";?>">
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
                          <option value="4" <?php if($sanpham['MALOAISP'] == '4'){echo("selected");} ?> >Rau</option>
                          <option value="5" <?php if($sanpham['MALOAISP'] == '5'){echo("selected");} ?> >Trái cây</option>
                          <option value="6" <?php if($sanpham['MALOAISP'] == '6'){echo("selected");} ?> >Củ</option>                      
                      </select> 
                    </div>
                    <label class="col-md-2 control-lab">Số lượng:</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" name="Soluong" id="inputEmail3" value="<?php echo "{$sanpham['SOLUONG']}"; ?>">
                    </div> 
                  </div>                             
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Giá sản phẩm(*):</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="Giasanpham" id="inputEmail3" placeholder="VND" value="<?php echo "{$sanpham['GIA']}"; ?>">
                    </div> 
                    <label class="col-md-2 control-lab">Đơn vị:</label>
                    <div class="col-md-3">
                      <select id="enterprise" class="Unit" name="cdDonvi" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                        <option <?php if($sanpham['DONVI'] == 'Kilogram'){echo("selected");} ?> >Kilogram</option>
                        <option <?php if($sanpham['DONVI'] == 'Trái'){echo("selected");} ?> >Trái</option>                      
                      </select>                                              
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Miêu tả sản phẩm:</label>
                    <div class="col-md-9">
                      <textarea type="text" class="form-control" name="mieutasanpham" rows="5" placeholder="Nhập thông tin miêu tả sản phẩm."><?php echo"{$sanpham['MOTA']}"?></textarea>
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
        
        <div id="back-to-top">
            <i class="fa fa-long-arrow-up"></i>



      <script>
        
    function readURL(input,img) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(img).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".imgin").ready(function() {
     
            $(".imgin").siblings("i").remove();
            $(".imgin").siblings(".img222").remove();

            $(".imgin").parent(".form-control").prepend("<img src='resources/assets/images/products/hinhvd.jpg' class='img-responsive img-rounded img222' style='height:70% ;position:absolute;top:0px;left:0px'/>");


            $(".imgin").siblings(".img222").after("<button type='button' class='btn btn-danger' style='font-weight: bold; width:100%; height:30%; position:absolute;top:70%;left:0'>Remove</button>");
            
            $(".imgin").hide();
            $(".imgin").siblings(".btn").click(function () {
                $(".imgin").parent(".form-control").children(".img222").remove();
                $(".imgin").parent(".form-control").children(".imgin").show();
                $(".imgin").parent(".form-control").children(".imgin").val(null);
                $(".imgin").parent(".form-control").prepend("<i class='glyphicon glyphicon-plus'></i>");
                $(".imgin").parent(".form-control").children(".btn").remove();
            });
        
    });


    </script>
@endsection