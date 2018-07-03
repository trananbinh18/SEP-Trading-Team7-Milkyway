@extends('layout.master')
      @section (' title ')
      Đơn hàng đã được đặt
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
                            <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('listpro')}}" title="">Sản phẩm chờ duyệt</a><span class="badge"><?php echo $countUnapprovedproduct; ?></span></li>
                            <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('ListApproved')}}" title="">Sản phẩm đã duyệt</a><span class="badge"><?php echo $countApproveproduct; ?></span></li>
                            <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('ListHide')}}" title="">Sản phẩm đã ẩn</a><span class="badge"><?php echo $countHideproduct; ?></span></li>
                            <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="#" title="Đơn hàng được đặt">Đơn hàng được đặt</a></li>
                            <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('Salerevenue')}}" title="Doanh số">Doanh số</a></li>
                            <li><img src="{!!url("resources/assets/images/icon-categories-7.jpg") !!}" alt=""><a href="{{route('historybuyproducts')}}" title="Lịch sử bán hàng">Lịch sử bán hàng</a></li>
                            <li><img src="resources/assets/images/icon-choose-2.png" alt=""><a href="{{route('Seller_Infor')}}" title="Sửa thông tin">Sửa thông tin</a></li>
                            <li><img src="resources/assets/images/icon-choose-4.png" alt=""><a href="{{route('Seller_Pass')}}"" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
          </div>
          <div class="col-md-8 control-infotproduct box-shadow">
            @if(isset($thongbao))
                  <div class="alert-success">
                     Bạn đã xác nhận đơn hàng thành công
                  </div>
            @endif
              <form class="form-horizontal"  method="POST">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <tr>
                        <th>STT</th>  
                        <th>Tên sản phẩm</th>
                        <th>Ngày bán</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                        <th>Trạng thái hóa đơn</th>
                        <th>Tùy chọn</th>
                      </tr>
                      @php ($count = 0)
                      @foreach($Productsplaced as $row)
                      <?php $count++ ?>
                      <tr>
                        <th><?php echo $count; ?></th>
                          <th>{{$row -> TENSP}}</th>
                          <th>{{$row -> NLHD}}</th>
                          <th>{{$row -> SLUONG}}</th>
                          <th>{{$row -> DONGIA}}</th>
                          <th>{{$row -> THANHTIEN}}</th>
                          @if($row->TTHD == 0)
                          <th><?php echo 'Đơn hàng đã được đặt' ?></th>
                          @endif
                          <th>
                            <a class="linkAn" href="{{route('quickodersplaced',[$row->MAHD])}}">Xác nhận đơn hàng<span aria-hidden="true"></span></a>
                          </th>
                      </tr>     
                      @endforeach
                      
                  </table>
              </form>
          </div>
      </div>
        <!-- jQuery -->
      <script src="resources/assets/js/jquery.min.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="resources/assets/js/bootstrap.min.js"></script>

      <!-- Metis Menu Plugin JavaScript -->
      <script src="resources/assets/js/metisMenu.min.js"></script>

      <!-- DataTables JavaScript -->
      <script src="resources/assets/js/dataTables/jquery.dataTables.min.js"></script>
      <script src="resources/assets/js/dataTables/dataTables.bootstrap.min.js"></script>

      <!-- Custom Theme JavaScript -->
      <script src="resources/assets/js/startmin.js"></script>

      <!-- Page-Level Demo Scripts - Tables - Use for reference -->
      <script>
        $(document).ready(function() {
          $('#dataTables-example').DataTable({
            responsive: true
            paging: false,
            searching: false
          });
        });
      </script>

@endsection