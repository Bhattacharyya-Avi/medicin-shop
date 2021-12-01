@extends('frontend.master2')
@section('contents')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    @php
        $carts = session('cart');
        // dd($carts);
        
    @endphp

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            {{-- <form method="post" action="#"> --}}
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $totalPrice = 0;
                                    @endphp
                                    <tbody>
                                        @if (!empty($carts))
                                            @foreach($carts as $key=>$cart)
                                                <tr class="cart_item">
                                                    <td class="product-remove">
                                                        <a title="Remove this item" class="remove" href="#">×</a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="#"><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="831c8b05fb7a8146188970c0-|49"></script><img width="145" height="145" alt="Product image" class="shop_thumbnail" src="{{url('/uploads/'.$cart['image'])}}" pagespeed_url_hash="2028383707" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">{{$cart['name']}}</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amount">{{$cart['price']}}</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <div class="quantity buttons_added">
                                                            <form action="{{route('update.cart')}}" method="post">
                                                                @csrf
                                                                <input type="hidden" value="{{$key}}" name="cart_id">
                                                                <input type="number" value="{{$cart['quantity']}}" name="quantity" min="1" oninput="this.value = Math.abs(this.value)">
                                                                <button class="btn btn-primary" style=" margin-left: 70px; height: 35px"
                                                                    type="submit">Update
                                                                </button>
                                                            </form>
                                                            {{-- <input type="button" class="minus" value="-">
                                                            <input name="quantity" type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                                            <input type="button" class="plus" value="+"> --}}

                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="amount">{{$cart['total_price']}}</span>
                                                    </td>
                                                    @php
                                                        $item_total = $cart['total_price'];
                                                        $totalPrice = $item_total + $totalPrice;
                                                    @endphp
                                                </tr> 
                                            @endforeach
                                            @else
                                            <td><h4>cart is empty</h4></td>
                                            
                                        @endif
                                        
                                        
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <div class="coupon">
                                                    <label for="coupon_code">Coupon:</label>
                                                    <input type="text" placeholder="Coupon code" value="enter code" id="coupon_code" class="input-text" name="coupon_code">
                                                    <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                                </div>
                                                <a href="{{route('cart.distroy')}}" class="btn btn-danger">Delete Cart</a>
                                                <a href="#" name="proceed" class="btn btn-primary">Checkout</a>
                                                <a href="{{route('home')}}" class="btn btn-primary">Continue Shopping</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            {{-- </form> --}}
                            <div class="cart-collaterals">
                                
                                <div class="cart_totals ">
                                    <h2>Cart Totals</h2>
                                    <table cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">{{$totalPrice}}</span></td>
                                            </tr>
                                            {{-- <tr class="shipping">
                                                <th>Shipping and Handling</th>
                                                <td>Free Shipping</td>
                                            </tr> --}}
                                            {{-- <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">£15.00</span></strong> </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                                <form method="post" action="#" class="shipping_calculator">
                                    <h2><a class="shipping-calculator-button" data-toggle="collapse" href="#calcalute-shipping-wrap" aria-expanded="false" aria-controls="calcalute-shipping-wrap">Shipping Area</a></h2>
                                    <section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="" >Inside Dhaka
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="" >Outside Dhaka
                                            </label>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection