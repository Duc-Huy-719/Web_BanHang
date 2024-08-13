@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/AoSoMiNu/product4.1.webp')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/AoSoMiNu/product4.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoSoMiNu/product4.3.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoSoMiNu/product4.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoSoMiNu/product4.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/AoSoMiNu/product4.webp')}}" alt="" class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Áo sơ mi cổ đức</h1>
                <span class="span-product">Lụa</span>
                <p class="p-product-detail">570,000đ <span>660,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: Lụa</li>
                        <li>Định lượng vải 220gsm dày dặn</li>
                        <li>- Thiết kế lựa chọn chất liệu lụa mềm mại, mịn màng, độ bóng nhẹ. Petal Set cũng có khả
                            năng thoáng khí tốt, thích hợp cho nhiều kiểu thời tiết.</li>
                        <li>Bề mặt mềm mịn giúp người mặc trải nghiệm cảm giác thoái mái và nhẹ nhàng trên da.</li>
                        <li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam.- Vải được lựa chọn thích hợp diện
                            trong mùa hè oi bức
                        <li>Người mẫu: 165 cm - 49 kg, mẫu mặc size S</li>
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
                    <p>Áo sơ mi cổ đức là loại trang phục <a href="https://www.coolmate.me/collection/ao-nam"><strong>áo
                                nữ</strong></a> mang lại vẻ
                        ngoài tinh tế, thanh lịch và nữ tính. Thiết kế phù hợp với nhiều hoàn cảnh và phong cách
                        khác nhau, từ nơi công sở đến những buổi gặp mặt bạn bè.
                    </p><br>
                    <p>Áo sơ mi cổ đức, tay ngắn, dáng suông nhẹ. Cổ áo mix khuy kiểu, thêm phối túi cách điệu giúp
                        áo trở nên nổi bật hơn.</p><br>
                    <p>Chân váy cạp cao, độ dài qua gối, kết hợp xẻ tà nhẹ bên sườn, che khuyết điểm tốt cũng như
                        phù hợp với nhiều dáng người.</p>
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
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/SoMiNam/product7')}}">Xem
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