    @extends('layout.master')
    @section (' title ')
    Trạng thái
    @stop
    @section('content')
    <div class="row row-addproduct">
      <div class="col-md-3 box-shadow control-infotproduct">
        <div>
          <aside class="widget widget_product_categories" style="padding-left: 10px;">
            <div class="categories-home3">
             <h3>TRẠNG THÁI</h3>
             <i class="fa fa-chevron-circle-down icon-click"></i>
             <ul class="menu-vertical">
               <li><img src="resources/assets/images/icon-choose-5.png" alt=""><a href="">Trạng thái sản phẩm</a></li>
             </ul>
           </div>
         </aside>
       </div>
     </div>
     <div class="col-md-8 control-infotproduct box-shadow">
      @if(session('thongbao'))
      <div class="alert-success">
        {{session('thongbao')}}
      </div>
      @endif
      <div class="page">
        <div class="container container-ver2">
          <div class="content-text space-50">

            <form class="form-horizontal" role="form" action="{{route('ChangeStatus')}}" method="POST">
             <div class="col-md-8 space-80" id="bodyinput">
              <div class="center">
                <h2>DUYỆT SẢN PHẨM</h2>
              </div>
              <div class="form-group signupseller">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MASP" value="<?php echo "{$status['MASP']}";?>">
                <label for="" class="col-md-3 control-lab">Trạng thái</label>
                <div class="col-md-2">
                  <input type="text" class="form-control" value="<?php echo "{$status['TRANGTHAI']}"; ?>" placeholder="trạng thái" name="status">
                </div>
              </div>
              <div class="col-md-12 center">
                <div class="col-md-6">
                  <a href="{{route('listprosale')}}"><button type="button" class="link-v1 rt">Quay lại</button></a>
                </div>
                <div class="col-md-6">
                  <a href="#"><button type="submit" class="link-v1 rt">Cập nhật</button></a>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
    
  </div>
</div>
@endsection