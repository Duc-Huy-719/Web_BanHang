<!DOCTYPE html>
<html>

<head>
    @include('layouts.parts.head')
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
    <!-- order-detail-->
    @Yield('content')
    <!-- Footer -->
    <div class="footer">
        @include('layouts.parts.footer')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="{{asset('frontend/asset/javascript/apiprovince.js')}}"></script>
    <script src="{{asset('frontend/asset/javascript/cart_product.js')}}"></script>
    <script src="{{asset('frontend/asset/javascript/script.js')}}"></script>