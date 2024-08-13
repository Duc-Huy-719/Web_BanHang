@extends('layouts.main.product')
@section('content')
<section class="cartegory">
    <div class="container">
        <div class="cartegory-top ">
            <p><a href="{{asset('/layouts')}}">Trang chủ</a></p></a> <span>&#10230; </span>
            <p>Nam</p> <span>&#10230;</span>
            <p>Áo Thun Nam</p>
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
                    <h1 class="sub-title-main">ÁO THUN NAM</h1>
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
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNam/product1.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoThunNam/product1')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo Thun SOUL</a></p>
                            <span>Thun</span>
                            <div class="product-item-price">
                                <p>150,000<sup>đ</sup> <span>180,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNam/product2.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoThunNam/product2')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo Thun Polo Kẻ Viền</a></p>
                            <span>Thun</span>
                            <div class="product-item-price">
                                <p>140,000<sup>đ</sup> <span>170,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNam/product3.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoThunNam/product3')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo Thun Kẻ Ngang Dáng Oversize</a></p>
                            <span>Thun</span>
                            <div class="product-item-price">
                                <p>170,000<sup>đ</sup> <span>200,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNam/product4.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoThunNam/product4')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo thun trơn tay cộc</a></p>
                            <span>Cotton</span>
                            <div class="product-item-price">
                                <p>140,000<sup>đ</sup> <span>170,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNam/product5.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoThunNam/product5')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo thun Basic trơn</a></p>
                            <span>Thun</span>
                            <div class="product-item-price">
                                <p>175,000<sup>đ</sup> <span>210,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNam/product6.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoThunNam/product6')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo Thun In Họa Tiết</a></p>
                            <span>Thun</span>
                            <div class="product-item-price">
                                <p>175,000<sup>đ</sup> <span>210,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNam/product7.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoThunNam/product7')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo Thun Nam Phối Sọc Tay</a></p>
                            <span>Cotton</span>
                            <div class="product-item-price">
                                <p>140,000<sup>đ</sup> <span>170,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNam/product8.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoThunNam/product8')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo thun nam cotton</a></p>
                            <span>Cotton</span>
                            <div class="product-item-price">
                                <p>150,000<sup>đ</sup> <span>180,000<sup>đ</sup></span> </p>
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