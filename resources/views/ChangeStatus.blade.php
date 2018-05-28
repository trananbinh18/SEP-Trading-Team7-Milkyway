 <!DOCTYPE html>
 
@extends('layout.master')
 @section('content')  
       <div>
         <div class="row Ttttk">
            <div class="col-md-3 LTtttk">
                <p> </p>
                <h3>Trạng Thái</h3>
            </div>
            <div class="col-md-9 RTtttk">       
                <h2>Danh sách sản phẩm</h2>
            </div>
         </div>
         <br>
         <div class="row Btttk">
           <div class="col-md-3 LBtttk">
             <p><a style="color: black" href="" >Thay đổi trạng thái sản phẩm</a></p>
           </div>
           <form class="form-horizontal" action="{{route('ChangeStatus')}}" role="form" method="POST">
  
           <div class="col-md-5 ">
              <div class="form-group">
                 @if(session('thongbao')) 
              <div class="alert-success">
                {{session('thongbao')}}
              </div>
                 @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <input type="hidden" name="MASP" value="<?php echo "{$status['MASP']}";?>">
                <label class="control-label" for="full_name">Trạng thái</label>
                <div class="input-wrap">
                  <input type="text" class="form-control" value="<?php echo "{$status['TRANGTHAI']}"; ?>" placeholder="trạng thái" name="status">
                  <span class="help-block"></span>
                </div>
              </div>
             <div>
                 <a href="{{route('listprosale')}}"><button type="button" class="btn btn-success">Quay lại</button></a>
                 <span><button type="submit" class="btn btn-success">Cập nhập</button></span>
              </div>
            </div>
            </form>
         </div> 
       </div>
@endsection