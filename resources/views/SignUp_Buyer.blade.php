 @extends ('layout.master')
@section(' title ')
    Đăng Kí
@stop

 @section('content') 
        <div class="container">
            <div class="banner-header banner-lbook3 space-30">
                <img src="resources/assets/images/banner-product-checkout.jpg" alt="Banner-header">
                <div class="text">
                    <h3>Đăng nhập/Đăng kí</h3>
                    <p><a href="#" title="Home">TRANG CHỦ</a><i class="fa fa-caret-right"></i>Đăng nhập/Đăng kí</p>
                </div>
            </div>
        </div>
        <!-- End banner -->
        <div class="container container-ver2">
            <div class="page-login box space-50">
                <div class="row">
                    <div class="col-md-6 sign-in space-30">
                        <h3>Đăng nhập</h3>
                        <p>Xin chào, Mời bạn đăng nhập</p>
                        <form class="form-horizontal" method="POST">
                            <div class="group box space-20">
                                <label class="control-label" for="inputemail">Email *</label>
                                <input class="form-control" type="text" placeholder="Your email" id="inputemail">
                            </div>
                            <div class="group box">
                                <label class="control-label" for="inputpass">Mật Khẩu *</label>
                                <input class="form-control" type="text" placeholder="Password" id="inputpass"> 
                            </div>
                            <div class="remember">
                                <input id="remeber" type="checkbox" name="check" value="remeber">
                                <label for="remeber" class="label-check">Lưu Nhớ!</label>
                                <a class="help" href="#" title="help ?">Quên mật khẩu?</a>   
                            </div>           
                            <button type="submit" class="link-v1 rt">Đăng Nhập</button>
                        </form>
                        <!-- End form -->
                    </div>
                    <!-- End col-md-6 -->
                    <div class="col-md-6">
                        <div class="register box space-50">
                            <h3>Tạo Tài Khoản mới</h3>
                            <p>Tạo tài khoản của riêng bạn</p>
                            <form class="form-horizontal" method="POST">
                                <div class="group box space-20">
                                    <label class="control-label" for="inputname">Họ và Tên *</label>
                                    <input class="form-control" type="text" placeholder="Họ và Tên" id="inputemailres">
                                </div>

                                <div class="group box space-20">
                                    <label class="control-label" for="inputphone">Số điện thoại *</label>
                                    <input class="form-control" type="text" placeholder="Số điện thoại" id="inputemailres">
                                </div>

                                <div class="group box space-20">
                                    <label class="control-label" for="inputaddress">Địa Chỉ *</label>
                                    <input class="form-control" type="text" placeholder="Địa Chỉ" id="inputemailres">
                                </div>

                                <div class="group box space-20">
                                    <label class="control-label" for="inputemailres">Email *</label>
                                    <input class="form-control" type="text" placeholder="Your email" id="inputemailres">
                                </div>
                                 <div class="group box">
                                <label class="control-label" for="inputpass">Mật Khẩu *</label>
                                <input class="form-control" type="Password" placeholder="Password" id="inputpass"> 
                            </div>
                            <div>
                                <br>
                                <a href="{{action('Controller@home')}}"><button type="submit" class="link-v1 rt">Đăng Kí</button></a>
                            </div>
                                
                            </form>
                        </div>
                        <!-- End register -->
                        <div class="sigg-to-day box">
                            <h3>Hãy đăng kí ngay hôm nay</h3>
                            <form class="form-horizontal" method="POST">
                                <div class="checkbox">
                                    <input id="check1" type="checkbox" name="check" value="check1">
                                    <label class="label-check" for="check1">Tốc độ theo cách của bạn thông qua thanh toán.</label>
                                    <input id="check2" type="checkbox" name="check" value="check2">
                                    <label class="label-check" for="check2">Theo dõi đơn hàng của bạn một cách dễ dàng.</label>
                                    <input id="check3" type="checkbox" name="check" value="check3">
                                    <label class="label-check" for="check3">Giữ một bản ghi của tất cả các lần mua hàng.</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End col-md-6 -->
                </div>
            </div>
        </div>
      @stop
