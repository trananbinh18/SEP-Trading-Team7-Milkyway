@extends ('layout.master')
  @section(' title ')
  Danh sách sản phẩm người bán
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
                  <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('listpro')}}" title="Sản phẩm chờ duyệt">Sản phẩm chờ duyệt</a><span class="badge">{{count($products)}}
                  </span></li>
                  <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('ListApproved')}}" title="Sản phẩm đã duyệt">Sản phẩm đã duyệt</a><span class="badge"><?php echo $countApproveproduct; ?></span></li>
                  <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('ListHide')}}" title="Sản phẩm đã ẩn">Sản phẩm đã ẩn</a><span class="badge"><?php echo $countHideproduct; ?></span></li>
                  <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('ordersplaced')}}" title="Đơn hàng được đặt">Đơn hàng được đặt</a></li>
                  <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('Salerevenue')}}" title="Doanh số">Doanh số</a></li>
                  <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('historybuyproducts')}}" title="Lịch sử mua hàng">lịch sử bán hàng</a></li>
                  <li><img src="resources/assets/images/icon-choose-2.png" alt=""><a href="{{route('Seller_Infor')}}" title="Sửa thông tin">Sửa thông tin</a></li>
                  <li><img src="resources/assets/images/icon-choose-4.png" alt=""><a href="{{route('Seller_Pass')}}"" title="Đổi mật khẩu">Đổi mật khẩu</a></li> 
                </ul>
              </div>
            </aside>
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
              <p>Bạn có đồng ý ẩn sản phẩm ?</p>
              
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
      <div class="col-md-8 control-infotproduct box-shadow">
        @if(session()->get('status') == 1)
        <div class="col-md-12 table-product">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2>Sản Phẩm Chờ Duyệt</h2>
              </div>
              <div class="panel-body" style="font-size: 11px;">
                <div class="dataTable_wrapper">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    @if(session('thanhcong'))
                    <div class="alert-success">
                      {{session('thanhcong')}}
                    </div>
                    @endif
                    <thead>
                      <tr>         
                        <th>STT</th>
                        <th>Loại SP</th>
                        <th>Tên SP</th>
                        <th>Số lượng</th>                                                
                        <th>Giá</th>
                        <th>Trạng thái</th>
                        <th>Hình</th>
                        <th>GCN</th>
                        <th>Tùy chọn</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php ($count = 0)
                      @foreach($products as $row)
                      <tr class="odd gradeX">   
                          <?php $count++; ?>
                        <td><?php echo $count; ?></td>
                        <td>{{$row->TENLOAISP}}</td>
                        <td>{{$row->TENSP}}</td>
                        <td>{{$row->SOLUONG}} {{$row->DONVI}}</td>
                        <td>{{ number_format($row->GIA) }}</td>
                        <td> 
                          @if($row->TRANGTHAI == 0)
                          <?php echo "Chưa duyệt" ?>
                          @elseif($row -> TRANGTHAI == 1)
                          <?php echo "Đã duyệt" ?></td>
                          @endif
                        <td><img src="resources/assets/images/products/<?php echo $row->HINH ?>" alt="<?php echo $row->HINH; ?>" style="width:60px;height:60px"></td>
                        <td><img src="resources/assets/images/Certificate/<?php echo $row->GCN ?>" alt="<?php echo $row->GCN; ?>" style="width:60px;height:60px"></td>
                        <td class="center">
                          
                          <a class="linkAn" href="{{ url('QuickHideProduct',[$row->MASP]) }}">Ẩn<span aria-hidden="true"></span></a>
                          <span> | </span>
                          <a href="{{ url('Editproduct',[$row->MASP]) }}">Sửa<span  aria-hidden="true"></span></a> 
                        </td>
                      </tr>
                      @endforeach                                         
                    </tbody>
                  </table>
                  <a href="{{route('PostProduct')}}"><button class="link-v1 rt" >Đăng Sản Phẩm</button></a>
                </div>
                  <!-- /.table-responsive -->
              </div>
                <!-- /.panel-body -->
            </div>
              <!-- /.panel -->
          </div>
        <!-- /.col-lg-12 -->
        </div>
        @endif
        <div class="centerr">
          @if(session()->get('status') == 0)
            <h2>Tài khoản của bạn chưa được duyệt</h2>
            <p>Bạn vui lòng chờ chúng tôi duyệt tài khoản và bạn có thể sử dụng được các chức năng của website</p>
          @endif
      </div>
      </div>
  </div>
  <div id="back-to-top">
    <i class="fa fa-long-arrow-up"></i>
  </div>
  {{-- <!-- jQuery -->
  <script src="resources/assets/js/jquery.min.js"></script>
 --}}
  <!-- DataTables JavaScript -->
  <script src="resources/assets/js/dataTables/jquery.dataTables.min.js"></script>
  <script src="resources/assets/js/dataTables/dataTables.bootstrap.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="resources/assets/js/startmin.js"></script>
  <script type="text/javascript" src="{!!url("resources/assets/js/message.js")!!}"></script>

  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <script>
  $(document).ready(function() {
    // $('#dataTables-example').DataTable({
    //   responsive: true
    //   paging: false,
    //   searching: false
    // });

    $(".linkAn").click(function(){
      $(".quickview-wrapper").show();
      var url = this.getAttribute('href');
      $("#btnaccept").click(function(){
        window.location.href = url;
      });
      return false;
    });

      
  });
  </script>

  @endsection