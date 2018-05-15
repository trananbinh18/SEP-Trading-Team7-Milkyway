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
    <div class="page-faq">
        <div class="container container-ver2">
            <div class="content-text space-50">
                <div class="row">
                    <div style="padding-left: 500px;">
                        <h3>Đăng kí</h3>
                        <p>Tạo tài khoản của riêng bạn!</p>
                        <br>
                    </div>
                    <div class="col-md-6 space-50">
                        <div class="group box space-20">
                            <label class="control-label" for="inputname">Họ và Tên *</label>
                            <input class="form-control" type="text" placeholder="Họ và Tên" id="inputemailres" name="name">
                        </div>

                        <div class="group box space-20">
                            <label class="control-label" for="inputphone">Số điện thoại *</label>
                            <input class="form-control" type="text" placeholder="Số điện thoại" id="inputemailres" name="phone">
                        </div>
                        <div class="group box space-20">
                            <label class="control-label" for="inputemailres">Email *</label>
                            <input class="form-control" type="text" placeholder="Your email" id="inputemailres" name="email">
                        </div>
                        <div class="group box">
                            <label class="control-label" for="inputpass">Mật Khẩu *</label>
                            <input class="form-control" type="Password" placeholder="Password" id="inputpass" name="password"> 
                        </div>
                    </div>
                    <div class="col-md-6 space-50">
                        <div class="group box space-20">
                            <label class="control-label" for="inputaddress">Số nhà *</label>
                            <input class="form-control" type="text" placeholder="Số Nhà" id="inputemailres" name="number_house">
                        </div>

                        <div class="group box space-20">
                            <label class="control-label" for="inputaddress">Phường *</label>
                            <input class="form-control" type="text" placeholder="Phường" id="inputemailres" name="ward">
                        </div>

                        <div class="group box space-20">
                            <label class="control-label" for="inputaddress">Quận *</label>
                            <input class="form-control" type="text" placeholder="Quận" id="inputemailres" name="district">
                        </div>

                        <div class="group box space-20">
                            <label class="control-label" for="inputaddress">Thành phố *</label>
                            <input class="form-control" type="text" placeholder="Thành Phố" id="inputemailres" name="city">
                        </div>
                    </div>
                    <div style="padding-left: 500px;">
                        <br>
                        <a href="#"><button type="submit" class="link-v1 rt">Đăng Kí</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End register -->  
<div id="Seller" class="tabcontent">
 <div class="container container-ver2">
    <div class="page-faq">
        <div class="container container-ver2">
            <div class="content-text space-50">
                <div class="row">
                    <div style="padding-left: 500px;">
                        <h3>Đăng kí</h3>
                        <p>Tạo tài khoản của riêng bạn!</p>
                    </div>
                    <div class="col-md-6 space-50">
                        <div class="form-group signupseller">
                            <label for="inputname" class="col-md-4 control-lab">Họ và tên(*);</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" id="inputname" placeholder="Nhập Họ và tên">
                            </div>
                        </div>
                        <div class="form-group signupseller">
                            <label for="inpuphone" class="col-md-4 control-lab">Số điện thoại(*);</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="phone" id="inputphone" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                        <div class="form-group signupseller">
                            <label for="inputEmail3" class="col-md-4 control-lab">Email(*);</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" id="inputemail" placeholder="Nhập Email">
                            </div>
                        </div>
                        <div class="form-group signupseller">
                            <label for="inputpass" class="col-md-4 control-lab">Mật khẩu(*);</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" name="name" id="inputpass" placeholder="Nhập mậtkhẩu">
                            </div>
                        </div>
                        <div class="form-group signupseller">
                            <label for="inpuimgGPKD" class="col-md-4 control-lab">Giấy Phép Kinh Doanh(*)</label>
                            <div class="row" style="width: 100%;">
                                <div class="form-group col-md-3 img12"  >
                                    <div class="img-picker">
                                        <div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" class="imgin" name="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div> <!--end cột trái đăng kí ng bán-->
<div class="col-md-6 space-50">
    <div class="group box space-20">
        <label class="control-label" for="inputaddress">Số nhà *</label>
        <input class="form-control" type="text" placeholder="Số Nhà" id="inputemailres" name="number_house">
    </div>

    <div class="group box space-20">
        <label class="control-label" for="inputaddress">Phường *</label>
        <input class="form-control" type="text" placeholder="Phường" id="inputemailres" name="ward">
    </div>

    <div class="group box space-20">
        <label class="control-label" for="inputaddress">Quận *</label>
        <input class="form-control" type="text" placeholder="Quận" id="inputemailres" name="district">
    </div>

    <div class="group box space-20">
        <label class="control-label" for="inputaddress">Thành phố *</label>
        <input class="form-control" type="text" placeholder="Thành Phố" id="inputemailres" name="city">
    </div>
</div>
<div>
    <br>
    <a href="#"><button type="submit" class="link-v1 rt">Đăng Kí</button></a>
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
