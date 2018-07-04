        @extends('layout.master')
        @section (' title ')
        Trang Chủ
        @stop
        @section('content')
        <div class="container container-ver2 box-cat-home3">
            <div class="row">
                <div class="col-md-3">
                    <div class="categories-home3">
                        <h3>Loại sản phẩm</h3>
                        <i class="fa fa-chevron-circle-down icon-click"></i>
                        <ul class="menu-vertical">
                            <li><img src="resources/assets/images/icon-categories-2.png" alt=""><a href="{{url('catalog?id=4')}}" title="4">Rau</a></li>
                            <li><img src="resources/assets/images/icon-categories-3.png" alt=""><a href="{{url('catalog?id=5')}}" title="5">Trái cây</a></li>
                            <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="{{url('catalog?id=6')}}" title="6">Các loại củ quả</a></li>
                            <li><img src="resources/assets/images/icon-categories-8.png" alt=""><a href="{{url('catalog?id=0')}}" title="Hot Deals">Khuyến mãi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="resources/assets/images/banner/b1.png" alt="Chania">
                            <div class="carousel-caption" style="font: 400 16px "Roboto Slab";">
                                <h3>Rau sạch</h3>
                                <p>Cho một sức khỏe tốt hơn!</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="resources/assets/images/banner/b2.png" alt="Chicago">
                            <div class="carousel-caption">
                                <h3>Rau sạch</h3>
                                <p>Được chăm sóc tỉ mỉ!</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="resources/assets/images/banner/b3.png" alt="New York">
                            <div class="carousel-caption">
                                <h3>Trái cây sạch</h3>
                                <p>Thêm yêu sức khỏe!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
</div>
<div class="container container-ver2 farmer-banner">
    <div class="choose-us choose-us-home2">
        <div class="col-md-4 imgfarmer">
            <img class="img-responsive hidden-table" src="resources/assets/images/banner/farmer.png" alt="farmer picture">
        </div>
        <div class="col-md-8">
            <div class="title-choose align-center">
                <h3><span>Chúng tôi là </span>Thực phẩm sạch</h3>
                <p>Tại <strong>Thực phẩm sạch</strong>, chúng tôi cung cấp cho bạn những sản phẩm sạch từ rau, củ, quả với mức giá hấp dẫn nhất nhưng vẫn đảm bảo những tiêu chuẩn nghiêm ngặt về chất lượng. Tất cả đều <strong>sạch</strong> để bạn có thể yên tâm hơn với những bữa ăn của mình.</p>
            </div>
            <div class="align-center border-choose">
                <div class="images">
                    <img src="resources/assets/images/bg-border-center.png" alt="icon">
                </div>
            </div>
            <div class="shipping-v2 home3-shiping home2-shipping">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="border">
                        <img src="resources/assets/images/icon-shipping-1.png" alt="images">
                        <h3>Giao hàng miễn phí</h3>
                        <p>Cho đơn hàng trên 200.000 đ</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="border">
                        <img src="resources/assets/images/icon-shipping-2.png" alt="images">
                        <h3>Hỗ trợ</h3>
                        <p>Hỗ trợ 24/7</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="border">
                        <img src="resources/assets/images/icon-shipping-3.png" alt="images">
                        <h3>Chất lượng đảm bảo</h3>
                        <p>Đạt tiêu chuẩn về chất lượng</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="border">
                        <img src="resources/assets/images/icon-shipping-4.png" alt="images">
                        <h3>Liên hệ chúng tôi</h3>
                        <p>+84 99 999 9999</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container container-ver2 ">
    <div class="title-text-v2">
        <h3>Sản phẩm mới nhất</h3>
    </div>
    <div class="featured-products">
        <ul class="tabs tabs-title">
            <li class="item" rel="tab_01">Rau</li>
            <li class="item" rel="tab_02">Trái cây</li>
            <li class="item" rel="tab_03">Các loại củ quả</li>
        </ul>
        <div class="tab-container space-10">
            <div id="tab_01" class="tab-content">
                <div class="products">
                    @php ($count = 0)
                    @foreach($product as $pro)
                    @if($count < 12)
                        @if(($pro->maloaisp === 4) && ($pro->trangthai === 1))
                        <div class="product">
                            <div class="product-images">
                                <a href="{{ url('Productdetail',[$pro->masp]) }}" title="product-images">
                                    <img class="primary_image" src="resources/assets/images/products/<?php echo $pro->hinh ?>" alt=""/>
                                    <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                </a>
                            </div>
                            <a href="#" title="BlueBerry"><p class="product-title"><?php echo $pro->tensp ?></p></a>
                            <p class="product-price"><?php echo number_format($pro->gia,0,',','.')." Đ" ?></p>
                        </div>
                        <?php $count++; ?>
                        @endif
                    @else
                        <?php break;?>
                    @endif
                    @endforeach
                </div>
            </div>
            <div id="tab_02" class="tab-content">
                <div class="products">
                    @php ($count = 0)
                    @foreach($product as $pro)
                    @if($count < 12)
                        @if(($pro->maloaisp === 5) && ($pro->trangthai === 1))
                        <div class="product">
                            <div class="product-images">
                                <a href="{{ url('Productdetail',[$pro->masp]) }}" title="product-images">
                                    <img class="primary_image" src="resources/assets/images/products/<?php echo $pro->hinh ?>" alt=""/>
                                    <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                </a>
                            </div>
                            <a href="#" title="BlueBerry"><p class="product-title"><?php echo $pro->tensp ?></p></a>
                            <p class="product-price"><?php echo number_format($pro->gia,0,',','.')." Đ" ?></p>
                        </div>
                        <?php $count++; ?>
                        @endif
                    @else
                        <?php break;?>
                    @endif
                    @endforeach
                </div>
            </div>
            <div id="tab_03" class="tab-content">
                <div class="products">
                    @php ($count = 0)
                    @foreach($product as $pro)
                    @if($count < 12)
                        @if(($pro->maloaisp === 6) && ($pro->trangthai === 1))
                        <div class="product">
                            <div class="product-images">
                                <a href="{{ url('Productdetail',[$pro->masp]) }}" title="product-images">
                                    <img class="primary_image" src="resources/assets/images/products/<?php echo $pro->hinh ?>" alt=""/>
                                    <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                </a>
                            </div>
                            <a href="#" title="BlueBerry"><p class="product-title"><?php echo $pro->tensp ?></p></a>
                            <p class="product-price"><?php echo number_format($pro->gia,0,',','.')." Đ" ?></p>
                        </div>
                        <?php $count++; ?>
                        @endif
                    @else
                        <?php break;?>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="box center space-padding-tb-30">
            <a class="link-v1 color-brand font-300" href="{{route('Catalog')}}" title="View All">Xem tất cả</a>
        </div>
    </div>
