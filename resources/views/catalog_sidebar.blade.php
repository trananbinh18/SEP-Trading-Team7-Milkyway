@extends('layout.master')
@section (' title ')
Danh sách sản phẩm
@stop
@section('content')
                <?php $loaisp = App\loaisanpham::all();?>
    <div class="container">
            <div class="banner-header banner-lbook3 space-30">
                <img src="{{url('resources/assets/images/banner/1.png')}}" alt="Banner-header">
            </div>
        </div>
         <!-- End Banner Grid -->
        <div class="container">
            <div id="primary" class="col-xs-12 col-md-9">  
                    <div class="wrap-breadcrumb">
                        <div class="ordering">
                            <div class="float-left">
                                <span class="col active"></span>
                                <span class="list"></span>
                                <p class="result-count">Hiển thị 1-16 trong 30 kết quả</p>
                            </div>
                            <div class="float-right">
                            <form action="#" method="get" class="order-by">
                                <p>Sắp xếp theo :</p>
                                <select id='sortbar' class="orderby" name="orderby">
                                        <option value="moi">Mới</option>
                                        <option value="tc">Giá: từ thấp đến cao</option>
                                        <option value="ct">Giá: từ cao đến thấp</option>
                                </select>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="products ver2 grid_full grid_sidebar hover-shadow furniture">
                        @foreach ($sanpham as $pham)
                            <div class="item-inner">
                                <div class="product">
                                    <div class="product-images">
                                        <a href="{{url('Productdetail',[$pham['MASP']])}}" title="product-images">
                                            <img class="primary_image" src="{!!url("resources/assets/images/products/{$pham['HINH']}")!!}" alt=""/>
                                            <img class="secondary_image" src="{!!url("resources/assets/images/products/{$pham['HINH']}")!!}" alt=""/>
                                        </a>
                                    </div>
                                    <a href="{{url('Productdetail',[$pham['MASP']])}}" title="Bouble Fabric Blazer"><p class="product-title">{{$pham['TENSP']}}</p></a>
                                    <p class="product-price-old">@if ($pham['GIACU'] != 0) {{$pham['GIACU']}} VNĐ @endif</p>
                                    <p class="product-price">{{$pham['GIA']}} VND</p>
                                    <p class="description">{{$pham['MOTA']}}</p>
                                    <div class="action">
                                            @if(session()->get('typeuser')==2)
                                            <a class="add-cart" href="{{url('AddToCart',[$pham['MASP']])}}" title="Add to cart"></a>
                                            @endif
                                            @if(session()->get('typeuser')!==2)
                                            <a class="add-cart" href="{{route('signin')}}" title="Add to cart"></a>
                                            @endif
                                            {{-- <a class="wish" href="#" title="Wishlist"></a>
                                            <a class="zoom" href="{{url('Productdetail',[$pham['MASP']])}}" title="Quick view"></a> --}}
                                        </div>
                                        <!-- End action -->
                                    <div class="social box">
                                        <h3>Share this :</h3>
                                        <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
                                        <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
                                        <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
                                        <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
                                        <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                            </div>
                        @endforeach                  
                    </div>
                    <!-- End product-content products  -->
                    <div class="pagination-container">
                        <nav class="pagination align-center">
                            @if($sanpham->currentPage()!=1)
                            <a class="prev page-numbers" href="{{$sanpham->url($sanpham->currentPage() - 1) }}"><i class="fa fa-angle-left"></i></a>
                            @endif
                            @for($i = 1;$i <= $sanpham->lastPage();$i= $i + 1)
                            <a href="{{$sanpham->url($i)}}"><span class="page-numbers current">{{$i}}</span></a>   
                            @endfor
                            @if($sanpham->currentPage()!=$sanpham->lastPage())                        
                            <a class="next page-numbers" href="{{$sanpham->url($sanpham->currentPage() + 1) }}"><i class="fa fa-angle-right"></i></a>
                            @endif
                        </nav>
                    </div>
                    <!-- End pagination-container -->
                </div>
                <!-- End Primary -->
            <div id="secondary" class="widget-area col-xs-12 col-md-3">
                <aside class="widget widget_product_categories">
                    <h3 class="widget-title">Danh mục</h3>
                    <ul class="product-categories">
                        <li><a class="loaisp" title="0">TẤT CẢ SẢN PHẨM</a></li>
                        <li><a class="loaisp" title="-1">SẢN PHẨM KHUYỄN MÃI</a></li>
                        @foreach($loaisp as $loai)  
                        <li><a class="loaisp" title="{{$loai['MALOAISP']}}">{{$loai['TENLOAISP']}}</a></li>
                        @endforeach
                    </ul>
                </aside>
                <aside class="widget widget_feature">
                    <h3 class="widget-title">SẢN PHẨM liên quan</h3>
                    <ul id="lsProductRelate">  
                        @for($i = 0; $i < 4; $i++)  
                        @if($sanpham->get($i)!=null)
                            <li>
                            <a class="images" href="{{url('Productdetail',$sanpham->get($i)["MASP"])}}" title="images">
                                <img class="img-responsive" src='{!!url("resources/assets/images/products/{$sanpham->get($i)['HINH']}")!!}' alt="images">
                            </a>
                            <div class="text">
                                <h2>
                                    <a href="{{url('Productdetail',[$sanpham->get($i)['MASP']])}}" title="Butterfly Bar Stool">{{$sanpham->get($i)['TENSP']}}</a>
                                </h2>
                                <p><span>{{$sanpham->get($i)['GIA']}} VND</span></p>
                                <p class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </p>
                            </div>
                        </li>
                        @else
                            @break
                        @endif                      
                        @endfor
                    </ul>

                        
                </aside>
            </div>
            <!-- End Secondary -->
        </div>
        <!-- end product sidebar -->

        <script type="text/javascript">
    $(document).ready(function(){
    var sx = "moi";
    var dm = "0";
    var page = 1;
    var pathname = getAbsolutePath();
    $("#sortbar").change(function(){
        sx = $(this).val();
        $(".products").empty();
        $.getJSON('ProductFilter/'+dm+'/'+sx, function (data){
            var numofpage = (data.length/16)+1;
            numofpage = parseInt(numofpage);
            var i=(page-1)*16;
            var lim = (page*16);
            for(i;i<data.length; i++){
                if(i==lim){
                    break;
                }
            $(".products").append("<div class='item-inner'><div class='product'><div class='product-images'><a href='"+pathname+"/Productdetail/"+data[i].MASP+"' title='product-images'><img class='primary_image' src='resources/assets/images/products/"+data[i].HINH+"' alt=''/><img class='secondary_image' src='resources/assets/images/products/"+data[i].HINH+"' alt=''/></a></div><a href='"+pathname+"/Productdetail/"+data[i].MASP+"' title='Bouble Fabric Blazer'><p class='product-title'>"+data[i].TENSP+"</p></a><p class='product-price-old'>"+checkGiaCu(data[i].GIACU)+"</p><p class='product-price'>"+data[i].GIA+" VND</p><p class='description'>"+data[i].MOTA+"</p><div class='action'>"+checkUsertype(data[i].MASP,pathname)+"</div><div class='social box'><h3>Share this :</h3><a class='twitter' href='#' title='social'><i class='fa fa-twitter-square'></i></a><a class='dribbble' href='#' title='social'><i class='fa fa-dribbble'></i></a><a class='skype' href='#' title='social'><i class='fa fa-skype'></i></a><a class='pinterest' href='#' title='social'><i class='fa fa-pinterest'></i></a><a class='facebook' href='#' title='social'><i class='fa fa-facebook-square'></i></a></div></div></div>");
            }

            $(".pagination").empty();
            //paging
            for(var j=0;j<numofpage;j++){
                var pagethis = j+1;
                $(".pagination").append("<a href='#'><span class='page-numbers current'>"+ pagethis +"</span></a>")
            }
            $(".page-numbers").click(function(){
                page = parseInt($(this).html());
                $(".products").empty();
                var i=(page-1)*16;
                var lim = (page*16);
                for(i;i<data.length; i++){
                    console.log(i);
                    if(i==lim){
                        break;
                    }
            $(".products").append("<div class='item-inner'><div class='product'><div class='product-images'><a href='"+pathname+"/Productdetail/"+data[i].MASP+"' title='product-images'><img class='primary_image' src='resources/assets/images/products/"+data[i].HINH+"' alt=''/><img class='secondary_image' src='resources/assets/images/products/"+data[i].HINH+"' alt=''/></a></div><a href='"+pathname+"/Productdetail/"+data[i].MASP+"' title='Bouble Fabric Blazer'><p class='product-title'>"+data[i].TENSP+"</p></a><p class='product-price-old'>"+checkGiaCu(data[i].GIACU)+"</p><p class='product-price'>"+data[i].GIA+" VND</p><p class='description'>"+data[i].MOTA+"</p><div class='action'>"+checkUsertype(data[i].MASP,pathname)+"</div><div class='social box'><h3>Share this :</h3><a class='twitter' href='#' title='social'><i class='fa fa-twitter-square'></i></a><a class='dribbble' href='#' title='social'><i class='fa fa-dribbble'></i></a><a class='skype' href='#' title='social'><i class='fa fa-skype'></i></a><a class='pinterest' href='#' title='social'><i class='fa fa-pinterest'></i></a><a class='facebook' href='#' title='social'><i class='fa fa-facebook-square'></i></a></div></div></div>");
            
            }
            });
        });
    });
    $("li .loaisp").click(function(){
        dm = $(this).attr('title');
        $(".products").empty();
        $.getJSON('ProductFilter/'+dm+'/'+sx, function (data){
        	$("#lsProductRelate").empty();
        	for (var i = data.length - 1; i >= data.length-4; i--) {
        		if(data[i]!=null){
        		$("#lsProductRelate").append("<li><a class='images' href='Productdetail/"+data[i].MASP+"' title='images'><img class='img-responsive' src='resources/assets/images/products/"+data[i].HINH+"' alt='images'></a><div class='text'><h2><a href='Productdetail/"+data[i].MASP+"' title='Butterfly Bar Stool'>"+data[i].TENSP+"</a></h2><p><span>"+data[i].GIA+" VND</span></p><p class='rating'><i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star-half-o' aria-hidden='true'></i></p></div></li>");
        		}else{
        			break;
        		}
        	}
            var numofpage = (data.length/16)+1;
            numofpage = parseInt(numofpage);
            var i=(page-1)*16;
            var lim = (page*16);
            for(i;i<data.length; i++){
                if(i==lim){
                    break;
                }
                $(".products").append("<div class='item-inner'><div class='product'><div class='product-images'><a href='"+pathname+"/Productdetail/"+data[i].MASP+"' title='product-images'><img class='primary_image' src='resources/assets/images/products/"+data[i].HINH+"' alt=''/><img class='secondary_image' src='resources/assets/images/products/"+data[i].HINH+"' alt=''/></a></div><a href='"+pathname+"/Productdetail/"+data[i].MASP+"' title='Bouble Fabric Blazer'><p class='product-title'>"+data[i].TENSP+"</p></a><p class='product-price-old'>"+checkGiaCu(data[i].GIACU)+"</p><p class='product-price'>"+data[i].GIA+" VND</p><p class='description'>"+data[i].MOTA+"</p><div class='action'>"+checkUsertype(data[i].MASP,pathname)+"</div><div class='social box'><h3>Share this :</h3><a class='twitter' href='#' title='social'><i class='fa fa-twitter-square'></i></a><a class='dribbble' href='#' title='social'><i class='fa fa-dribbble'></i></a><a class='skype' href='#' title='social'><i class='fa fa-skype'></i></a><a class='pinterest' href='#' title='social'><i class='fa fa-pinterest'></i></a><a class='facebook' href='#' title='social'><i class='fa fa-facebook-square'></i></a></div></div></div>");
            }

            $(".pagination").empty();
            //paging
            for(var j=0;j<numofpage;j++){
                var pagethis = j+1;
                $(".pagination").append("<a href='#'><span class='page-numbers current'>"+ pagethis +"</span></a>")
            }
            $(".page-numbers").click(function(){
                page = parseInt($(this).html());
                $(".products").empty();
                var i=(page-1)*16;
                var lim = (page*16);
                for(i;i<data.length; i++){
                    if(i==lim){
                        break;
                    }
                    $(".products").append("<div class='item-inner'><div class='product'><div class='product-images'><a href='"+pathname+"/Productdetail/"+data[i].MASP+"' title='product-images'><img class='primary_image' src='resources/assets/images/products/"+data[i].HINH+"' alt=''/><img class='secondary_image' src='resources/assets/images/products/"+data[i].HINH+"' alt=''/></a></div><a href='"+pathname+"/Productdetail/"+data[i].MASP+"' title='Bouble Fabric Blazer'><p class='product-title'>"+data[i].TENSP+"</p></a><p class='product-price-old'>"+checkGiaCu(data[i].GIACU)+"</p><p class='product-price'>"+data[i].GIA+" VND</p><p class='description'>"+data[i].MOTA+"</p><div class='action'>"+checkUsertype(data[i].MASP,pathname)+"</div><div class='social box'><h3>Share this :</h3><a class='twitter' href='#' title='social'><i class='fa fa-twitter-square'></i></a><a class='dribbble' href='#' title='social'><i class='fa fa-dribbble'></i></a><a class='skype' href='#' title='social'><i class='fa fa-skype'></i></a><a class='pinterest' href='#' title='social'><i class='fa fa-pinterest'></i></a><a class='facebook' href='#' title='social'><i class='fa fa-facebook-square'></i></a></div></div></div>");
            }
            });
        });
    });
});
        </script>
@endsection