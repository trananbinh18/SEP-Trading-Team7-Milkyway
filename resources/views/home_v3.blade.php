        @extends('layout.master')

        @section('content')
        <div class="container container-ver2 box-cat-home3">
            <div class="row">
                <div class="col-md-3">
                    <div class="categories-home3">
                        <h3>Loại sản phẩm</h3>
                        <i class="fa fa-chevron-circle-down icon-click"></i>
                        <ul class="menu-vertical">
                            <li><img src="resources/assets/images/icon-categories-1.png" alt=""><a href="#" title="All Products">Tất cả sản phẩm</a></li>
                            <li><img src="resources/assets/images/icon-categories-2.png" alt=""><a href="#" title="Vegetable">Rau</a></li>
                            <li><img src="resources/assets/images/icon-categories-3.png" alt=""><a href="#" title="Fruit">Trái cây</a></li>
                            <!-- <li><img src="resources/assets/images/icon-categories-4.png" alt=""><a href="#" title="Sea Food">Cá</a></li>
                            <li><img src="resources/assets/images/icon-categories-5.png" alt=""><a href="#" title="Fresh Meal">Thịt</a></li>
                            <li><img src="resources/assets/images/icon-categories-6.png" alt=""><a href="#" title="Organic Dairy">Rau quả hữu cơ</a></li>
                            <li><img src="resources/assets/images/icon-categories-7.png" alt=""><a href="#" title="Cereals">Ngũ cốc</a></li> -->
                            <li><img src="resources/assets/images/icon-categories-8.png" alt=""><a href="#" title="Hot Deals">Khuyến mãi</a></li>
                        </ul>
                    </div>
                </div>
                <!--End col-md-3-->
                <div class="col-md-9">
                    <div class="tp-banner-container hidden-dot ver3">
                        <div class="tp-banner" >
                            <ul>    <!-- SLIDE  -->
                                <!-- SLIDE  -->
                                <li data-transition="random" data-slotamount="6" data-masterspeed="1000" >
                                    <!-- MAIN IMAGE -->
                                    <img src="resources/assets/images/home3-slideshow1.jpg"  alt="Futurelife-home2-slideshow"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                                    <!-- LAYER NR. 9 -->
                                    <div class="tp-caption color-white skewfromleft customout font-play tp-resizeme size-42 bg-brand"
                                         data-x="360"
                                         data-y="220"
                                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                         data-speed="800"
                                         data-start="800"
                                         data-easing="Power4.easeOut"
                                         data-endspeed="300"
                                         data-endeasing="Power1.easeIn"
                                         data-captionhidden="on"
                                         style="z-index: 3">Chào mừng bạn đến với <strong>Thực phẩm sạch</strong>
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption font-ros weight-400 skewfromleft customout size-18 bg-white"
                                         data-x="445"
                                         data-y="292"
                                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                         data-speed="800"
                                         data-start="1600"
                                         data-easing="Power4.easeOut"
                                         data-endspeed="300"
                                         data-endeasing="Power1.easeIn"
                                         data-captionhidden="on"
                                         style="z-index: 4">Chúng tôi cung cấp nhũng sản phẩm chất lượng nhất...
                                    </div>
                                </li>
                                <!-- SLIDER -->
                                <!-- SLIDE  -->
                                <li data-transition="random" data-slotamount="6" data-masterspeed="1000" >
                                    <!-- MAIN IMAGE -->
                                    <img src="resources/assets/images/home3-slideshow1.jpg"  alt="Futurelife-home2-slideshow"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                                    <!-- LAYER NR. 9 -->
                                    <div class="tp-caption color-white skewfromleft customout font-play tp-resizeme size-42 bg-brand uppercase"
                                         data-x="308"
                                         data-y="204"
                                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                         data-speed="800"
                                         data-start="800"
                                         data-easing="Power4.easeOut"
                                         data-endspeed="300"
                                         data-endeasing="Power1.easeIn"
                                         data-captionhidden="on"
                                         style="z-index: 3">Nhiều chương trình khuyến mãi
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption font-ros weight-400 skewfromleft customout size-24 bg-white"
                                         data-x="148"
                                         data-y="275"
                                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                         data-speed="800"
                                         data-start="1600"
                                         data-easing="Power4.easeOut"
                                         data-endspeed="300"
                                         data-endeasing="Power1.easeIn"
                                         data-captionhidden="on"
                                         style="z-index: 4">Miễn phí giao hàng
                                    </div>
                                </li>
                                <!-- SLIDER -->
                            </ul>
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                </div>
                <!--End col-md-9-->
            </div>
        </div>
        <!--End Slide-->
            <div class="container container-ver2">
                <div class="choose-us choose-us-home2">
                    <div class="col-md-4">
                        <img class="img-responsive hidden-table" src="resources/assets/images/banner/6.jpg" alt="banner">
                    </div>
                    <!--End col-md-4-->
                    <div class="col-md-8">
                        <div class="title-choose align-center">
                            <h3><span>Chúng tôi là </span>Thực phẩm sạch</h3>
                            <p>Tại <strong>Thực phẩm sạch</strong>, chúng tôi cung cấp cho bạn những sản phẩm sạch từ rau, củ, quả với mức giá hấp dẫn nhất nhưng vẫn đảm bảo những tiêu chuẩn nghiêm ngặt về chất lượng. Tất cả đều <strong>sạch</strong> để bạn có thể yên tâm hơn với những bữa ăn của mình.</p>
                        </div>
                        <!--End title-choose-->
                        <div class="align-center border-choose">
                            <div class="images">
                                <img src="resources/assets/images/bg-border-center.png" alt="icon">
                            </div>
                        </div>
                        <!--End border-choose-->
                        <div class="shipping-v2 home3-shiping home2-shipping">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="border">
                                    <img src="resources/assets/images/icon-shipping-1.png" alt="images">
                                    <h3>Giao hàng miễn phí</h3>
                                    <p>Cho đơn hàng cho 200.000 đ</p>
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
                    <!--End col-md-8-->
                </div>
            </div>
            <!--End Shipping Version 2-->
        <div class="catbox-container space-80">
            <div class="items hover-images">
                <img src="resources/assets/images/catbox-1.jpg" alt="catbox">
                <div class="text">
                    <h3>Rau sạch</h3>
                    <a href="#" title="View all product">Xem tất cả sản phẩm</a>
                </div>
            </div>
            <!--End items-->
            <div class="items hover-images">
                <img src="resources/assets/images/catbox-1.jpg" alt="catbox">
                <div class="text">
                    <h3>Trái cây sạch</h3>
                    <a href="#" title="View all product">Xem tất cả sản phẩm</a>
                </div>
            </div>
            <!--End items-->
            <div class="items hover-images">
                <img src="resources/assets/images/catbox-1.jpg" alt="catbox">
                <div class="text">
                    <h3>Khuyến mãi</h3>
                    <a href="#" title="View all product">Xem tất cả sản phẩm</a>
                </div>
            </div>
            <!--End items-->
        </div>
        <!--End catbox-container-->
        <div class="container">
            <div class="title-text-v2">
                <h3>Sản phẩm mới nhất</h3>
            </div>
            <div class="featured-products home_2 new-arrivals lastest">
                <ul class="tabs tabs-title">
                    <li class="item" rel="tab_1">Tất cả sản phẩm</li>
                    <li class="item" rel="tab_2">Rau sạch</li>
                    <li class="item" rel="tab_3">Trái cây</li>
                    <li class="item" rel="tab_4">Khuyến mãi</li>
                </ul>
                <div class="tab-container space-10">
                    <div id="tab_1" class="tab-content">
                        <div class="products hover-shadow ver2 border-space-product">
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">Spices</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">Cucumber</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">Tomato</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">Male</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">Passion Fruit</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a class="add-cart" href="#" title="Add to cart"></a>
                                        <a class="wish" href="#" title="Wishlist"></a>
                                        <a class="zoom" href="#" title="Quick view"></a>
                                    </div>
                                    <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">Spices</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a class="add-cart" href="#" title="Add to cart"></a>
                                        <a class="wish" href="#" title="Wishlist"></a>
                                        <a class="zoom" href="#" title="Quick view"></a>
                                    </div>
                                    <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">Cucumber</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a class="add-cart" href="#" title="Add to cart"></a>
                                        <a class="wish" href="#" title="Wishlist"></a>
                                        <a class="zoom" href="#" title="Quick view"></a>
                                    </div>
                                    <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">Tomato</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a class="add-cart" href="#" title="Add to cart"></a>
                                        <a class="wish" href="#" title="Wishlist"></a>
                                        <a class="zoom" href="#" title="Quick view"></a>
                                    </div>
                                    <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">Male</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a class="add-cart" href="#" title="Add to cart"></a>
                                        <a class="wish" href="#" title="Wishlist"></a>
                                        <a class="zoom" href="#" title="Quick view"></a>
                                    </div>
                                    <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">Passion Fruit</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                        </div>
                        <!-- End product-tab-content products -->
                    </div>
                    <!-- End tab-content -->
                    <div id="tab_2" class="tab-content">
                        <div class="products hover-shadow ver2 border-space-product">
                            <div class="product hover-shadow">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                        </div>
                        <!-- End product-tab-content products -->
                    </div>
                    <!-- End tab-content -->
                    <div id="tab_3" class="tab-content">
                        <div class="products ver2 hover-shadow border-space-product">
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                        </div>
                        <!-- End product-tab-content products -->
                    </div>
                    <!-- End tab-content -->
                    <div id="tab_4" class="tab-content">
                        <div class="products ver2 hover-shadow border-space-product">
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                        </div>
                        <!-- End product-tab-content products -->
                    </div>
                </div>
            </div>
            <div class="box center space-padding-tb-30 space-30">
                <a class="link-v1 color-brand font-300 space-30" href="#" title="View All">Xem tất cả</a>
            </div>
        </div>
        <!-- End container-ver2 -->
        <div class="banner-home3">
            <div class="container container-ver2 space-40">
                <img class="img-responsive" src="resources/assets/images/banner-home3.jpg" alt="banner-home3">
                <div class="text">
                    <img src="resources/assets/images/icon-phone.png" alt="icon">
                    <h4>Call FOR US now</h4>
                    <h3>(070) - 7782 - 9137</h3>
                    <p>Order Organic food To Fit Your Healthy Lifestyle!</p>
                </div>
                <!--End text-->
                <div class="icon-banner">
                    <img src="resources/assets/images/home3-images-banner1.png" alt="icon-banner">
                </div>
            </div>
        </div>
        <!--End banner-home3-->
        <div class="container container-ver2 ">
            <div class="title-text-v2">
                <h3>Sản phẩm nổi bật</h3>
            </div>
            <div class="featured-products">
                <ul class="tabs tabs-title">
                    <li class="item" rel="tab_01">Bán chạy nhất</li>
                    <li class="item" rel="tab_02">Sản phẩm mới</li>
                    <li class="item" rel="tab_03">Khuyến mãi</li>
                    <li class="item" rel="tab_04">Đánh giá cao</li>
                </ul>
                <div class="tab-container space-10">
                    <div id="tab_01" class="tab-content">
                        <div class="products">
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                        </div>
                        <!-- End product-tab-content products -->
                    </div>
                    <!-- End tab-content -->
                    <div id="tab_02" class="tab-content">
                        <div class="products">
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                        </div>
                        <!-- End product-tab-content products -->
                    </div>
                    <!-- End tab-content -->
                    <div id="tab_03" class="tab-content">
                        <div class="products">
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                        </div>
                        <!-- End product-tab-content products -->
                    </div>
                    <!-- End tab-content -->
                    <div id="tab_04" class="tab-content">
                        <div class="products">
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                        </div>
                        <!-- End product-tab-content products -->
                    </div>
                    <div id="tab_05" class="tab-content">
                        <div class="products">
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>
                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                            <div class="product">
                                <div class="product-images">
                                    <a href="#" title="product-images">
                                        <img class="primary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                        <img class="secondary_image" src="resources/assets/images/products/featured/1.jpg" alt=""/>
                                    </a>
                                </div>
                                <a href="#" title="BlueBerry"><p class="product-title">BlueBerry</p></a>
                                <p class="product-price-old">$700.00</p>
                                <p class="product-price">$350.00</p>

                            </div>
                            <!-- End item -->
                        </div>
                        <!-- End product-tab-content products -->
                    </div>
                </div>
                <div class="box center space-padding-tb-30">
                    <a class="link-v1 color-brand font-300" href="#" title="View All">View All</a>
                </div>
                <!-- End viewall -->
            </div>
        </div>
        <!--End container-ver2-->
        <div id="back-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </div>
        @stop
       