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
    
    @include('layout.front-layout.style')
</head> 

<body>
    <div class="wrapper">
            <!-- ****************** Header  Section ****************** -->
        <header id="header">
            @include('layout.front-layout.front-layout-partials.top-navbar')
            @include('layout.front-layout.front-layout-partials.navbar')

        </header> 
    </div>

    <!-- All pages are loaded below-->
    @yield('home-page')
    




    @include('layout.front-layout.script')
    
</body>
</html>
