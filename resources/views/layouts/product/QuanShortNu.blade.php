@extends('layouts.main.product')
@section('content')
<section class="cartegory">
    <div class="container">
        <div class="cartegory-top ">
            <p><a href="{{asset('/layouts')}}">Trang chủ</a></p></a> <span>&#10230; </span>
            <p>Nữ</p> <span>&#10230;</span>
            <p>Quần Short Nữ</p>
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
                    <h1 class="sub-title-main">QUẦN SHORT NỮ</h1>
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
                                <a href=""><img
                                        src="{{asset('frontend/asset/image/product/QuanShortNu/product1.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/QuanShortNu/product1')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Quần short cạp đai mây</a></p>
                            <span>Tuysi</span>
                            <div class="product-item-price">
                                <p>290,000<sup>đ</sup> <span>330,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img
                                        src="{{asset('frontend/asset/image/product/QuanShortNu/product2.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/QuanShortNu/product2')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Quần short Lozenge Set</a></p>
                            <span>Lụa</span>
                            <div class="product-item-price">
                                <p>280,000<sup>đ</sup> <span>320,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img
                                        src="{{asset('frontend/asset/image/product/QuanShortNu/product3.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/QuanShortNu/product3')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Quần short kaki túi kiểu</a></p>
                            <span>kaki</span>
                            <div class="product-item-price">
                                <p>310,000<sup>đ</sup> <span>330,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img
                                        src="{{asset('frontend/asset/image/product/QuanShortNu/product4.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/QuanShortNu/product4')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Quần short Organza dập ly</a></p>
                            <span>Organza</span>
                            <div class="product-item-price">
                                <p>320,000<sup>đ</sup> <span>350,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img
                                        src="{{asset('frontend/asset/image/product/QuanShortNu/product5.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/QuanShortNu/product5')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Quần short dáng ngắn</a></p>
                            <span>Tuysi</span>
                            <div class="product-item-price">
                                <p>315,000<sup>đ</sup> <span>335,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img
                                        src="{{asset('frontend/asset/image/product/QuanShortNu/product6.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/QuanShortNu/product6')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Quần short Organza</a></p>
                            <span>Organza</span>
                            <div class="product-item-price">
                                <p>320,000<sup>đ</sup> <span>340,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img
                                        src="{{asset('frontend/asset/image/product/QuanShortNu/product7.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/QuanShortNu/product7')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Quần short cạp cao Rayon</a></p>
                            <span>Tuysi</span>
                            <div class="product-item-price">
                                <p>320,000<sup>đ</sup> <span>360,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img
                                        src="{{asset('frontend/asset/image/product/QuanShortNu/product8.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/QuanShortNu/product8')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Quần short Ladies Rayon</a></p>
                            <span>Tuysi</span>
                            <div class="product-item-price">
                                <p>330,000<sup>đ</sup> <span>350,000<sup>đ</sup></span> </p>
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