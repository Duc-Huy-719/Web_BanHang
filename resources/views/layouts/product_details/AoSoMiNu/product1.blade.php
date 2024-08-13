@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/AoKhoacNam/product1.1.webp')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/AoKhoacNam/product1.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoKhoacNam/product1.3.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoKhoacNam/product1.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoKhoacNam/product1.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/AoKhoacNam/product1.jpg')}}" alt="" class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Áo khoác nam có mũ Daily Wear</h1>
                <span class="span-product">Chất liệu: Polyester</span>
                <p class="p-product-detail">530,000đ <span>550,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: Polyester</li>
                        <li>Định lượng vải 220gsm dày dặn</li>
                        <li>Công nghệ ứng dụng: HeiQ Viro Block</li>
                        <li>Phù hợp với: khoác ngoài chống nắng, tránh gió</li>
                        <li>Kiểu dáng: nhỏ gọn, dễ mặc</li>
                        <li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam.</li>
                        <li>Người mẫu: 182cm - 76kg, mẫu mặc size XL</li>
                    </ul>
                </div>
                <h2>Số Lượng:</h2>
                <div class="product-detail-quantity">
                    <i class="ri-subtract-line" id="decreaseQuantity"></i>
                    <input id="quantity" type="number" value="1" min="1" readonly>
                    <i class="ri-add-line" id="increaseQuantity"></i>
                </div>
                <button class="main-button" id="addToCart">Thêm Vào Giỏ Hàng</button>
            </div>
        </div>
        <div class="row-grid row-grid-one-item">
            <div class="product-detail-content">
                <h2 class="text-title product-detail-content-title">
                    Chi Tiết Sản Phẩm
                </h2>
                <div class="produt-detail-content-text">
                    <p>Áo khoác nam Daily Wear của Coolmate làm từ 100% Polyester mỏng, nhẹ, thoáng mát, nhanh khô,
                        mang đến cảm giác thoải mái khi mặc.</p><br>
                    <p>Vải áo xử lý công nghệ Water Repellent chống thấm nước vượt trội, hiệu quả giữ nguyên đến 30
                        lần giặt.</p><br>
                    <p>Công nghệ HeiQ Viroblock giúp ức chế vi rút, tiêu diệt vi khuẩn trên bề mặt vải, hạn chế khả
                        năng lây lan của vi khuẩn</p><br>
                    <p>Chống tia UV đến 99% giúp bạn tự tin “diện” ngoài trời nắng.</p><br>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('product')
<div class="row-grid row-grid-hot-products">
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/AoSoMiNu/product8.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoSoMiNu/product8')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo sơ mi phối kẻ</a></p>
        <span>Vải tổng hợp</span>
        <div class="product-item-price">
            <p>580,000<sup>đ</sup> <span>700,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product5.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoSoMiNam/product5')}}">Xem
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
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNam/product6.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoThunNam/product6')}}">Xem
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
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanShortNu/product4.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanShortNu/product4')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần short Organza dập ly</a></p>
        <span>Organza</span>
        <div class="product-item-price">
            <p>320,000<sup>đ</sup> <span>350,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product7.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoSoMiNam/product7')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo sơ mi tay dài</a></p>
        <span>100% Cotton</span>
        <div class="product-item-price">
            <p>270,000<sup>đ</sup> <span>300,000<sup>đ</sup></span> </p>
        </div>
    </div>
</div>
@endsection