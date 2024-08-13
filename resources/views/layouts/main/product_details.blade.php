<!DOCTYPE html>
<html>

<head>
    @include('layouts.parts.head')
    <link rel="stylesheet" href="{{asset('frontend/asset/css/product.css')}}">
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
    <!-- product-detail -->
    @Yield('content')
    <!--hot-product  -->
    <section class="hot-products">
        <div class="container">
            <div class="row-grid">
                <p class="heading-text">Sản Phẩm Mới</p>
            </div>
            @Yield('product')
        </div>
    </section>
    <!-- Footer -->
    <div class="footer">
        @include('layouts.parts.footer')
    </div>
    <script src="{{asset('frontend/asset/javascript/cart_product.js')}}"></script>
    <script src="{{asset('frontend/asset/javascript/search_product.js')}}"></script>
    <script src="{{asset('frontend/asset/javascript/script.js')}}"></script>


</body>

</html>