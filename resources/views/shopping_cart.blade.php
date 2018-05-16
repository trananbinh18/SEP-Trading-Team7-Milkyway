 @extends ('layout.master')
@section(' title ')
    Giỏ Hàng
@stop

@section('content')
<div class="main-content">
    <div class="container">
        <div class="container">
            <div class="banner-header banner-lbook3">
                <img src="resources/assets/images/banner-product-checkout.jpg" alt="Banner-header">
                <div class="text">
                    <h3>Giỏ hàng</h3>
                    <p><a href="#" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i>Giỏ hàng</p>
                </div>
            </div>
        </div>
        <div class="cart-box-container">
            <div class="container container-ver2 space-padding-tb-30">
                <div class="row head-cart">
                    <div class="col-md-4 space-30">
                        <div class="item active center">
                            <p class="icon">01</p>
                            <h3>Giỏ hàng</h3>
                        </div>
                    </div>
                    <!-- End col-md-4 -->
                    <div class="col-md-4 space-30">
                        <div class="item center">
                            <p class="icon">02</p>
                            <h3>Kiểm tra</h3>
                        </div>
                    </div>
                    <!-- End col-md-4 -->
                    <div class="col-md-4 space-30">
                        <div class="item center">
                            <p class="icon">03</p>
                            <h3>Thanh toán thành công</h3>
                        </div>
                    </div>
                    <!-- End col-md-4 -->
                </div>
            </div>
            <!-- End container -->
            <div class="container container-ver2">
                <div class="box cart-container">
                    <table class="table cart-table space-30">
                        <thead>
                            <tr>
                                <th class="product-photo">Danh sách sản phẩm</th>
                                <th class="produc-name">Tên sản phẩm</th>
                                <th class="produc-price">Giá</th>
                                <th class="produc-name">Đơn vị</th>
                                <th class="product-quantity">Số lượng</th>
                                <th class="total-price">Tổng</th>
                                <th class="product-remove"></th>
                            </tr>
                        </thead>                       
                        <tbody>
                            @foreach($content as $item)
                            <tr class="item_cart">
                                <td class="product-photo"><img src="{!!url("resources/assets/images/products/{$item->options['img']}")!!}" alt="Futurelife"></td>
                                <td class="produc-name"><a href="#">{{$item->name}}</a></td>
                                <td class="produc-price"><input value="{{number_format($item->price,0,',','.')}}" size="4" type=""></td>
                                <td class="produc-price"><input value="{{$item->options['unit']}}" size="4" type=""></td>
                                <td class="product-quantity">
                                    <form enctype="multipart/form-data">
                                        <div class="product-signle-options product_15 clearfix">
                                            <div class="selector-wrapper size">
                                                <div class="quantity">
                                                    <input data-step="1" value="{{$item->qty}}" title="Qty" class="qty" size="4" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td class="total-price"></td>
                                <td class="product-remove"><a class="remove" href="#" title="close"><img src="resources/assets/images/icon-delete-cart.png" alt="close"></a></td>
                            </tr>
                            @endforeach
                        </tbody>                        
                    </table>

                    <div class="float-left">
                        <a class="link-v1 lh-50 bg-brand" href="{{route('homepage')}}" title="CONTINUS SHOPPING">Tiếp tục mua sắm</a>
                    </div>
                    <div class="box cart-total space-30">
                        <!-- End col-md-4 -->
                        <div class="col-md-4 space-30">
                            <div class="item">
                                <h3 class="title">TỔNG HÀNG</h3>
                                <p class="box"><span class="float-left">Phí vận chuyển</span><span class="float-right">40000</span></p>
                                <p class="box space-30"><span class="float-left"><b>Tổng chi phí</b></span><span class="float-right"><b class="color-brand">520000</b></span></p>
                                <a class="link-v1 lh-50 rt" href="#" title="POCEEED TO CHECKOUT">THANH TOÁN</a>
                            </div>
                        </div>
                        <!-- End col-md-4 -->
                    </div>
                    <!-- End float-right -->
                </div>
                <!-- End box -->

            </div>
            <!-- End box -->
        </div>
        <!-- End container -->
    </div>
    <!-- End cat-box-container -->
    @endsection