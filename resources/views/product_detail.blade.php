@extends('layout.master')
@section('content')
          <div class="main-content">
            <div class="container">
                <div class="banner-header banner-lbook3">
                    <img src="{!!url("resources/assets/images/banner-blog.jpg") !!}" alt="Banner-header">
                    <div class="text">
                    <h3>Tất cả sản phẩm</h3>
                    <p><a href="#" title="Home">Trang chủ</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Chi tiết sản phẩm</a><i class="fa fa-caret-right"></i><?php echo "{$sanpham['TENSP']}"; ?></p>
                </div>
                </div> 


            </div>
                <div class="container">     
                    <div class="product-details-content">
                        <div class="col-md-6 col-sm-6">
                              <div class="slider-for">
                                <div>
                                  <span class="zoom">
                                    <img class="zoom-images" src="{!!url("resources/assets/images/products/{$sanpham['HINH']}") !!}" alt="images">
                                  </span>
                                </div>
                                <div>
                                  <span class="zoom">
                                  <img class="zoom-images" src="{!!url("resources/assets/images/products/{$sanpham['HINH']}") !!}" alt="images">
                                  </span>
                                </div>
                                <div>
                                  <span class="zoom">
                                  <img class="zoom-images" src="{!!url("resources/assets/images/products/{$sanpham['HINH']}") !!}" alt="images">
                                  </span>
                                </div>
                                <div>
                                  <span class="zoom">
                                  <img class="zoom-images" src="{!!url("resources/assets/images/products/{$sanpham['HINH']}") !!}" alt="images">
                                  </span>
                                </div>
                              </div>
                              <!-- End slider-for -->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="box-details-info">
                                <div class="product-name">
                                    <h1><?php echo "{$sanpham['TENSP']}"; ?></h1>
                                </div>
                                <!-- End product-name -->
                                <div class="rating">
                                    <div class="overflow-h">
                                        <div class="icon-rating">  
                                            <input type="radio" id="star-horizontal-rating-1" name="star-horizontal-rating" checked="">    
                                            <label for="star-horizontal-rating-1"><i class="fa fa-star-half-o"></i></label> 
                                            <input type="radio" id="star-horizontal-rating-2" name="star-horizontal-rating" checked="">    
                                            <label for="star-horizontal-rating-2"><i class="fa fa-star"></i></label>
                                            <input type="radio" id="star-horizontal-rating-3" name="star-horizontal-rating" checked="">    
                                            <label for="star-horizontal-rating-3"><i class="fa fa-star"></i></label>
                                            <input type="radio" id="star-horizontal-rating-4" name="star-horizontal-rating">    
                                            <label for="star-horizontal-rating-4"><i class="fa fa-star"></i></label>
                                            <input type="radio" id="star-horizontal-rating-5" name="star-horizontal-rating">    
                                            <label for="star-horizontal-rating-5"><i class="fa fa-star"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Rating -->
                                <div class="wrap-price">
                                    <p class="price-old">$700.00</p>
                                    <p class="price">$350.00</p>
                                </div>
                                <!-- End Price -->
                            </div>
                            <!-- End box details info -->
                            <div class="options">
                                <p><?php echo "{$sanpham['MOTA']}"; ?></p>
                                <!-- End action -->
                                <div class="description-lits">
                                    <h3>100% sản phẩm tươi sạch</h3>
                                    <ul>
                                        <li><img src="{!!url("resources/assets/images/icon-deslist.jpg") !!}" alt="icon">100% Không có thuốc trừ sâu</li>
                                        <li><img src="{!!url("resources/assets/images/icon-deslist.jpg") !!}" alt="icon">100% Không hư hại</li>
                                        <li><img src="{!!url("resources/assets/images/icon-deslist.jpg") !!}" alt="icon">100% Được đem từ Ninh Bình lên</li>
                                    </ul>

                                </div>
                                <!--End Description-->
                                <div class="box space-30">
                                    <div class="row">
                                    <!-- End col-md-6 -->
                                    <div class="col-md-5">
                                        <div class="title">
                                            <h3>SỐ LƯỢNG</h3>
                                        </div>
                                         <form enctype="multipart/form-data">
                                            <input data-step="1" value="1" title="Qty" min="1" size="4" type="number" max="<?php echo "{$sanpham['SOLUONG']}"; ?>">
                                        </form>
                                    </div>
                                    <!-- End col-md-5 -->
                                    </div>
                                    <!-- End row -->
                                </div>
                                <!-- End row -->
                                <div class="action">
                                    <a class="link-v1 add-cart bg-brand" title="Add to cart" href="#"><span>Thêm vào giỏ</span></a>
                                    <a class="link-v1 wish" title="Wishlist" href="#"><i class="icon icon-heart"></i></a>
                                    <a class="link-v1 chart" title="Compare" href="#"><i class="icon icon-magnifier"></i></a>
                                </div>
                                <div class="social box">
                                    <h3>Chia sẻ :</h3>
                                    <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
                                    <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
                                    <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
                                    <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
                                    <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
                                </div>
                                <!-- End share -->
                            </div>
                            <!-- End Options -->
                        </div>  
                    </div>   
                    <!-- End product-details-content -->
                    <div class="hoz-tab-container space-padding-tb-30">
                        <ul class="tabs">
                            <li class="item" rel="description">Mô tả</li>
                            <li class="item" rel="product-tags">Thông tin bổ sung</li>
                            <li class="item" rel="customer">Khách hàng đánh giá</li>
                        </ul>
                        <div class="tab-container">
                            <div id="description" class="tab-content">
                                <div class="text">
                                    <h3><?php echo "{$sanpham['TENSP']}"; ?></h3>
                                    <p><?php echo "{$sanpham['MOTA']}"; ?></p>
                                </div>
                            </div>
                            <div id="product-tags" class="tab-content">
                                <p>
                                    <span>Người Bán</span>
                                    <span><?php echo "{$sanpham->nguoiban['TENNB']}"; ?></span>
                                </p>
                                <p>
                                    <span>Đơn Vị</span>
                                    <span><?php echo "{$sanpham['DONVI']}"; ?></span>
                                </p>
                                <p>
                                    <span>Hiện Còn</span>
                                    <span><?php echo "{$sanpham['SOLUONG']} {$sanpham['DONVI']}"; ?></span>
                                </p>
                            </div>
                            <div id="customer" class="tab-content">
                                <div class="box border">
                                    <h3>Nhận xét (0)</h3>
                                    <p>Chưa có nhận xét nào.</p>
                                </div>
                                <form class="form-horizontal">
                                    <h3>Thêm nhận xét</h3>
                                    <div class="box">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class=" control-label" for="inputName">Tên *</label>
                                                <input type="text" class="form-control" id="inputName" placeholder="Tên">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class=" control-label" for="inputsumary">Email <span class="color">*</span></label>
                                                <input type="text" class="form-control" id="inputsumary" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box rating">
                                        <p>Đánh giá <span class="color">*</span></p>
                                        <ul>
                                            <li>
                                                <a href="#" title="rating">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="active" href="#" title="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>  
                                    <div class="form-group">
                                        <label class=" control-label" for="inputReview">Nhận xét <span class="color">*</span></label>
                                        <textarea class="form-control" id="inputReview"></textarea>
                                    </div>
                                    <a class="button-v1" href="#" title="add tags">Gửi nhận xét</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- tab-container -->
                    <div class="title-text-v2 space-60">
                        <h3>Sản phẩm liên quan</h3>
                    </div>   
                    <!-- End title -->
                    <div class="upsell-product owl-carousel products furniture hover-shadow ver2">
                            <div class="item-inner">
                                <div class="product">
                                    <div class="product-images">
                                        <a href="#" title="product-images">
                                            <img class="primary_image" src="{!!url("resources/assets/images/products/furniture/1.jpg") !!}" alt=""/>
                                            <img class="secondary_image" src="{!!url("resources/assets/images/products/furniture/1.jpg") !!}" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                    </div>
                                    <a href="#" title="Union Bed"><p class="product-title">Rau dền</p></a>
                                    <p class="product-price-old">$700.00</p>
                                    <p class="product-price">$350.00</p>
                                </div>
                                <!-- End product -->
                            </div>
                            <div class="item-inner">
                                <div class="product">
                                    <div class="product-images">
                                        <a href="#" title="product-images">
                                            <img class="primary_image" src="{!!url("resources/assets/images/products/furniture/1.jpg") !!}" alt=""/>
                                            <img class="secondary_image" src="{!!url("resources/assets/images/products/furniture/1.jpg") !!}" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                    </div>
                                    <a href="#" title="Union Bed"><p class="product-title">Rau dền</p></a>
                                    <p class="product-price-old">$700.00</p>
                                    <p class="product-price">$350.00</p>
                                </div>
                                <!-- End product -->
                            </div>
                            <div class="item-inner">
                                <div class="product">
                                    <div class="product-images">
                                        <a href="#" title="product-images">
                                            <img class="primary_image" src="{!!url("resources/assets/images/products/furniture/1.jpg") !!}" alt=""/>
                                            <img class="secondary_image" src="{!!url("resources/assets/images/products/furniture/1.jpg") !!}" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                    </div>
                                    <a href="#" title="Union Bed"><p class="product-title">Rau dền</p></a>
                                    <p class="product-price-old">$700.00</p>
                                    <p class="product-price">$350.00</p>
                                </div>
                                <!-- End product -->
                            </div>
                            <div class="item-inner">
                                <div class="product">
                                    <div class="product-images">
                                        <a href="#" title="product-images">
                                            <img class="primary_image" src="{!!url("resources/assets/images/products/furniture/1.jpg") !!}" alt=""/>
                                            <img class="secondary_image" src="{!!url("resources/assets/images/products/furniture/1.jpg") !!}" alt=""/>
                                        </a>
                                        
                                        <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                    </div>
                                    <a href="#" title="Union Bed"><p class="product-title">Rau dền</p></a>
                                    <p class="product-price-old">$700.00</p>
                                    <p class="product-price">$350.00</p>
                                </div>
                                <!-- End product -->
                            </div>
                            <div class="item-inner">
                                <div class="product">
                                    <div class="product-images">
                                        <a href="#" title="product-images">
                                            <img class="primary_image" src="{!!url("resources/assets/images/products/furniture/1.jpg") !!}" alt=""/>
                                            <img class="secondary_image" src="{!!url("resources/assets/images/products/furniture/1.jpg") !!}" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                    </div>
                                    <a href="#" title="Union Bed"><p class="product-title">Rau dền</p></a>
                                    <p class="product-price-old">$700.00</p>
                                    <p class="product-price">$350.00</p>
                                </div>
                                <!-- End product -->
                            </div>
                            <div class="item-inner">
                                <div class="product">
                                    <div class="product-images">
                                        <a href="#" title="product-images">
                                            <img class="primary_image" src="{!!url("resources/assets/images/products/furniture/1.jpg") !!}" alt=""/>
                                            <img class="secondary_image" src="{!!url("resources/assets/images/products/furniture/1.jpg") !!}" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a class="add-cart" href="#" title="Add to cart"></a>
                                            <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="#" title="Quick view"></a>
                                        </div>
                                        <!-- End action -->
                                    </div>
                                    <a href="#" title="Union Bed"><p class="product-title">Rau dền</p></a>
                                    <p class="product-price-old">$700.00</p>
                                    <p class="product-price">$350.00</p>
                                </div>
                                <!-- End product -->
                            </div>
                    </div>
                </div>
                <!-- End container --> 
          </div>
          <!-- End MainContent -->

@endsection
