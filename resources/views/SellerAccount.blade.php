 @extends ('layout.master')
 @section(' title ')
 Danh sách tài khoản
 @stop

 @section('content')
 <div class="row" style="margin-bottom: 200px">
  <div class="col-md-3 box-shadow control-infotproduct">
    <div>
      <aside class="widget widget_product_categories" style="padding-left: 10px;">
        <div class="categories-home3">
         <h3>TRANG NHÂN VIÊN </h3>
         <i class="fa fa-chevron-circle-down icon-click"></i>
         <ul class="menu-vertical">
          <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('Account_Seller')}}" title="Danh sách sản phẩm">Tài Khoản Người Bán</a></li>
          <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('Account_Buyer')}}" title="Danh sách sản phẩm">Tài Khoản Người Mua</a></li>
          <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('listprosale')}}" title="Doanh số">Danh Sách Sản Phẩm</a></li>
          <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('Salerevenueemployee')}}" title="Doanh số">Doanh Thu</a></li>
          <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('ResetPassword')}}" title="Doanh số">Đổi Mật Khẩu</a></li>
        </ul>
      </div>

    </div>
  </aside>    
</div>

<div class="col-md-8 table-product">
  <div class="row">
      @if(session('thanhcong'))
        <div class="alert-success">
          {{session('thanhcong')}}
        </div>
      @endif
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Danh sách tài khoản người bán
        </div>
        <div class="panel-body" style="font-size: 11px;">
          <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>         
                  <th>STT</th>
                  <th>Tên người bán</th>
                  <th>Số điện thoại</th>
                  <th>Email</th>                                      
                  <th>Trạng Thái</th>                                      
                  <th>Tùy chọn</th>
                </tr>
              </thead>
              <tbody>

                <tr class="odd gradeX">
                  @php ($count = 0)
                  @foreach($account as $row)
                  <?php $count++ ?>
                  <td><?php echo $count; ?></td>
                  <td> {{ $row->TENNB}}</td>
                  <td>{{ $row->SDT}}</td>
                  <td>{{ $row->EMAIL}}</td>
                  <td>@if($row -> TTNB == 0) 
                      <a href="{{ url('changeStatusforSeller', [$row->MANB]) }}"><?php echo "Chưa duyệt"?></a>
                      @elseif($row->TTNB == 1) <?php echo "Đã duyệt"?>
                      @endif
                  </td>
                  <td class="center">
                    <a href="{{ url('EditSeller',[$row->MANB]) }}">Sửa<span  aria-hidden="true"></span></a> </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>

              <!--  <a href="#"><button class="link-v1 rt" ></button></a> -->
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
<script type="text/javascript" src="{!!url("resources/assets/js/message.js")!!}"></script>

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