</div>
<div class="banner-home3">
    <div class="container container-ver2 space-40">
        <img class="img-responsive" src="resources/assets/images/banner/b.jpg" alt="banner-home3">
        <div class="text">
            <img src="resources/assets/images/icon-phone.png" alt="icon">
            <h4 style="text-shadow: 2px 2px 2px #000000">Gọi cho chúng tôi ngay</h4>
            <h3 style="text-shadow: 2px 2px 2px #000000">099 - 999 - 9999</h3>
            <p style="text-shadow: 2px 2px 2px #000000">Đặt rau, củ quả và trái cây sạch cho sức khỏe tốt hơn!</p>
        </div>
    </div>
    <div id="back-to-top">
        <i class="fa fa-long-arrow-up"></i>
    </div>
</div>
<!-- <div class="container class-cua-tao">
    <img class="img-responsive" src="resources/assets/images/banner/b.jpg" alt="farmer picture">
</div> -->

<div class="container container-ver2 ">
    <div class="title-text-v2">
        <h3>Sản phẩm nổi bật</h3>
    </div>
    <div class="featured-products">
        <ul class="tabs tabs-title">
            <li class="item" rel="tab_04">Bán chạy nhất</li>
            <li class="item" rel="tab_05">Giảm giá</li>
        </ul>
        <div class="tab-container space-10">
            <div id="tab_04" class="tab-content">
                <div class="products">
                    <?php $productSecond = DB::table('chitiethoadon')->join('sanpham','chitiethoadon.masp','=','sanpham.masp')->select('chitiethoadon.masp', 'maloaisp','tensp','gia','giacu','donvi','hinh','trangthai', DB::raw('count(*) as soluong'))->groupBy('chitiethoadon.masp','sanpham.maloaisp','sanpham.tensp','sanpham.gia','sanpham.giacu','sanpham.donvi','sanpham.hinh','sanpham.trangthai')->where('sanpham.trangthai','1')->orderBy('soluong','desc')->get(); ?>
                    @php ($count = 0)
                    @foreach($productSecond as $pro)
                    @if($count < 6)
                        <div class="product">
                            <div class="product-images">
                                <a href="{{ url('Productdetail',[$pro->masp]) }}" title="product-images">
                                    <img class="primary_image" src="resources/assets/images/products/<?php echo $pro->hinh ?>" alt=""/>
                                    <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                </a>
                            </div>
                            <a href="#" title="BlueBerry"><p class="product-title"><?php echo $pro->tensp ?></p></a>
                            <p class="product-price"><?php echo number_format($pro->gia,0,',','.')." Đ" ?></p>
                        </div>
                        <?php $count++; ?>
                    @else
                        <?php break;?>
                    @endif
                    @endforeach
                </div>
            </div>
            <div id="tab_05" class="tab-content">
                <div class="products">
                    @php ($count = 0)
                    @foreach($product as $pro)
                    @if($count < 6)
                        @if($pro->giacu !== 0 && $pro->trangthai === 1)
                        <div class="product">
                            <div class="product-images">
                                <a href="{{ url('Productdetail',[$pro->masp]) }}" title="product-images">
                                    <img class="primary_image" src="resources/assets/images/products/<?php echo $pro->hinh ?>" alt=""/>
                                    <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                </a>
                            </div>
                            <a href="#" title="BlueBerry"><p class="product-title"><?php echo $pro->tensp ?></p></a>
                            <p class="product-price-old"><?php echo number_format($pro->giacu,0,',','.')." Đ" ?></p>
                            <p class="product-price"><?php echo number_format($pro->gia,0,',','.')." Đ" ?></p>
                        </div>
                        <?php $count++; ?>
                        @endif
                    @else
                        <?php break;?>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="box center space-padding-tb-30">
            <a class="link-v1 color-brand font-300" href="{{route('Catalog')}}" title="View All">Xem tất cả</a>
        </div>
    </div>
</div>
<div class="banner-home3">
    <div class="container container-ver2 space-40">
        <img class="img-responsive" src="resources/assets/images/banner/or.png" alt="banner-home3">
        <div class="text">
            <img src="resources/assets/images/icon-phone.png" alt="icon">
            <h4 style="text-shadow: 2px 2px 2px #000000">Gọi cho chúng tôi ngay</h4>
            <h3 style="text-shadow: 2px 2px 2px #000000">099 - 999 - 9999</h3>
            <p style="text-shadow: 2px 2px 2px #000000">Đa dạng sản phẩm, chất lượng tuyệt vời</p>
        </div>
    </div>
    
</div>

@stop
