@extends('layout.master')
        @section (' title ')
        Thêm sản phẩm
        @stop
        @section('content')
<div class="container">
    <div class="banner-header banner-lbook3">
      <img src="resources/assets/images/banner-product-checkout.jpg" alt="Banner-header">
      <div class="text">
       <h3>Tất cả sản phẩm</h3>
        <p><a href="#" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Danh sách sản phẩm</a><i class="fa fa-caret-right"></i>Đăng sản phẩm</p>
      </div>
    </div>
</div>
{{-- Confirm popup --}}
      <div class="quickview-wrapper open" style="display: none">
       <div onclick="hideQuickView()" class="overlay-bg"></div>
       <div class="quick-modal show">
          <span class="qvloading"></span><span class="closeqv"><i class="fa fa-times"></i></span>
          <div id="quickview-content">
             <div class="woocommerce product product-details-content">
              <h1>Thông báo xác Nhận</h1>
              <p>Bạn có đồng ý đăng sản phẩm này ?</p>
              
              <div class="form-group">
                    <div class="input-group">
                        <button class="binhml" id="btnaccept" type="submit">Đồng ý</button>
                    </div>
              </div>  
                <!-- End product-info -->
             </div>
             <!-- End product -->
          </div>
          <!-- End quick view -->
       </div>
       <!-- End quick modal -->
    </div>
      {{-- End Confirm popup --}}
<div class="container">
    <div class="row row-addproduct">
            <div class="col-md-3 box-shadow control-infotproduct">
                <div>
                  <aside class="widget widget_product_categories" style="padding-left: 10px;">
                    <div class="categories-home3">
                       <h3>Thông tin tài khoản</h3>
                        <i class="fa fa-chevron-circle-down icon-click"></i>
                        <ul class="menu-vertical">
                          <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('listpro')}}" title="Sản phẩm chơ duyệt">Sản phẩm chờ duyệt</a><span class="badge"><?php echo $countUnapprovedproduct; ?></span></li>
                          <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('ListApproved')}}" title="Sản phẩm đã duyệt">Sản phẩm đã duyệt</a><span class="badge"><?php echo $countApproveproduct; ?></span></li>
                          <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('ListHide')}}" title="Sản phẩm đã ẩn">Sản phẩm đã ẩn</a><span class="badge"><?php echo $countHideproduct; ?></li>
                          <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('ordersplaced')}}" title="Đơn hàng được đặt">Đơn hàng được đặt</a></li>
                          <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('Salerevenue')}}" title="Doanh số">Doanh số</a></li>
                          <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('historybuyproducts')}}" title="Lịch sử bán hàng">Lịch sử bán hàng</a></li>
                          <li><img src="resources/assets/images/icon-choose-2.png" alt=""><a href="{{route('Seller_Infor')}}" title="Sửa thông tin">Sửa thông tin</a></li>
                          <li><img src="resources/assets/images/icon-choose-4.png" alt=""><a href="{{route('Seller_Pass')}}"" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
                        </ul>
                    </div>
                </div>
                </aside>             
            </div>
            <div class="col-md-8 control-infotproduct box-shadow">
                @if(isset($thongbao))
                  <div class="alert-success">
                     Bạn thêm sản phẩm thành công
                  </div>
                @endif

                <form id="formAdd" class="form-horizontal" role="form" action="{{route('CreateProduct')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Tên sản phẩm</label>
                    <div class="col-md-9">
                      @if ($errors->has('tensanpham'))
                        <span class="text-danger">{{ $errors->first('tensanpham') }}</span>
                      @endif
                      <input type="text" class="form-control" name="tensanpham" id="inputEmail3" placeholder="Nhập tên sản phẩm">
                    </div>
                  </div>                  
                  <div class="form-group">                  
                    <label for="inputEmail3" class="col-md-3 control-lab">Ảnh sản phẩm</label>                    
                    <div class="row" style="width: 100%;">
                      <div class="form-group col-md-3 img12" style="padding-left: 18px">
                          <div class="img-picker">
                            @if ($errors->has('imagesSP'))
                              <span class="text-danger">{{ $errors->first('imagesSP') }}</span>
                            @endif
                            <div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" class="imgin" name="imagesSP">
                            </div>
                          </div>
                      </div>                                                                     
                    </div>
                    <label for="inputEmail3" class="col-md-3 control-lab">Ảnh chứng nhận</label>
                    <div class="row" style="width: 100%;">
                      <div class="form-group col-md-3 img12" style="padding-left: 18px">
                          <div class="img-picker">
                            @if ($errors->has('imagesGCN'))
                              <span class="text-danger">{{ $errors->first('imagesGCN') }}</span>
                            @endif
                            <div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" class="imgin" name="imagesGCN">
                            </div>
                          </div>
                      </div>                                                                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-md-3 control-lab">Danh mục</label>
                    <div class="col-md-4">
                        <select id="enterprise" class="Unit" name="cbCategory" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                          <option value="4">Rau</option>
                          <option value="5">Trái cây</option>
                          <option value="6">Củ</option>                      
                      </select> 
                    </div>
                    <label class="col-md-2 control-lab">Số lượng</label>
                    <div class="col-md-3">
                      @if ($errors->has('Soluong'))
                          <span class="text-danger">{{ $errors->first('Soluong') }}</span>
                      @endif
                      <input type="text" class="form-control" name="Soluong" id="inputEmail3">
                    </div> 
                  </div>                             
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Giá sản phẩm</label>
                    <div class="col-md-4">
                      @if ($errors->has('Giasanpham'))
                          <span class="text-danger">{{ $errors->first('Giasanpham') }}</span>
                      @endif
                      <input type="text" class="form-control" name="Giasanpham" id="inputEmail3" placeholder="VND">
                    </div> 
                    <label class="col-md-2 control-lab">Đơn vị:</label>
                    <div class="col-md-3">
                      <select id="enterprise" class="Unit" name="cdDonvi" onchange="document.getElementById('price3').innerHTML='$'+this.value">
                        <option>Kilogram</option>
                        <option>Trái</option>   
                        <option>Gram</option>                   
                      </select>                                              
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-lab">Miêu tả sản phẩm</label>
                    <div class="col-md-9">
                      @if ($errors->has('mieutasanpham'))
                          <span class="text-danger">{{ $errors->first('mieutasanpham') }}</span>
                      @endif
                      <textarea type="text" class="form-control" name="mieutasanpham" rows="5" placeholder="Nhập thông tin miêu tả sản phẩm."></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                    </div>
                  </div>
                  </form>
                  <div class="form-group">
                    <div class="input-group">
                        <button id="dangsanpham" class="button_search" type="submit">Đăng sản phẩm</button>
                    </div>
                  </div>
                
            </div>
       </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){

              $("#dangsanpham").click(function(){
                   $(".quickview-wrapper").show();
              });


              $("#btnaccept").click(function(){
                    $("#formAdd").submit();
              });
                 

      });

</script>
<script type="text/javascript" src="{!!url("resources/assets/js/message.js")!!}"></script>
@endsection