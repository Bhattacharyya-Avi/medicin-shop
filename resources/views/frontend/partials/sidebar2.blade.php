<div class="mainmenu-area">
                <div class="container">
                    <div class="row">
                        {{-- <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div> --}}
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="{{route('home')}}">Home</a></li>
                                {{-- <li><a href="shop.htm">Shop page</a></li> --}}
                                {{-- <li><a href="single-product.htm">Single product</a></li> --}}
                                {{-- <li><a href="#">Category</a></li>--}}
                                {{--<li><a href="#">Others</a></li> --}}
                                
                                @if(auth()->user())
                                    <li><a href="{{route('product.cart')}}">Cart</a></li>
                                    <li><a href="#">{{auth()->user()->name}}</a></li>
                                    <li><a href="{{route('user.logout')}}">Logout</a></li>
                                @else
                                <li><a href="{{route('user.login')}}">Login</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 