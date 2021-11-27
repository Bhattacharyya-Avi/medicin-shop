@extends('frontend.master2')

@section('contents')


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Search Products</h2>
                    <form action="">
                        <input type="text" placeholder="Search products...">
                        <input type="submit" value="Search">
                    </form>
                </div>
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Products</h2>
                    <div class="thubmnail-recent">
                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9d4dd2a2ab8fa65799427efb-|49"></script><img src="img/product-thumb-1.jpg" class="recent-thumb" alt="" pagespeed_url_hash="1733883786" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div>
                    </div>
                    <div class="thubmnail-recent">
                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9d4dd2a2ab8fa65799427efb-|49"></script><img src="img/product-thumb-1.jpg" class="recent-thumb" alt="" pagespeed_url_hash="1733883786" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div>
                    </div>
                    <div class="thubmnail-recent">
                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9d4dd2a2ab8fa65799427efb-|49"></script><img src="img/product-thumb-1.jpg" class="recent-thumb" alt="" pagespeed_url_hash="1733883786" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div>
                    </div>
                    <div class="thubmnail-recent">
                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9d4dd2a2ab8fa65799427efb-|49"></script><img src="img/product-thumb-1.jpg" class="recent-thumb" alt="" pagespeed_url_hash="1733883786" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins> <del>$100.00</del>
                        </div>
                    </div>
                </div>
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Recent Posts</h2>
                    <ul>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                        <li><a href="">Sony Smart TV - 2015</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="">Home</a>
                        <a href="">Category Name</a>
                        <a href="">{{$product->name}}</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9d4dd2a2ab8fa65799427efb-|49"></script><img src="{{url('/uploads/'.$product->image)}}" alt="Product image" pagespeed_url_hash="798848650" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="product-gallery">
                                    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9d4dd2a2ab8fa65799427efb-|49"></script><img src="{{url('/uploads/'.$product->image)}}" alt="Product image" pagespeed_url_hash="1733883786" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9d4dd2a2ab8fa65799427efb-|49"></script><img src="{{url('/uploads/'.$product->image)}}" alt="Product image" pagespeed_url_hash="2028383707" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9d4dd2a2ab8fa65799427efb-|49"></script><img src="{{url('/uploads/'.$product->image)}}" alt="Product image" pagespeed_url_hash="2322883628" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name">{{$product->name}}</h2>
                                <div class="product-inner-price">
                                    <p>Price {{$product->price}}</p>
                                    <p>Quantity {{$product->quantity}}</p>
                                </div>
                                <form action="{{route('product.add.cart',$product->id)}}" method="POST" class="cart">
                                    @csrf
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    </div>
                                    <button class="add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                                <div class="product-inner-category">
                                    <p>
                                        Category: <a href="">{{$product->category->name}}</a>. 
                                        {{-- Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>.  --}}
                                    </p>
                                </div>
                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Product Description</h2>
                                            <p>{{$product->description}}</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <h2>Reviews</h2>
                                            <div class="submit-review">
                                                <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                <div class="rating-chooser">
                                                    <p>Your rating</p>
                                                    <div class="rating-wrap-post">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                <p><input type="submit" value="Submit"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">Related Products</h2>
                        <div class="related-products-carousel">
                            @foreach ($related as $item)
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9d4dd2a2ab8fa65799427efb-|49"></script><img src="{{url('/uploads/'.$item->image)}}" alt="" pagespeed_url_hash="504348729" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="{{route('single.product',$item->id)}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                    <h2><a href="">{{$item->name}}</a></h2>
                                    <div class="product-carousel-price">
                                       <p>Price {{$item->price}}</p>
                                       <p>Quantity {{$item->quantity}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection              