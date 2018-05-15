 <!DOCTYPE html>
 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" type="text/css" href="{!!url("resources/assets/css/bootstrap.css")!!}"/>
        <link rel="stylesheet" type="text/css" href="{!!url("resources/assets/css/style.css")!!}"/>
        <link rel="stylesheet" type="text/css" href="{!!url("resources/assets/css/general.css")!!}"/>
        <link rel="stylesheet" type="text/css" href="{!!url("resources/assets/vendor/owl-slider.css")!!}"/>
        <link rel="stylesheet" type="text/css" href="{!!url("resources/assets/vendor/settings.css")!!}"/>
        <link rel="shortcut icon" href="{!!url("resources/assets/images/favicon.png")!!}" />
        <link rel="stylesheet" type="text/css" href="{!!url("resources/assets/vendor/slick.css")!!}"/>
        <link rel="stylesheet" type="text/css" href="{!!url("resources/assets/vendor/settings.css")!!}"/>
        <link rel="stylesheet" type="text/css" href="{!!url("resources/assets/vendor/range-price.css")!!}"/>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300' rel='stylesheet' type='text/css'>
       

        <!-- MetisMenu CSS -->
        <link href="{!!url("resources/assets/css/metisMenu.min.css")!!}" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="{!!url("resources/assets/css/dataTables/dataTables.bootstrap.css")!!}" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="{!!url("resources/assets/css/dataTables/dataTables.responsive.css")!!}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{!!url("resources/assets/css/startmin.css")!!}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{!!url("resources/assets/css/font-awesome.min.css")!!}" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{!!url("resources/assets/js/jquery-3.2.0.min.js")!!}"></script>
        <title>@yield(' title ')</title>
        <meta name="description" content="@title('description')">
    </head>
    
    <body>
    <div class="awe-page-loading">
         <div class="awe-loading-wrapper">
            <div class="awe-loading-icon">
               <img src="{!!url("resources/assets/images/logo.png")!!}" alt="images">
            </div>
            <div class="progress">
               <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
         </div>
      </div> 
    
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content popup-search">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="modal-body">
                    <form class="input-group" method="get" action="{{route('search')}}">
                        <input type="text" class="form-control control-search" name="Timkiem" placeholder="Nhập tên rau, trái cây hay loại củ quả mà bạn muốn tìm kiếm...">
                        <button class="button_search" type="submit">Tìm kiếm</button>
                    </form>                        
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- End pushmenu -->
    <div class="wrappage">
        <!-- <div id="rtl">RTL</div> -->
        <header id="header" class="header-v3 header-v3-new">
            <!--End float-left-->
            <div class="right">
                <div id="topbar" class="topbar-ver2">
                    <div class="container container-ver2">
                        <a class="logo-header-v3" href="#" title="Logo-FreshFood"><img src="{!!url("resources/assets/images/logo-header3.png")!!}" alt="FreshFood"></a>
                        <div class="inner-topbar box">
                            <div class="float-left">
                                <p><img src="{!!url("resources/assets/images/icon-phone-header.png.png")!!}" alt="icon"> Gọi cho chúng tôi <span> 099-999-9999</span></p>
                            </div>
                            <div class="float-right align-right">
                                <div class="hover-menu">
                                    <a class="acc" href="#" title="USD"><img src="{!!url("resources/assets/images/icon-user-header.png")!!}" alt="icon">Tài khoản</a>
                                    <ul class="list-menu">
                                        <li><a href="{{route('signin')}}" title="USD">Đăng nhập</a></li>
                                        <li><a href="{{route('signup')}}" title="VND">Đăng ký</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-top">
                        <div class="container container-ver2">
                        <div class="box">
                            <p class="icon-menu-mobile"><i class="fa fa-bars" ></i></p>
                            <div class="logo-mobile"><a href="#" title="FreshFood"><img src="{!!url("resources/assets/images/logo-v2.png")!!}" alt="FreshFood-Logo")!!}"></a></div>
                            <div class="box-right">
                                <div class="cart hover-menu">
                                        <p class="icon-cart" title="Add to cart">
                                            <i class="icon"></i>
                                            <span class="cart-count">2</span>
                                        </p>
                                        <div class="cart-list list-menu">
                                            <ul class="list">
                                                <li>

                                                    <a href="#" title="" class="cart-product-image"><img src="{!!url("resources/assets/images/products/1.jpg")!!}" alt="Product"></a>

                                                    <div class="text">
                                                        <p class="product-name">Táo</p>
                                                        <p class="product-price"><span class="price-old">700.000 đ</span><span class="price">350.000 đ</span></p>
                                                        <p class="qty">SL: 01</p>
                                                    </div>
                                                    <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>
                                                </li>
                                                <li>

                                                    <a href="#" title="" class="cart-product-image"><img src="{!!url("resources/assets/images/products/1.jpg")!!}" alt="Product"></a>

                                                    <div class="text">
                                                        <p class="product-name">Đào</p>
                                                        <p class="product-price"><span class="price-old">700.000 đ</span><span class="price">350.000 đ</span></p>
                                                        <p class="qty">SL: 01</p>
                                                    </div>
                                                    <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>
                                                </li>
                                            </ul>
                                            <p class="total"><span class="left">Tổng:</span> <span class="right">700.000 đ</span></p>
                                            <div class="bottom">
                                                <a class="link-v1" href="#" title="viewcart">Xem giỏ hàng</a>
                                                <a class="link-v1 rt" href="#" title="checkout">Thanh toán</a>
                                            </div>
                                        </div>
                                    </div>
                                <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg">
                                    <i class="icon"></i>
                                </div>
                            </div>
                            <nav class="mega-menu">
                           <ul class="nav navbar-nav" id="navbar">
                            <li class="level1"><a href="{{action('ControllerHome@home')}}" title="Home">Trang chủ</a></li>
                            <li class="level1 dropdown">
                                <a href="#" title="Category">Danh mục</a>
                                <div class="sub-menu sub-menu-v2 dropdown-menu">
                                <div class="top-sub-menu">

                                    <img src="{!!url("resources/assets/images/banner/t1.jpg")!!}" alt="images">
                                </div>
                                  <ul class="menu-level-1">
                                    <li class="level2"><a href="#">Thực phẩm tươi sạch</a>
                                        <ul class="menu-level-2">
                                            <?php $cate = DB::table('loaisanpham')->select('tenloaisp')->get(); ?>
                                            @foreach($cate as $value)
                                                <li class="level3"><a href="#" title="Series"><?php echo $value->tenloaisp; ?></a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                  </ul>
                              </div>
                            <li class="level1"><a href="{{action('ControllerHome@about')}}" title="About us">Giới thiệu</a></li>
                            <li class="level1"><a href="contact.html" title="Contact us">Liên hệ</a></li>
                          </ul>
                        </nav>
                        </div>
                        </div>
                    </div>
            </div>
        </header>
        
        @yield('content')

        <footer id="footer" class="footer-v3 align-left">
              <div class="container container-ver2">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <h3 class="title-footer">Liên hệ</h3>
                            <p>Với hơn 10 năm kinh nghiệm, chúng tôi tự hào là doanh nghiệp dẫn đầu trong thị trường rau sạch và được tin dùng bởi hơn 100.000 khách hàng...</p>
                            <a class="link-footer" href="#" title="footer">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <h3 class="title-footer">Thông tin</h3>
                            <ul class="list-footer">
                                <li><a href="#" title="title">Chính sách giao hàng</a></li>
                                <li><a href="#" title="title">Pháp lý</a></li>
                                <li><a href="#" title="title">Điều khoản & điều kiện</a></li>
                                <li><a href="#" title="title">Giới thiệu</a></li>
                                <li><a href="#" title="title">Bảo mật thanh toán</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h3 class="title-footer">Mạng xã hội</h3>
                            <div class="social space-30">
                                <a href="#" title="t"><i class="fa fa-twitter"></i></a>
                                <a href="#" title="f"><i class="fa fa-facebook"></i></a>
                                <a href="#" title="y"><i class="fa fa-youtube-play"></i></a>
                                <a href="#" title="g"><i class="fa fa-google"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <h3 class="title-footer">Địa chỉ</h3>
                            <p>Văn phòng: 45 Nguyễn Khắc Nhu, Phường Cô Giang, Quận 1, TP.Hồ Chí Minh</p>
                            <p>Số điện thoại: 099-999-9999</p>
                        </div>
                    </div>
                    <!-- End row -->
                  </div>
                  <!-- End footer-inner -->
              </div>
              <!-- End container -->
              <div class="footer-bottom box">
                <div class="container container-ver2">
                    <div class="box bottom">
                        <p class="float-left">Copyright &copy;2018 <strong>Team Milkyway</strong> - All Rights Reserved.</p>
                        <div class="float-right">
                            <ul class="menu-bottom-footer">
                                <li><a href="#" title="Contact Us">Liên hệ</a></li>
                                <li><a href="#" title="Term of Use">Điều khoản sử dụng</a></li>
                                <li><a href="#" title="Privacy Policy">Chính sách pháp lý</a></li>
                                <li><a href="#" title="Site Map">Bản đồ</a></li>
                            </ul>
                            <div class="language">
                                <span>Ngôn ngữ:</span>
                                <div class="hover-menu">
                                    <p>VN <i class="fa fa-angle-down"></i></p>
                                    <div class="list-menu">
                                        <ul>
                                            <li><a href="#" title="EN">VN</a></li>
                                            <li><a href="#" title="VN">EN</a></li>
                                        </ul>
                                    </div>    
                                </div>
                                <span>Giá:</span>
                                <div class="hover-menu">
                                    <p>VND <i class="fa fa-angle-down"></i></p>
                                    <div class="list-menu">
                                        <ul>
                                            <li><a href="#" title="USD">VND</a></li>
                                            <li><a href="#" title="VND">USD</a></li>
                                        </ul>
                                    </div>    
                                </div>
                            </div>
                            <!-- End language -->
                        </div>
                    </div>
                </div>
                <!-- End container -->
              </div>
        </footer>
        </div>
    <!-- End wrappage -->
    <script type="text/javascript" src="{!!url("resources/assets/js/bootstrap.min.js")!!}"></script>
    <script type="text/javascript" src="{!!url("resources/assets/js/owl.carousel.min.js")!!}"></script>
    <script type="text/javascript" src="{!!url("resources/assets/js/jquery.themepunch.revolution.min.js")!!}"></script>
    <script type="text/javascript" src="{!!url("resources/assets/js/jquery.themepunch.plugins.min.js")!!}"></script>
    <script type="text/javascript" src="{!!url("resources/assets/js/engo-plugins.js")!!}"></script>
    
    <script type="text/javascript" src="{!!url("resources/assets/js/slick.min.js")!!}"></script>
    <script type="text/javascript" src="{!!url("resources/assets/js/store.js")!!}"></script>
    <script type="text/javascript" src="{!!url("resources/assets/js/jquery.zoom.js")!!}"></script>
    <script type="text/javascript" src="{!!url("resources/assets/js/jquery.mousewheel.min.js")!!}"></script>
    <script type="text/javascript" src="{!!url("resources/assets/js/price-range.js")!!}"></script>
    <script type="text/javascript" src="{!!url("resources/assets/js/mainjs.js")!!}"></script>
    <script type="text/javascript">
      jQuery("#Slider1").slider({ 
        from: 0,
        to: 1000,
        step: 100,
        smooth: true,
        round: 0,
        skin: "plastic"
        });
    </script>

    {{-- inputfile image and remove --}}
    <script>
        
    function readURL(input,img) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(img).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".imgin").click(function () {
        
        //$(this).children("form-control").add("<button class='' style='font-weight: normal;'>Remove</button>")
        $(this).change(function () {
            $(this).siblings("i").remove();
            $(this).siblings(".img222").remove();

            $(this).parent(".form-control").prepend("<img class='img-responsive img-rounded img222' style='height:70% ;position:absolute;top:0px;left:0px'/>");


            $(this).siblings(".img222").after("<button type='button' class='btn btn-danger' style='font-weight: bold; width:100%; height:30%; position:absolute;top:70%;left:0'>Remove</button>");
            readURL(this, $(this).siblings(".img222"));
            $(this).hide();
            $(this).siblings(".btn").click(function () {
                $(this).parent(".form-control").children(".img222").remove();
                $(this).parent(".form-control").children(".imgin").show();
                $(this).parent(".form-control").children(".imgin").val(null);
                $(this).parent(".form-control").prepend("<i class='glyphicon glyphicon-plus'></i>");
                $(this).parent(".form-control").children(".btn").remove();
            });
        });
        

    });

    </script>
    </body>    
</html>