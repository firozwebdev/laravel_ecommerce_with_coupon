<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="format-detection" content = "telephone=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Chocalate</title>
    
    @include('front-end.common-parts.css.style')
</head> 

<body>
    <div class="wrapper">
            <!-- ****************** Header  Section ****************** -->
        <header id="header">
            @include('front-end.common-parts.navbar.top-navbar')
            @include('front-end.common-parts.navbar.navbar')
            

        </header> 
    </div>

    <!-- All pages are loaded below-->
    @yield('home-page')
    @yield('shop-page')
    @yield('cart-page')
    @yield('product-detail-page')
    @yield('checkout-page')
    
    


    <div class="wrapper">
        <!-- ****************** Footer Section ****************** -->
        @include('front-end.common-parts.footer.footer')
    </div>

    @include('front-end.common-parts.js.script')
    <!--All new javascript will go here -->
    
</body>
</html>
