@extends('backend.master')

@section('contents')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Single Product </h2>
            {{-- <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis
                faucibus at enim quis massa lobortis rutrum.</p> --}}
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">E-coommerce</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-Commerce Product Single</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                <div class="product-slider">
                    <div id="productslider-1" class="product-carousel carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block" src="assets/images/eco-slider-img-1.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="assets/images/eco-slider-img-2.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="assets/images/eco-slider-img-3.png" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                <div class="product-details">
                    {{-- <form action=""></form> --}}
                    <div class="border-bottom pb-3 mb-3">
                        <h2 class="mb-3"><input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Product Name"></h2>
                        
                        <h3 class="mb-0 text-primary"><input name="price" type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="Product price"></h3>
                    </div>
                    <div class="product-size border-bottom">
                        <h4>product quantity</h4>
                        <div class="btn-group" role="group" aria-label="First group">
                            <input name="quantity" type="number" class="form-control" id="exampleFormControlInput1"
                            placeholder="Product quantity">
                        </div>
                        <div class="product-qty">
                            
                            
                        </div>
                    </div>
                    <div class="product-description">
                        <h4 class="mb-1">Product Details</h4>
                        <p><input name="details" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Product details"></p>
                        <a href="#" class="btn btn-primary btn-block btn-lg">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-b-60">
                <div class="simple-card">
                    {{-- <ul class="nav nav-tabs" id="myTab5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active border-left-0" id="product-tab-1" data-toggle="tab" href="#tab-1"
                                role="tab" aria-controls="product-tab-1" aria-selected="true">Descriptions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-2" data-toggle="tab" href="#tab-2" role="tab"
                                aria-controls="product-tab-2" aria-selected="false">Reviews</a>
                        </li>
                    </ul> --}}
                    {{-- <div class="tab-content" id="myTabContent5">
                         <div class="tab-pane fade show active" id="tab-1" role="tabpanel"
                            aria-labelledby="product-tab-1">
                            <p>Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse
                                nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                cubiliaurae.</p>
                            <p>Nam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat
                                elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit
                                nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget
                                diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.</p>
                            <ul class="list-unstyled arrow">
                                <li>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li>Donec ut elit sodales, dignissim elit et, sollicitudin nulla.</li>
                                <li>Donec at leo sed nisl vestibulum fermentum.
                                </li>
                            </ul>
                        </div> 
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="product-tab-2">
                            <div class="review-block">
                                <p class="review-text font-italic m-0">“Vestibulum cursus felis vel arcu convallis,
                                    viverra commodo felis bibendum. Orci varius natoque penatibus et magnis dis
                                    parturient montes, nascetur ridiculus mus. Proin non auctor est, sed lacinia velit.
                                    Orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus
                                    mus.”</p>
                                <div class="rating-star mb-4">
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                </div>
                                <span class="text-dark font-weight-bold">Virgina G. Lightfoot</span><small
                                    class="text-mute"> (Company name)</small>
                            </div>
                            <div class="review-block border-top mt-3 pt-3">
                                <p class="review-text font-italic m-0">“Integer pretium laoreet mi ultrices tincidunt.
                                    Suspendisse eget risus nec sapien malesuada ullamcorper eu ac sapien. Maecenas nulla
                                    orci, varius ac tincidunt non, ornare a sem. Aliquam sed massa volutpat, aliquet
                                    nibh sit amet, tincidunt ex. Donec interdum pharetra dignissim.”</p>
                                <div class="rating-star mb-4">
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                </div>
                                <span class="text-dark font-weight-bold">Ruby B. Matheny</span><small class="text-mute">
                                    (Company name)</small>
                            </div>
                            <div class="review-block  border-top mt-3 pt-3">
                                <p class="review-text font-italic m-0">“ Cras non rutrum neque. Sed lacinia ex elit, vel
                                    viverra nisl faucibus eu. Aenean faucibus neque vestibulum condimentum maximus. In
                                    id porttitor nisi. Quisque sit amet commodo arcu, cursus pharetra elit. Nam
                                    tincidunt lobortis augueat euismod ante sodales non. ”</p>
                                <div class="rating-star mb-4">
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                </div>
                                <span class="text-dark font-weight-bold">Gloria S. Castillo</span><small
                                    class="text-mute"> (Company name)</small>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-b-10">
                <h3> Related Products</h3>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="product-thumbnail">
                    <div class="product-img-head">
                        <div class="product-img">
                            <img src="assets/images/eco-product-img-1.png" alt="" class="img-fluid"></div>
                        <div class="ribbons">New</div>
                        <div class=""><a href="#" class="product-wishlist-btn"><i class="fas fa-heart"></i></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-content-head">
                            <h3 class="product-title">T-Shirt Product Title</h3>
                            <div class="product-rating d-inline-block">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="product-price">$49.00</div>
                        </div>
                        <div class="product-btn">
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-outline-light">Details</a>
                            <a href="#" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="product-thumbnail">
                    <div class="product-img-head">
                        <div class="product-img">
                            <img src="assets/images/eco-product-img-2.png" alt="" class="img-fluid"></div>
                        <div class="ribbons bg-danger">Sold</div>
                        <div class=""><a href="#" class="product-wishlist-btn"><i class="fas fa-heart"></i></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-content-head">
                            <h3 class="product-title">T-Shirt Product Title</h3>
                            <div class="product-rating d-inline-block">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="product-price">$49.00</div>
                        </div>
                        <div class="product-btn">
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-outline-light">Details</a>
                            <a href="#" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="product-thumbnail">
                    <div class="product-img-head">
                        <div class="product-img">
                            <img src="assets/images/eco-product-img-3.png" alt="" class="img-fluid"></div>
                        <div class="ribbons bg-brand">Offer</div>
                        <div class=""><a href="#" class="product-wishlist-btn active"><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-content-head">
                            <h3 class="product-title">T-Shirt Product Title</h3>
                            <div class="product-rating d-inline-block">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="product-price">$49.00
                                <del class="product-del">$69.00</del>
                            </div>
                        </div>
                        <div class="product-btn">
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-outline-light">Details</a>
                            <a href="#" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
</div>
@endsection
