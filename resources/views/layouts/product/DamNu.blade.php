@extends('layouts.main.product')
@section('content')
<section class="cartegory">
    <div class="container">
        <div class="cartegory-top ">
            <p><a href="{{asset('/layouts')}}">Trang chủ</a></p></a> <span>&#10230; </span>
            <p>Đầm</p> <span>&#10230;</span>
            <p>Đầm Nữ</p>
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
                    <h1 class="sub-title-main">ĐẦM NỮ</h1>
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
                                <a href=""><img src="{{asset('frontend/asset/image/product/Vay_Dam/product1.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/DamNu/product1')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Đầm hạ eo xếp ly</a></p>
                            <span>Vải thô</span>
                            <div class="product-item-price">
                                <p>930,000<sup>đ</sup> <span>970,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/Vay_Dam/product2.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/DamNu/product2')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Đầm Peplum thiết kế</a></p>
                            <span>Vải tweed</span>
                            <div class="product-item-price">
                                <p>910,000<sup>đ</sup> <span>950,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/Vay_Dam/product3.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/DamNu/product3')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Đầm hoa vàng hạ eo</a></p>
                            <span>Vải voan</span>
                            <div class="product-item-price">
                                <p>920,000<sup>đ</sup> <span>950,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/Vay_Dam/product4.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/DamNu/product4')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Đầm chấm bi cổ bẻ</a></p>
                            <span>Vải thô</span>
                            <div class="product-item-price">
                                <p>980,000<sup>đ</sup> <span>1,000,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/Vay_Dam/product5.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/DamNu/product5')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Đầm suông tay voan</a></p>
                            <span>Vải thô</span>
                            <div class="product-item-price">
                                <p>890,000<sup>đ</sup> <span>920,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/Vay_Dam/product6.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/DamNu/product6')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Đầm suông thêu hoa</a></p>
                            <span>Vải thô</span>
                            <div class="product-item-price">
                                <p>1,095,000<sup>đ</sup> <span>1,115,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/Vay_Dam/product7.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/DamNu/product7')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Đầm thêu hoa</a></p>
                            <span>Vải tổng hợp</span>
                            <div class="product-item-price">
                                <p>750,000<sup>đ</sup> <span>790,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/Vay_Dam/product8.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/DamNu/product8')}}">Xem
                                            thêm</a></div>
                                </div>
                            </div>
                            <p><a href="">Đầm Xếp Ly</a></p>
                            <span>Vải voan</span>
                            <div class="product-item-price">
                                <p>720,000<sup>đ</sup> <span>750,000<sup>đ</sup></span> </p>
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