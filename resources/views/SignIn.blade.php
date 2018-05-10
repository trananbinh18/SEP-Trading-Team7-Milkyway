 @extends ('layout.master')
@section(' title ')
    Đăng Nhập
@stop

 @section('content') 
 <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="container">
            <div class="banner-header banner-lbook3 space-30">
                <img src="resources/assets/images/banner-product-checkout.jpg" alt="Banner-header">
                <div class="text">
                    <h3>Đăng nhập</h3>
                    <p><a href="{{action('ControllerHome@home')}}" title="Home">TRANG CHỦ</a><i class="fa fa-caret-right"></i>Đăng nhập</p>
                </div>
            </div>
        </div>
        <!-- End banner -->
        <div class="container container-ver2">
            <div class="page-login box space-100">
                <div class="row">
                    <div class="col-sm-3 sign-in space-80">
                        
                        <!-- End form -->
                    </div>
                    <!-- End col-sm-3 -->
                    <div class="col-sm-6 sign-in space-80">
                        <h3>Đăng nhập</h3>
                        <p>Xin chào, Mời bạn đăng nhập</p>
                        {{ $error or ''}}
                        <form class="form-horizontal" action="{{route('login')}}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="group box space-20">
                                <label class="control-label" for="inputemail" >Email *</label>
                                <input class="form-control" type="text" placeholder="Your email" id="inputemail" name="email">
                            </div>
                            <div class="group box">
                                <label class="control-label" for="inputpass" >Mật Khẩu *</label>
                                <input class="form-control" type="Password" placeholder="Password" id="inputpass"
                                name="matkhau"> 
                            </div>
                            <div class="remember">
                                <input id="remeber" type="checkbox" name="check" value="remeber">
                                <label for="remeber" class="label-check">Lưu Nhớ!</label>
                                <a class="help" href="#" title="help ?">Quên mật khẩu?</a>   
                            </div>           
                            <button type="submit" class="link-v1 rt" >Đăng Nhập</button>
                        </form>
                        <!-- End form -->
                    </div>
                    <!-- End col-sm-6 -->
                    
                    <div class="col-sm-3 sign-in space-80">
                       
                    </div>
                    <!-- End col-sm-3 -->
                </div>
            </div>
        </div>
      @stop
