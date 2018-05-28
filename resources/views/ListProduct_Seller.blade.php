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
                <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{route('listpro')}}" title="">Danh sách sản phẩm</a></li>
                <li><img src="resources/assets/images/icon-choose-2.png" alt=""><a href="{{route('Seller_Infor')}}" title="Sửa thông tin">Sửa thông tin</a></li>
                <li><img src="resources/assets/images/icon-choose-4.png" alt=""><a href="{{route('Seller_Pass')}}"" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
              </ul>
            </div>
          </aside>
        </div>
    </div>
    <div class="col-md-8 control-infotproduct box-shadow">
      @if(session()->get('status') == 1)
      <div class="col-md-12 table-product">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              Danh sách sản phẩm
            </div>
            <div class="panel-body" style="font-size: 11px;">
              <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>         
                      <th>STT</th>
                      <th>Loại SP</th>
                      <th>Tên SP</th>
                      <th>Số lượng</th>                                                
                      <th>Giá</th>
                      <th>Trạng thái</th>
                      <th>Hình</th>
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
                      <td>{{$row->TRANGTHAI}}</td>
                      <td><img src="resources/assets/images/products/<?php echo $row->HINH ?>" alt="<?php echo $row->HINH; ?>" style="width:60px;height:60px"></td>
                      <td class="center">
                        <a href="#">Xóa<span aria-hidden="true"></span></a>
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