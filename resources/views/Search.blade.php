@extends('layout.master')
@section('content')
    <div class="title-text-v2">
        <h3>Tìm kiếm</h3>
{{--         <p>Tìm thấy {{count($Search_product)}} sản phẩm</p> --}}
    </div>
    
     <div class="container container-ver2">                
        <div class="featured-products products-size-small">
            <ul class="tabs tabs-title">
                <li class="item" rel="tab_01">Rau</li>
                <li class="item" rel="tab_02">Trái cây</li>
                <li class="item" rel="tab_03">Các loại củ</li>
            </ul>

            <div class="tab-container space-10">
                 @foreach($Search_product as $Search)
                <div id="tab_01" class="tab-content">
                    <div class="products">
                        @foreach($product as $pro)
                            @if($pro->maloaisp === 4)
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/<?php echo $pro->hinh ?>" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title"><?php echo $pro->tensp ?></p></a>
                                <p class="product-price"><?php echo number_format($pro->gia,0,',','.')." Đ" ?></p>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div id="tab_02" class="tab-content">
                    <div class="products">
                        @foreach($product as $pro)
                            @if($pro->maloaisp === 5)
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/<?php echo $pro->hinh ?>" alt="<?php echo $pro->hinh ?>"/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title"><?php echo $pro->tensp ?></p></a>
                                <p class="product-price"><?php echo number_format($pro->gia,0,',','.')." Đ" ?></p>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div id="tab_03" class="tab-content">
                    <div class="products">
                        @foreach($product as $pro)
                            @if($pro->maloaisp === 6)
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/<?php echo $pro->hinh ?>" alt="<?php echo $pro->hinh ?>"/>
                                        <img class="secondary_image" src="" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title"><?php echo $pro->tensp ?></p></a>
                                <p class="product-price"><?php echo number_format($pro->gia,0,',','.')." Đ" ?></p>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                 @endforeach          
        </div>                         
      </div>  
   
@endsection