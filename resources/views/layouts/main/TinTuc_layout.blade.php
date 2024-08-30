<!DOCTYPE html>
<html>

<head>
    <title>Tin tức</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="../css/category.css"> -->
    <link rel="stylesheet" href="{{asset('frontend/asset/css/tintuc.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/asset/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="row-flex">
                @include('layouts.parts.header')
            </div>
        </div>
    </header>
    <div class="cart-panel" id="cartPanel">
        @include('layouts.parts.cart_panel')
    </div>
    <div class="notification" id="notification">Thêm vào giỏ hàng thành công!</div>
    @Yield('content')
    <!-- Footer -->
    <div class="footer">
        @include('layouts.parts.footer')
    </div>
    <script src="{{asset('frontend/asset/javascript/cart_product.js')}}"></script>
    <script src="{{asset('frontend/asset/javascript/search_product.js')}}"></script>
    <script src="{{asset('frontend/asset/javascript/script.js')}}"></script>


</body>

</html>