 @extends ('layout.master')
 @section(' title ')
 Đơn hàng
 @stop

 @section('content')
 <div class="row" style="margin-bottom: 200px">
  <div class="col-md-3 box-shadow control-infotproduct">
    <div>
      <aside class="widget widget_product_categories" style="padding-left: 10px;">
        <div class="categories-home3">
         <h3>Thông tin tài khoản </h3>
         <i class="fa fa-chevron-circle-down icon-click"></i>
         <ul class="menu-vertical">
          <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="" title="Danh sách sản phẩm">Đơn Hàng</a></li>
        </ul>
      </div>
    </div>
  </aside>    
</div>

<div class="col-md-8 table-product">
  <div class="row">
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
                  <th>Tên Sản Phẩm</th>                                               
                  <th>Số lượng</th>
                  <th>Giảm giá</th>
                  <th>Thành Tiền</th>
                </tr>
              </thead>
              <tbody>
                @php ($count = 0)
                @foreach($sanpham as $row)  
                <tr class="odd gradeX">
                  <?php $count ++ ?>
                  <td><?php echo $count; ?></td>
                  <td>{{$row->TENSP}}</td>
                  <td>{{$row->SLUONG}} {{$row->DONVI}}</td>
                  <td>{{$row->GIAMGIA}}</td>
                  <td>{{$row->THANHTIEN}}</td>
                </tr>
                @endforeach                            
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->

        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
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