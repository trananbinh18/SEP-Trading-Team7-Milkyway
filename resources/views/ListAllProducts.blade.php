 @extends ('layout.master')
 @section(' title ')
 Danh Sách Sản Phẩm
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
          <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('Account_Seller')}}" title="Danh sách sản phẩm">Danh Sách Người Bán</a></li>
          <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="{{route('Account_Buyer')}}" title="Danh sách sản phẩm">Danh Sách Người Mua</a></li>
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
          <h2>Danh sách sản phẩm</h2>
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
                  <th>GCN</th>
                  <th>Tùy chọn</th>
                </tr>
              </thead>
              <tbody>            
                   @php ($count = 0)
                    @foreach($sanpham as $row)
                    <?php $count++; ?>
                  <tr class="odd gradeX">
                    <td><?php echo $count; ?></td>
                    <td>{{$row->TENLOAISP}}</td>
                    <td>{{$row->TENSP}}</td>
                    <td>{{$row->SOLUONG}} {{$row->DONVI}}</td>
                    <td>{{number_format($row->GIA) }}</td>
                    <td> 
                        @if($row->TRANGTHAI == 0)
                        <a href="{{ url('unapprovedProducts',[$row->MASP]) }}"><?php echo "chưa duyệt" ?></a>
                        @elseif($row -> TRANGTHAI == 1)
                        <?php echo "đã duyệt" ?>
                        @else($row -> TRANGTHAI == 2)
                        <?php echo "đã ẩn" ?> 
                      </td>
                        @endif
                    <td><img src="resources/assets/images/products/<?php echo $row->HINH ?>" alt="<?php echo $row->HINH ?>" width="60" , height="60"></td>
                    <td><img src="resources/assets/images/Certificate/<?php echo $row->GCN ?>" alt="<?php echo $row->GCN ?>" width="60" , height="60"></td>
                    <td class="center">
                      <a href="{{ url('ChangeStatus',[$row->MASP]) }}">Sửa<span  aria-hidden="true"></span></a> </td>
                  </tr>
                  @endforeach                                           
                </tbody>
              </table>

               <!-- <a href="#"><button class="link-v1 rt" >Đăng Sản Phẩm</button></a> -->
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

<!-- jQuery -->
<script type="text/javascript" src="{!!url("resources/assets/js/message.js")!!}"></script>
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
      responsive: true,
      paging: false,
      searching: false,
    });
  });
</script>
@endsection