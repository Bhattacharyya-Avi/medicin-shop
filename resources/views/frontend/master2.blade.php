
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo - freshDesignweb</title>
    
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
    
    <link rel="stylesheet" href="{{url('/frontend/css/font-awesome.min.css')}}">
    
    <link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/css/responsive.css')}}">
    
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        @include('frontend.partials.header2')
        <div class="site-branding-area">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-sm-6">
                        <div class="logo">
                            <h1><a href="./"><script pagespeed_no_defer="" type="7a1690ed6dd246805fda4dd0-text/javascript">//<![CDATA[
                                (function(){var g=this,h=function(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};var l=function(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};var m=function(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n,p=function(b,d,a,c,e){this.f=b;this.h=d;this.i=a;this.c=e;this.e={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.g=c;this.b={};this.a=[];this.d={}},q=function(b,d){var a,c,e=d.getAttribute("pagespeed_url_hash");if(a=e&&!(e in b.d))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.e.height&&c<=b.e.width)}a&&(b.a.push(e),b.d[e]=!0)};p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});var r=function(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.i;b.c&&(a+="&n="+b.c);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.g&&(e="&rd="+encodeURIComponent(JSON.stringify(s())),131072>=a.length+e.length&&(a+=e),d=!0);t=a;if(d){c=b.f;b=b.h;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(u){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}},s=function(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("pagespeed_url_hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].k&&a.height>=b[e].j)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b},t="";h("pagespeed.CriticalImages.getBeaconData",function(){return t});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','https://freshdesignweb.com/demo/template/ustora/','YddRYU7ik1',true,false,'7DGkIGrR41s');
                                //]]></script><script src="{{url('/frontend/js/rocket-loader.min.js')}}" data-cf-settings="7a1690ed6dd246805fda4dd0-|49"></script><img src="img/logo.png" pagespeed_url_hash="1366814827" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a></h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="shopping-item">
                                <a href="{{route('product.cart')}}">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div> 
            @include('frontend.partials.sidebar2')
            
            
            @include('frontend.partials.slider2')
            
            @yield('contents')
            
            
            
            @include('frontend.partials.footer2')
            
            <script src="https://code.jquery.com/jquery.min.js" type="7a1690ed6dd246805fda4dd0-text/javascript"></script>
            
            <script src="{{url('/frontend/js/bootstrap.min.js')}}" type="7a1690ed6dd246805fda4dd0-text/javascript"></script>
            
            <script src="{{url('/frontend/js/owl.carousel.min.js')}}" type="7a1690ed6dd246805fda4dd0-text/javascript"></script>
            <script src="{{url('/frontend/js/jquery.sticky.js')}}" type="7a1690ed6dd246805fda4dd0-text/javascript"></script>
            
            <script src="{{url('/frontend/js/jquery.easing.1.3.min.js')}}" type="7a1690ed6dd246805fda4dd0-text/javascript"></script>
            
            <script src="{{url('/frontend/js/main.js')}}" type="7a1690ed6dd246805fda4dd0-text/javascript"></script>
            
            <script type="7a1690ed6dd246805fda4dd0-text/javascript" src="{{url('/frontend/js/bxslider.min.js')}}"></script>
            <script type="7a1690ed6dd246805fda4dd0-text/javascript" src="{{url('/frontend/js/script.slider.js')}}"></script>
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-10146041-25" type="7a1690ed6dd246805fda4dd0-text/javascript"></script>
            <script type="7a1690ed6dd246805fda4dd0-text/javascript">window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
                gtag('js',new Date());gtag('config','UA-10146041-25');</script>
                <script src="https://freshdesignweb.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="7a1690ed6dd246805fda4dd0-|49" defer=""></script>
                
                {{-- ssl start--}}
                <script>
                    (function (window, document) {
                        var loader = function () {
                            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                            tag.parentNode.insertBefore(script, tag);
                        };
                        
                        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                    })(window, document);
                </script>
                {{-- ssl end --}}
                
            </body>
            </html>