@extends('layouts.main.product')
@section('content')
<section class="cartegory">
    <div class="container">
        <div class="cartegory-top ">
            <p><a href="{{asset('/layouts')}}">Trang chủ</a></p></a> <span>&#10230; </span>
            <p>Nam</p> <span>&#10230;</span>
            <p>Áo Sơ Mi Nam</p>
        </div>
    </div>

    <div class="container">
        <div class="row-2">
            <div class="cartegory-left">
                <ul>
                    <li class="cartegory-left-li"><a href="#">NỮ</a>
                        <ul>
                            <li><a href="">ÁO NỮ</a>
                                <ul>
                                    <li><a href="{{asset('/layouts/product/AoSoMiNu')}}">Áo sơ mi</a></li>
                                    <li><a href="{{asset('/layouts/product/AoThunNu')}}">Áo thun</a></li>
                                    <li><a href="{{asset('/layouts/product/AoKhoacNu')}}">Áo khoác</a></li>
                                </ul>
                            </li>
                            <li><a href="">QUẦN NỮ</a>
                                <ul>
                                    <li><a href="{{asset('/layouts/product/QuanJeanNu')}}">Quần jean</a></li>
                                    <li><a href="{{asset('/layouts/product/QuanShortNu')}}">Quần short</a></li>
                                    <li><a href="{{asset('/layouts/product/QuanDaiNu')}}">Quần dài</a></li>
                                </ul>
                            </li>
                            <li><a href="#">ĐẦM NỮ</a>
                                <ul>
                                    <li><a href="{{asset('/layouts/product/DamNu')}}">Váy/đầm
                                            nữ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="cartegory-left-li"><a href="#">NAM</a>
                        <ul>
                            <li><a href="">ÁO NAM</a>
                                <ul>
                                    <li><a href="{{asset('/layouts/product/AoSoMiNam')}}">Áo sơ mi</a></li>
                                    <li><a href="{{asset('/layouts/product/AoThunNam')}}">Áo thun</a></li>
                                    <li><a href="{{asset('/layouts/product/AoKhoacNam')}}">Áo khoác</a></li>
                                </ul>
                            </li>
                            <li><a href="">QUẦN NAM</a>
                                <ul>
                                    <li><a href="{{asset('/layouts/product/QuanJeanNam')}}">Quần jean</a></li>
                                    <li><a href="{{asset('/layouts/product/QuanShortNam')}}">Quần short</a></li>
                                    <li><a href="{{asset('/layouts/product/QuanDaiNam')}}">Quần dài</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="cartegory-right">

                <div class="cartegory-right-top">
                    <h1 class="sub-title-main">ÁO SƠ MI NAM</h1>
                    <div class="sort-dropdown">
                        <select id="sortSelect">
                            <option value="default">Sắp xếp theo</option>
                            <option value="newest">Mới nhất</option>
                            <option value="bestseller">Được mua nhiều nhất</option>
                            <option value="priceHighToLow">Giá: cao đến thấp</option>
                            <option value="priceLowToHigh">Giá: thấp đến cao</option>
                        </select>
                    </div>
                </div>
                <!------------ Thumbnail ------------------>
                <div class="container">
                    <div class="row-grid row-grid-hot-product">
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product1.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoSoMiNam/product1')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo Sơ Mi Nam Tay Ngắn</a></p>
                            <span>Tuysi</span>
                            <div class="product-item-price">
                                <p>250,000<sup>đ</sup> <span>270,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product2.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoSoMiNam/product2')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo Sơ mi nam tay ngắn</a></p>
                            <span>Tuysi</span>
                            <div class="product-item-price">
                                <p>250,000<sup>đ</sup> <span>270,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product3.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoSoMiNam/product3')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo sơ mi họa tiết</a></p>
                            <span>Lụa</span>
                            <div class="product-item-price">
                                <p>290,000<sup>đ</sup> <span>320,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product4.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoSoMiNam/product4')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo Sơ mi dài tay Café-DriS</a></p>
                            <span>Vải thô</span>
                            <div class="product-item-price">
                                <p>310,000<sup>đ</sup> <span>330,0000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product5.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoSoMiNam/product5')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo Sơ mi nam tay ngắn</a></p>
                            <span>Vải thô</span>
                            <div class="product-item-price">
                                <p>295,000<sup>đ</sup> <span>335,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product6.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoSoMiNam/product6')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo Sơ Mi Regular Fit</a></p>
                            <span>Vải thô</span>
                            <div class="product-item-price">
                                <p>215,000<sup>đ</sup> <span>235,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product7.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoSoMiNam/product7')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo sơ mi denim Regular fit</a></p>
                            <span>Denim</span>
                            <div class="product-item-price">
                                <p>270,000<sup>đ</sup> <span>300,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product8.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoSoMiNam/product8')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo sơ mi nam giáng Slim Fit</a></p>
                            <span>Denim</span>
                            <div class="product-item-price">
                                <p>250,000<sup>đ</sup> <span>280,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="paginate text-center">
                    <div id="pagination">
                        <span class="page-node current">1</span>
                        <a class="page-node" href="#">2</a>
                        <a class="page-node" href="#">3</a>
                        <span class="page-node ">…</span>
                        <a class="page-node" href="#">8</a>
                        <a class="page-node" href="#"><span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection