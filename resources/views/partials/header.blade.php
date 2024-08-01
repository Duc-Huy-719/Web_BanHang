<header>
    <div class="container">
        <div class="row-flex">
            <div class="header-bar-icon">
                <i class="ri-menu-line"></i>
            </div>
            <div class="header-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('image/logo/logo_mango_mobile.jpg') }}" alt=""></a>
            </div>
            <div class="header-logo-mobile">
                <a href="{{ route('home') }}"><img src="{{ asset('image/logo/logo_mango_mobile.jpg') }}" alt=""></a>
            </div>
            <div class="header-nav">
                <nav>
                    <ul>
                        <li><a href="#">NỮ</a>
                            <ul class="sub-menu">
                                <li><a href="#">Áo</a>
                                    <ul>
                                        <li><a href="{{ route('product.category', 'ao-so-mi-nu') }}">Áo sơ mi</a></li>
                                        <li><a href="{{ route('product.category', 'ao-thun-nu') }}">Áo thun</a></li>
                                        <li><a href="{{ route('product.category', 'ao-khoac-nu') }}">Áo khoác</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Quần</a>
                                    <ul>
                                        <li><a href="{{ route('product.category', 'quan-jean-nu') }}">Quần jean</a></li>
                                        <li><a href="{{ route('product.category', 'quan-short-nu') }}">Quần short</a>
                                        </li>
                                        <li><a href="{{ route('product.category', 'quan-dai-nu') }}">Quần dài</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">NAM</a>
                            <ul class="sub-menu">
                                <li><a href="#">Áo</a>
                                    <ul>
                                        <li><a href="{{ route('product.category', 'ao-so-mi-nam') }}">Áo sơ mi</a></li>
                                        <li><a href="{{ route('product.category', 'ao-thun-nam') }}">Áo thun</a></li>
                                        <li><a href="{{ route('product.category', 'ao-khoac-nam') }}">Áo khoác</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Quần</a>
                                    <ul>
                                        <li><a href="{{ route('product.category', 'quan-jean-nam') }}">Quần jean</a>
                                        </li>
                                        <li><a href="{{ route('product.category', 'quan-short-nam') }}">Quần short</a>
                                        </li>
                                        <li><a href="{{ route('product.category', 'quan-dai-nam') }}">Quần dài</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('product.category', 'dam-nu') }}">ĐẦM</a></li>
                        <li><a href="{{ route('news') }}">TIN TỨC</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header">
                <div class="header-search">
                    <input type="text" id="search" placeholder="Tìm kiếm">
                    <i class="ri-search-line"></i>
                </div>
                <div class="header-user">
                    <a href="{{ route('login') }}"><i class="ri-user-line" href="#"></i></a>
                </div>
                <div class="header-cart">
                    <a href="{{ route('cart') }}"><i class="ri-shopping-cart-line" number="0" href="#"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>