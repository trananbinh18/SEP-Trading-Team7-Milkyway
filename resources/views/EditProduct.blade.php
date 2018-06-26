@extends('layout.master')
@section('content')
    <div class="row row-addproduct" style="margin-bottom: 200px">
            <div class="col-md-3 box-shadow control-infotproduct">
                <div>
                    <aside class="widget widget_product_categories" style="padding-left: 10px;">
                    <div class="categories-home3">
                       <h3>Thông tin sản phẩm</h3>
                        <i class="fa fa-chevron-circle-down icon-click"></i>
                        <ul class="menu-vertical">
                            <li><img src="{{url('resources/assets/images/icon-categories-1.png')}}" alt=""><a href="{{route('listpro')}}" title="">Sản phẩm chờ duyệt</a></li>
                            <li><img src="{{url('resources/assets/images/icon-categories-1.png')}}" alt=""><a href="{{route('ListApproved')}}" title="">Sản phẩm đã duyệt</a></li>
                            <li><img src="{{url('resources/assets/images/icon-categories-1.png')}}" alt=""><a href="{{route('ListHide')}}" title="">Danh sách sản phẩm ẩn</a></li>
                            <li><img src="{!!url("resources/assets/images/icon-categories-7.png") !!}" alt=""><a href="#" title="Doanh số">Doanh số</a></li>
                            <li><img src="{{url('resources/assets/images/icon-choose-2.png')}}" alt=""><a href="{{route('Seller_Infor')}}" title="Sửa thông tin">Sửa thông tin</a></li>
                            <li><img src="{{url('resources/assets/images/icon-choose-4.png')}}" alt=""><a href="{{route('Seller_Pass')}}"" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
                            <li><img src="{!!url("resources/assets/images/icon-categories-8.png") !!}" alt=""><a href="#" title="Thông báo">Thông báo</a></li>
                        </ul>
                    </div>
                    
            </div>
                </div>
          
                
                


            <div class="col-md-8 control-infotproduct box-shadow">
                <form class="form-horizontal" role="form" action="{{route('Editproductpost')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="HINH" value="<?php echo "{$sanpham['HINH']}";?>">
                <input type="hidden" name="GCN" value="<?php echo "{$sanpham['GCN']}";?>">
                <input type="hidden" name="MANB" value="<?php echo "{$sanpham['MANB']}";?>">
                <input type="hidden" name="MASP" value="<?php echo "{$sanpham['MASP']}";?>">
                

                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Tên sản phẩm</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" name="tensanpham" id="inputEmail3" placeholder="Nhập tên sản phẩm" value="<?php echo "{$sanpham['TENSP']}";?>">
                    </div>
                    <label for="inputEmail3" class="col-md-3 control-lab">Trạng thái sản phẩm</label>
                    <div class="col-md-3">
                        <select id="enterprise" class="Unit" name="cbChangeStatus" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                          <option value="0" > Hiện sản phẩm</option>
                          <option value="2" > Ẩn sản phẩm</option>                     
                      </select> 
                    </div>
                  </div>                  
                  <div class="form-group">                  
                    <label for="inputEmail3" class="col-md-3 control-lab">Ảnh sản phẩm</label>                    
                    <div class="row" style="width: 100%;">
                      <div class="form-group col-md-3 img12" style="padding-left: 18px;">
                          <div class="img-picker">
                            <div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" class="imgin1" name="imagesSP">
                            </div>
                          </div>
                      </div>                                                                     
                    </div>
                    <label for="inputEmail3" class="col-md-3 control-lab">Ảnh chứng nhận</label>
                    <div class="row" style="width: 100%;">
                      <div class="form-group col-md-3 img12" style="padding-left: 18px;">
                          <div class="img-picker">
                            <div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" class="imgin2" name="imagesGCN">
                            </div>
                          </div>
                      </div>                                                                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-md-3 control-lab">Danh mục</label>
                    <div class="col-md-4">
                        <select id="enterprise" class="Unit" name="cbCategory" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                          <option value="4" <?php if($sanpham['MALOAISP'] == '4'){echo("selected");} ?> >Rau</option>
                          <option value="5" <?php if($sanpham['MALOAISP'] == '5'){echo("selected");} ?> >Trái cây</option>
                          <option value="6" <?php if($sanpham['MALOAISP'] == '6'){echo("selected");} ?> >Củ</option>                      
                      </select> 
                    </div>
                    <label class="col-md-2 control-lab">Số lượng</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" name="Soluong" id="inputEmail3" value="<?php echo "{$sanpham['SOLUONG']}"; ?>">
                    </div> 
                  </div>                             
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Giá cũ</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="giacu" id="inputEmail3" placeholder="VND" value="<?php echo "{$sanpham['GIA']}"; ?>">
                    </div> 
                    <label class="col-md-2 control-lab">Đơn vị</label>
                    <div class="col-md-3">
                      <select id="enterprise" class="Unit" name="cdDonvi" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                        <option <?php if($sanpham['DONVI'] == 'Kilogram'){echo("selected");} ?> >Kilogram</option>
                        <option <?php if($sanpham['DONVI'] == 'Trái'){echo("selected");} ?> >Trái</option>                      
                      </select>                                              
                    </div>                  
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Giá mới</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="giamoi" id="giamoi" placeholder="VND" disabled >
                    </div>
                    <div class="col-md-4">
                      <label for="inputEmail3" class="col-md-4 control-lab">Giảm giá</label>
                      <div class="col-md-3">
                        <input type="checkbox" id="optgiamgia" name="" value="">
                      </div>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Miêu tả sản phẩm</label>
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
                        <button class="button_search" id="dangsanpham" type="submit">Lưu chỉnh sửa</button>
                    </div>
                  </div>
                </form>
            </div>
       </div>
        
        <div id="back-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </div>

      
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

    $(".imgin1").ready(function() {
     
            $(".imgin1").siblings("i").remove();
            $(".imgin1").siblings(".img222").remove();

            $(".imgin1").parent(".form-control").prepend("<img src='{!! url("resources/assets/images/products/{$sanpham['HINH']}") !!}' class='img-responsive img-rounded img222' style='height:70%; width:100%; position:absolute;top:0px;left:0px'/>");


            $(".imgin1").siblings(".img222").after("<button type='button' class='btn btn-danger' style='font-weight: bold; width:100%; height:30%; position:absolute;top:70%;left:0'>Xóa</button>");
            
            $(".imgin1").hide();
            $(".imgin1").siblings(".btn").click(function () {
                $(".imgin1").parent(".form-control").children(".img222").remove();
                $(".imgin1").parent(".form-control").children(".imgin1").show();
                $(".imgin1").parent(".form-control").children(".imgin").val(null);
                $(".imgin1").parent(".form-control").prepend("<i class='glyphicon glyphicon-plus'></i>");
                $(".imgin1").parent(".form-control").children(".btn").remove();
            });
        
            $(".imgin1").click(function () {
        
        //$(this).children("form-control").add("<button class='' style='font-weight: normal;'>Remove</button>")
        $(this).change(function () {
            $(this).siblings("i").remove();
            $(this).siblings(".img222").remove();

            $(this).parent(".form-control").prepend("<img class='img-responsive img-rounded img222' style='height:70% ; width:100%; position:absolute;top:0px;left:0px'/>");


            $(this).siblings(".img222").after("<button type='button' class='btn btn-danger' style='font-weight: bold; width:100%; height:30%; position:absolute;top:70%;left:0'>Xóa</button>");
            readURL(this, $(this).siblings(".img222"));
            $(this).hide();
            $(this).siblings(".btn").click(function () {
                $(this).parent(".form-control").children(".img222").remove();
                $(this).parent(".form-control").children(".imgin1").show();
                $(this).parent(".form-control").children(".imgin1").val(null);
                $(this).parent(".form-control").prepend("<i class='glyphicon glyphicon-plus'></i>");
                $(this).parent(".form-control").children(".btn").remove();
            });
        });
        

    });

    });


    $(".imgin2").ready(function() {
     
            $(".imgin2").siblings("i").remove();
            $(".imgin2").siblings(".img222").remove();

            $(".imgin2").parent(".form-control").prepend("<img src='{!! url("resources/assets/images/Certificate/{$sanpham['GCN']}") !!}' class='img-responsive img-rounded img222' style='height:70%; width:100% ;position:absolute;top:0px;left:0px'/>");


            $(".imgin2").siblings(".img222").after("<button type='button' class='btn btn-danger' style='font-weight: bold; width:100%; height:30%; position:absolute;top:70%;left:0'>Xóa</button>");
            
            $(".imgin2").hide();
            $(".imgin2").siblings(".btn").click(function () {
                $(".imgin2").parent(".form-control").children(".img222").remove();
                $(".imgin2").parent(".form-control").children(".imgin2").show();
                $(".imgin2").parent(".form-control").children(".imgin2").val(null);
                $(".imgin2").parent(".form-control").prepend("<i class='glyphicon glyphicon-plus'></i>");
                $(".imgin2").parent(".form-control").children(".btn").remove();
            });


        $(".imgin2").click(function () {
        
        //$(this).children("form-control").add("<button class='' style='font-weight: normal;'>Remove</button>")
        $(this).change(function () {
            $(this).siblings("i").remove();
            $(this).siblings(".img222").remove();

            $(this).parent(".form-control").prepend("<img class='img-responsive img-rounded img222' style='height:70%; width:100% ;position:absolute;top:0px;left:0px'/>");


            $(this).siblings(".img222").after("<button type='button' class='btn btn-danger' style='font-weight: bold; width:100%; height:30%; position:absolute;top:70%;left:0'>Xóa</button>");
            readURL(this, $(this).siblings(".img222"));
            $(this).hide();
            $(this).siblings(".btn").click(function () {
                $(this).parent(".form-control").children(".img222").remove();
                $(this).parent(".form-control").children(".imgin2").show();
                $(this).parent(".form-control").children(".imgin2").val(null);
                $(this).parent(".form-control").prepend("<i class='glyphicon glyphicon-plus'></i>");
                $(this).parent(".form-control").children(".btn").remove();
            });
        });
        

    });
    });


    $(document).ready(function(){
              $("#optgiamgia").change(function(){
                        if($("#optgiamgia").is(':checked'))
                          $("#giamoi").prop('disabled', false); 
                        else
                          $("#giamoi").prop('disabled', true); 
              })

              $("#dangsanpham").click(function(){
                   if($("#optgiamgia").is(':checked')==false)
                    $("#giamoi").remove();
              })
              });

    </script>

@endsection