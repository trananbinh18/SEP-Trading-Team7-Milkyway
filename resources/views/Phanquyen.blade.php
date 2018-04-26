 <!DOCTYPE html>
 
@extends('layout.master')
 @section('content')  
       <div>
         <div class="row Ttttk">
            <div class="col-md-3 LTtttk">
                <p> </p>
                <h3>ADMIN</h3>
            </div>
            <div class="col-md-9 RTtttk">       
                <h2>Phân quyền tài khoản</h2>
            </div>
         </div>
         <br>
         <div class="row Btttk">
           <div class="col-md-3 LBtttk">
             <p><a style="color: black" href="" >Phân Quyền tài khoản</a></p>
           </div>

           <div class="col-md-5 ">
              <div class="form-group">
                <label class="control-label" for="full_name">tên tài khoản </label>
                <div class="input-wrap">
                  <input type="text" class="form-control" value="" placeholder="tên tài khoản">
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="form-group gender-select-wrap" id="register_name">
                <label class="control-label" for="pasword">Chọn Quyền</label>
                <div class="input-wrap">
                  <div class="row">
                    <div class="col-xs-3">
                     <label>
                      <input type="radio" name="gender" value="on" id="gender_male" class="gender">
                      <span>
                       <i class="ico"></i>
                     </span>
                     Seller

                   </label>

                 </div>
                 <div class="col-xs-3">
                   <label>

                    <input type="radio" name="gender" value="off" id="gender_female" class="gender" checked="">
                    <span>
                     <i class="ico"></i>
                   </span>
                   Kế Toán
                 </label>

               </div>
               <div class="col-xs-3">
                     <label>
                      <input type="radio" name="gender" value="on" id="gender_male" class="gender">
                      <span>
                       <i class="ico"></i>
                     </span>
                     Kỹ thuật

                   </label>

                 </div>
             </div>
           </div>
         </div>
         <div>
                 <button style="margin-left: 40%;" type="button" class="btn btn-success">Cập nhập</button>
              </div>
            </div>
            
         </div> 
       </div>
@endsection