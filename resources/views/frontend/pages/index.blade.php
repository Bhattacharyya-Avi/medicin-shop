@extends('frontend.master2')

@section('contents')
    <div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-refresh"></i>
                    <p>30 Days return</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-truck"></i>
                    <p>Free shipping</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-lock"></i>
                    <p>Secure payments</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <p>New products</p>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        @foreach ($products as $product)
                        <div class="single-product" style="width: 250px; height:300px; margin-right: 20px;!important;" >
                            <div class="product-f-image" style="width: 212px !important;">
                                <script src="https://freshdesignweb.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script>
                                <img width="120px !important;"  src="{{url('/uploads/'.$product->image)}}" alt="product image" >
                            </div>

                            <div class="product-hover">
                                <a href="{{route('add.product.to.cart',$product->id)}}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                <a href="{{route('single.product',$product->id)}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                            </div>

                            <h2><a href="single-product.htm">{{$product->name}}</a></h2>
                            <div class="product-carousel-price " style="  margin-left: auto; margin-right: auto; !important">
                                <p>Price {{$product->price}}</p>
                                <p>Quantity {{$product->quantity}}</p>
                                
                            </div>
                        </div> 
                        @endforeach
                    </div>
                    <br>
                    <div class="product-carousel">
                        @foreach ($products as $product)
                        <div class="single-product" style="width: 250px; height:300px; margin-right: 20px;!important;" >
                            <div class="product-f-image" style="width: 212px !important;">
                                <script src="https://freshdesignweb.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script>
                                <img width="120px !important;"  src="{{url('/uploads/'.$product->image)}}" alt="product image" >
                            </div>

                            <div class="product-hover">
                                <a href="{{route('add.product.to.cart',$product->id)}}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                <a href="{{route('single.product',$product->id)}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                            </div>

                            <h2><a href="single-product.htm">{{$product->name}}</a></h2>
                            <div class="product-carousel-price " style="  margin-left: auto; margin-right: auto; !important">
                                <p>Price {{$product->price}}</p>
                                <p>Quantity {{$product->quantity}}</p>
                                
                            </div>
                        </div> 
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> 
{{-- <div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/brand1.png" alt="" pagespeed_url_hash="2018972994" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/brand2.png" alt="" pagespeed_url_hash="2313472915" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/brand3.png" alt="" pagespeed_url_hash="2607972836" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/brand4.png" alt="" pagespeed_url_hash="2902472757" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/brand5.png" alt="" pagespeed_url_hash="3196972678" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/brand6.png" alt="" pagespeed_url_hash="3491472599" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/brand1.png" alt="" pagespeed_url_hash="2018972994" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/brand2.png" alt="" pagespeed_url_hash="2313472915" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  --}}
<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top Sellers</h2>
                    <a href="" class="wid-view-more">View All</a>
                    @foreach ($products as $product)
                    <div class="single-wid-product">
                        <a href="#"><script src="https://freshdesignweb.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="{{url('/uploads/'.$product->image)}}" alt="" class="product-thumb" pagespeed_url_hash="1733883786" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <h2><a href="single-product.htm">{{$product->name}}</a></h2>
                        {{-- <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> --}}
                        <div class="product-wid-price">
                            <p>Price {{$product->price}}</p> <p>Quantity {{$product->quantity}}</p>
                        </div>
                    </div>
                    @endforeach
                    
                    {{-- <div class="single-wid-product">
                        <a href="single-product.htm"><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/product-thumb-2.jpg" alt="" class="product-thumb" pagespeed_url_hash="2028383707" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <h2><a href="single-product.htm">Apple new mac book 2015</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.htm"><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/product-thumb-3.jpg" alt="" class="product-thumb" pagespeed_url_hash="2322883628" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <h2><a href="single-product.htm">Apple new i phone 6</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Recently Viewed</h2>
                    <a href="#" class="wid-view-more">View All</a>
                    <div class="single-wid-product">
                        <a href="single-product.htm"><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/product-thumb-4.jpg" alt="" class="product-thumb" pagespeed_url_hash="2617383549" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <h2><a href="single-product.htm">Sony playstation microsoft</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.htm"><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/product-thumb-1.jpg" alt="" class="product-thumb" pagespeed_url_hash="1733883786" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <h2><a href="single-product.htm">Sony Smart Air Condtion</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.htm"><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/product-thumb-2.jpg" alt="" class="product-thumb" pagespeed_url_hash="2028383707" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <h2><a href="single-product.htm">Samsung gallaxy note 4</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top New</h2>
                    <a href="#" class="wid-view-more">View All</a>
                    <div class="single-wid-product">
                        <a href="single-product.htm"><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/product-thumb-3.jpg" alt="" class="product-thumb" pagespeed_url_hash="2322883628" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <h2><a href="single-product.htm">Apple new i phone 6</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.htm"><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/product-thumb-4.jpg" alt="" class="product-thumb" pagespeed_url_hash="2617383549" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <h2><a href="single-product.htm">Samsung gallaxy note 4</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.htm"><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/product-thumb-1.jpg" alt="" class="product-thumb" pagespeed_url_hash="1733883786" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <h2><a href="single-product.htm">Sony playstation microsoft</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$400.00</ins> <del>$425.00</del>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div> 
@endsection
