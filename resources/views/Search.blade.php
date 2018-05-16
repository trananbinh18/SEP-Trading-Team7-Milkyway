@extends ('layout.master')
@section (' title ')
Kết Quả Tìm Kiếm
@stop
@section ('content')
<div class="container container-ver2 ">
    <div class="title-text-v2">
        @if($sProduct === 0)
        <h3>Đã Tìm thấy <strong>0</strong> sản phẩm</h3>
        @else
        <h3>Đã Tìm thấy <strong>{{count($sProduct)}}</strong> sản phẩm</h3>
        @endif
    </div>
    <div class="featured-products">
        <ul class="tabs tabs-title">
            <li class="item" rel="tab_01"></li>
        </ul>
        <div class="tab-container space-10">
            <div id="tab_01" class="tab-content">
                <div class="products">
                    @if ($sProduct === 0)
                    @else
                        @foreach($sProduct as $pro)
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
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop