@extends('layouts.main.product')
@section('content')
<section class="cartegory">
    <div class="container">
        <div class="cartegory-top ">
            <p><a href="{{asset('/layouts')}}">Trang chủ</a></p></a> <span>&#10230; </span>
            <p>Nữ</p> <span>&#10230;</span>
            <p>Áo Khoác Nữ</p>
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
                    <h1 class="sub-title-main">ÁO KHOÁC NỮ</h1>
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
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNu/product1.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoKhoacNu/product1')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo khoác Mangto</a></p>
                            <span>Vải dạ</span>
                            <div class="product-item-price">
                                <p>800,000<sup>đ</sup> <span>950,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNu/product2.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoKhoacNu/product2')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo phao kèm đai</a></p>
                            <span>Vải tổng hợp</span>
                            <div class="product-item-price">
                                <p>510,000<sup>đ</sup> <span>560,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNu/product3.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoKhoacNu/product3')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo phao cổ lông trắng</a></p>
                            <span>Vải tổng hợp</span>
                            <div class="product-item-price">
                                <p>590,000<sup>đ</sup> <span>620,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNu/product4.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoKhoacNu/product4')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo khoác phao giáng dài</a></p>
                            <span>Vải tổng hợp</span>
                            <div class="product-item-price">
                                <p>580,000<sup>đ</sup> <span>610,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNu/product5.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoKhoacNu/product5')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo khoác phao cổ nhung</a></p>
                            <span>Vải tổng hợp</span>
                            <div class="product-item-price">
                                <p>560,000<sup>đ</sup> <span>590,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNu/product6.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoKhoacNu/product6')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo khoác phao có mũ</a></p>
                            <span>Vải tổng hợp</span>
                            <div class="product-item-price">
                                <p>450,000<sup>đ</sup> <span>480,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNu/product7.webp')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoKhoacNu/product7')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo phao dáng dài</a></p>
                            <span>Vải tổng hợp</span>
                            <div class="product-item-price">
                                <p>470,000<sup>đ</sup> <span>500,000<sup>đ</sup></span> </p>
                            </div>
                        </div>
                        <div class="hot-product-items">
                            <div class="images-container">
                                <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNu/product8.jpg')}}"
                                        alt=""></a>
                                <div class="overlay">
                                    <div class="overlay-content"><a
                                            href="{{asset('/layouts/product_details/AoKhoacNu/product8')}}">Xem
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="">Áo khoác phao kèm đai</a></p>
                            <span>Vải tổng hợp</span>
                            <div class="product-item-price">
                                <p>390,000<sup>đ</sup> <span>420,000<sup>đ</sup></span> </p>
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