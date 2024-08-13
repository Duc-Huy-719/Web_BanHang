<div class="header-bar-icon">
    <i class="ri-menu-line"></i>
</div>
<div class="header-logo">
    <a href="{{asset('/layouts')}}"><img src="{{asset('frontend/asset/image/logo/logo_mango_mobile.jpg')}}" alt=""></a>
</div>
<div class="header-logo-mobile">
    <a href="{{asset('/layouts')}}"><img src="{{asset('frontend/asset/image/logo/logo_mango_mobile.jpg')}}" alt=""></a>
</div>
<div class="header-nav">
    <nav>
        <ul>
            <li><a href="#">NỮ</a>
                <ul class="sub-menu">
                    <li><a href="#">Áo</a>
                        <ul>
                            <li><a href="{{asset('/layouts/product/AoSoMiNu')}}">Áo sơ mi</a></li>
                            <li><a href="{{asset('/layouts/product/AoThunNu')}}">Áo thun</a></li>
                            <li><a href="{{asset('/layouts/product/AoKhoacNu')}}">Áo khoác</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Quần</a>
                        <ul>
                            <li><a href="{{asset('/layouts/product/QuanJeanNu')}}">Quần jean</a></li>
                            <li><a href="{{asset('/layouts/product/QuanShortNu')}}">Quần short</a></li>
                            <li><a href="{{asset('/layouts/product/QuanDaiNu')}}">Quần dài</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">NAM</a>
                <ul class="sub-menu">
                    <li><a href="#">Áo</a>
                        <ul>
                            <li><a href="{{asset('/layouts/product/AoSoMiNam')}}">Áo sơ mi</a></li>
                            <li><a href="{{asset('/layouts/product/AoThunNam')}}">Áo thun</a></li>
                            <li><a href="{{asset('/layouts/product/AoKhoacNam')}}">Áo khoác</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Quần</a>
                        <ul>
                            <li><a href="{{asset('/layouts/product/QuanJeanNam')}}">Quần jean</a></li>
                            <li><a href="{{asset('/layouts/product/QuanShortNam')}}">Quần short</a></li>
                            <li><a href="{{asset('/layouts/product/QuanDaiNam')}}">Quần dài</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="{{asset('/layouts/product/DamNu')}}">ĐẦM</a></li>
            <li><a href="{{asset('/layouts/TinTuc')}}">TIN TỨC</a></li>
        </ul>
    </nav>
</div>
<div class="header">
    <div class="header-search">
        <input type="text" name="" id="search-item" placeholder="Tìm kiếm" onkeyup="search()">
        <i class="ri-search-line"></i>
    </div>
    <div class="header-user">
        <a href="{{asset('/layouts/login_register')}}"><i class="ri-user-line" href="#"></i></a>
    </div>
    <div class="header-cart">
        <a href="#"><i class="ri-shopping-cart-line" id="cartIcon"></i></a>
        <span class="cart-count">0</span>
    </div>
</div>