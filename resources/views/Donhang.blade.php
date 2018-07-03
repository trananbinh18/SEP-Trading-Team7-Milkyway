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
                            <li><img src="resources/assets/images/icon-choose-2.png" alt=""><a href="{{route('HistoryOrders')}}" title="Sửa thông tin">Lịch sử mua hàng</a></li>
                            <li><img src="resources/assets/images/icon-choose-2.png" alt=""><a href="{{route('Buyer_Infor')}}" title="Sửa thông tin">Sửa thông tin</a></li>
                            <li><img src="resources/assets/images/icon-choose-4.png" alt=""><a href="{{route('Buyer_Pass')}}" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
          </div>
<div class="col-md-8 table-product">
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2>Đơn Hàng</h2>
        </div>
        <div class="panel-body">
          <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Mã đơn hàng</th>
                  <th>Ngày mua</th>  
                  <th>Tổng tiền</th>
                  <th>Trạng thái đơn hàng</th>
                  <th>Tùy Chọn</th>
                </tr>
              </thead>           
                   @php ($count = 0)
                      @foreach($orders as $row)
                      <?php $count++ ?>
                      <tr>
                        <th><?php echo $count; ?></th>
                          <th><a href="{{ url('Ordersdetail',[$row->MAHD]) }}">{{$row -> SOHD}}</a></th>
                          <th>{{$row -> NLHD}}</th>
                          <th>{{$row -> TONGTIEN}}</th>
                          @if($row->TTHD == 0)
                          <th><?php echo 'Đang chờ tiếp nhận' ?></th>
                          @elseif($row -> TTHD == 1)
                          <th><?php echo 'Đang xử lí' ?></th>
                          @elseif($row -> TTHD == 2)
                          <th><?php echo 'Đang giao' ?></th>
                          @else($row -> TTHD == 3)
                          <th><?php echo 'Giao hàng thành công'?></th>
                          @endif
                          <th><span><a href="{{ url('Ordersdetail',[$row->MAHD]) }}"><i class="fas fa-info-circle"></i> Xem chi tiết</a></span> |
                              <span><a href="{{ url('QuickHideOrders',[$row->MAHD]) }}" id="hide"><i class="far fa-trash-alt"></i> Hủy đơn hàng</a></span>
                          </th>
                           
                      </tr>     
                      @endforeach                                      
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

        document.getElementById("defaultOpen").click();
    $(document).ready(function(){
        $("#hide").click(function(){
            $(".hideOrders").show();
            $("#btnaccetHide").click(function(){
                $("#hide").submit();
            });
        });
      </script>

@endsection