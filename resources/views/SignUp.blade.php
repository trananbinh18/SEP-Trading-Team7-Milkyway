@extends ('layout.master')
@section(' title ')
Đăng Kí
@stop 
@section('content') 
<link rel="stylesheet" href="resources/assets/css/style_signup.css">
<div class="container">
    <div class="banner-header banner-lbook3 space-30">
        <img src="resources/assets/images/banner-product-checkout.jpg" alt="Banner-header">
        <div class="text">
            <h3>Đăng kí</h3>
            <p><a href="#" title="Home">TRANG CHỦ</a><i class="fa fa-caret-right"></i>Đăng kí</p>
        </div>
    </div>
</div>
<!-- End banner -->
<div style="padding-left: 400px;">
    <button class="tablink" onclick="openPage('Seller', this, '#d0d8cb')">Người Bán</button>
    <button class="tablink" onclick="openPage('Buyer', this, '#d0d8cb')" id="defaultOpen">Người Mua</button>
</div>
<div id="Buyer" class="tabcontent">
   <div class="container container-ver2">
        <div class="page-seller">
            <div class="container container-ver2">
                <div class="content-text space-50">
                    <div class="row">
                        <div class="center">
                            <h2>ĐĂNG KÝ</h2>
                            <p>Tạo tài khoản của riêng bạn!</p>
                        </div>
                        <form class="form-horizontal"action="{{route('SignUp')}}" method="POST">
                            <div class="col-md-6 space-50" id="bodyinput">
                                <div class="form-group signupseller">
                                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                                   <label for="inputname" class="col-md-4 control-lab">Họ và tên(*);</label>
                                   <div class="col-md-8">
                                    <input type="text" class="form-control" name="name" id="inputname" placeholder="Nhập Họ và tên" required>
                                </div>
                                </div>
                                <div class="form-group signupseller">
                                    <label for="inpuphone" class="col-md-4 control-lab">Số điện thoại(*);</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="phone" id="inputphone" placeholder="Nhập số điện thoại" required>
                                    </div>
                                </div>
                                <div class="form-group signupseller">
                                    <label for="inputEmail3" class="col-md-4 control-lab">Email(*);</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="email" id="inputemail" placeholder="Nhập Email" required>
                                    </div> 
                                </div>
                                <div class="form-group signupseller">
                                    <label for="inputpass" class="col-md-4 control-lab">Mật khẩu(*);</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password" id="inputpass" placeholder="Nhập mậtkhẩu" required>
                                    </div>
                                </div>
                            </div> 
                            <!--end cột trái đăng kí ng bán-->
                            <div class="col-md-6 space-50">
                                <div class="form-group signupseller">
                                    <label for="inputaddress" class="col-md-4 control-lab">Địa chỉ(*);</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="number_house" id="inputaddress" placeholder="Nhập địa chỉ" required>
                                    </div>
                                </div>
                                <div class="form-group signupseller">
                                    <label for="inputaddress" class="col-md-4 control-lab">Phường xã(*);</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="ward" id="inputaddress" placeholder="Nhập Phường xã" required>
                                    </div>
                                </div>
                                <div class="form-group signupseller">
                                    <label for="inputaddress" class="col-md-4 control-lab">Quận huyện(*);</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="district" id="inputaddress" placeholder="Nhập Quận Huyện" required>
                                    </div>
                                </div>
                                <div class="form-group signupseller">
                                    <label for="inputaddress" class="col-md-4 control-lab">Tỉnh/Thành phố(*);</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="city" id="inputaddress" placeholder="Nhập Tỉnh/Thành phố" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 center">
                                <a href="#"><button type="submit" class="link-v1 rt">Đăng Kí</button></a>
                            </div></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End register buyer -->  
<div id="Seller" class="tabcontent">
   <div class="container container-ver2">
    <div class="page-seller">
        <div class="container container-ver2">
            <div class="content-text space-50">
                <div class="row">
                    <div class="center">
                        <h2>ĐĂNG KÝ</h2>
                        <p>Tạo tài khoản của riêng bạn!</p>
                    </div>
                    <form class="form-horizontal" action="{{route('SignUp')}}" method="POST" enctype="multipart/form-data" role="form">
                        <div class="col-md-6 space-50" id="bodyinput">
                            <div class="form-group signupseller">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                               <label for="inputname" class="col-md-4 control-lab">Họ và tên(*);</label>
                               <div class="col-md-8">
                                    <input type="text" class="form-control" name="name" id="inputname" placeholder="Nhập Họ và tên" required>
                                </div>
                            </div>
                            <div class="form-group signupseller">
                                <label for="inpuphone" class="col-md-4 control-lab">Số điện thoại(*);</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="phone" id="inputphone" placeholder="Nhập số điện thoại" required>
                                </div>
                            </div>
                            <div class="form-group signupseller">
                                <label for="inputEmail3" class="col-md-4 control-lab">Email(*);</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="email" id="inputemail" placeholder="Nhập Email" required>
                                </div>
                            </div>
                            <div class="form-group signupseller">
                                <label for="inputpass" class="col-md-4 control-lab">Mật khẩu(*);</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="password" id="inputpass" placeholder="Nhập mậtkhẩu" required>
                                </div>
                            </div>
                            <div class="form-group signupseller">
                                <label for="inpuimgGPKD" class="col-md-4 control-lab">Giấy Phép Kinh Doanh(*)</label>
                                <div class="row">
                                    <div class="form-group col-md-3 img12"  >
                                        <div class="img-picker">
                                            <div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" class="imgin" name="image" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div> <!--end cột trái đăng kí ng bán-->
                    <div class="col-md-6 space-50">
                        <div class="form-group signupseller">
                            <label for="inputaddress" class="col-md-4 control-lab">Địa chỉ(*);</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="number_house" id="inputaddress" placeholder="Nhập địa chỉ">
                            </div>
                        </div>

                        <div class="form-group signupseller">
                            <label for="inputaddress" class="col-md-4 control-lab">Phường xã(*);</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="ward" id="inputaddress" placeholder="Nhập Phường xã">
                            </div>
                        </div>

                        <div class="form-group signupseller">
                            <label for="inputaddress" class="col-md-4 control-lab">Quận huyện(*);</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="district" id="inputaddress" placeholder="Nhập Quận Huyện">
                            </div>
                        </div>

                        <div class="form-group signupseller">
                            <label for="inputaddress" class="col-md-4 control-lab">Tĩnh/Thành phố(*);</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="city" id="inputaddress" placeholder="Nhập Tĩnh/Thành phố">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 center">

                        <a href="#"><button type="submit" class="link-v1 rt">Đăng Kí</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>
    function openPage(pageName,elmnt,color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;

    }
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
@stop
