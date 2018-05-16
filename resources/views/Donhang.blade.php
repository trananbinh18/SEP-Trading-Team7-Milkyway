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
                         <h3>Thông tin khách hàng</h3>
                          <i class="fa fa-chevron-circle-down icon-click"></i>
                          <ul class="menu-vertical">
                              <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="#" title="Đơn hàng">Đơn hàng</a></li>
                              <li><img src="resources/assets/images/icon-categories-8.png" alt=""><a href="{{route('editInf')}}" title="Sửa thông tin">Sửa thông tin</a></li>
                              <li><img src="resources/assets/images/icon-categories-8.png" alt=""><a href="{{route('resetpass')}}" title="Đổi mật khẩu">Đổi mật khẩu</a></li>
                          </ul>
                      </div>
                  </aside>
              </div>
            </div>
            <div class="col-md-8 control-infotproduct box-shadow">
                <form class="form-horizontal"  method="POST">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ngày mua</th>
                            <th>Sản phẩm</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái đơn hàng</th>
                        </tr>
                    </table>
                </form>
            </div>
       </div>
@endsection