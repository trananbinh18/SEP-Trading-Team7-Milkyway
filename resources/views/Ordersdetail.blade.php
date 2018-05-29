  @extends('layout.master')
      @section (' title ')
      Đơn hàng
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
                            <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('Orders')}}" title="Đơn hàng">Đơn hàng</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
          </div>
          <div class="col-md-8 control-infotproduct box-shadow">
            <div class="hoz-tab-container1 space-padding-tb-30">
                 <div id="product-tags1" class="tab-content1">
                  
                  <p>
                      <span>Tên Sản Phẩm :</span>
                      <span><a href="{{ url('Productdetail',[$hoadon->MASP]) }}"><?php echo "{$hoadon->sanpham['TENSP']}"; ?></a></span>
                    </p>
                    <p>
                      <span>Số lượng :</span>
                      <span><?php echo "{$hoadon['SOLUONG']}"; ?> <?php echo "{$hoadon->sanpham['DONVI']}"; ?></span>
                    </p>
                    <p>
                      <span>Giảm giá :</span>
                      <span><?php echo "{$hoadon['GIAMGIA']}"; ?></span>
                    </p>
                    <p>
                      <span>Thành Tiền :</span>
                      <span><?php echo "{$hoadon['THANHTIEN']}"; ?> VND</span>
                    </p>
                  </div>
                </div>  
           </div>
          </div>
      </div>
      <div id="back-to-top">
        <i class="fa fa-long-arrow-up"></i>
      </div>

@endsection