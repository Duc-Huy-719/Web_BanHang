@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNu/product7.1.webp')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNu/product7.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNu/product7.3.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNu/product7.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNu/product7.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNu/product7.webp')}}" alt="" class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Quần ông suông xẻ tà</h1>
                <span class="span-product">Chất liệu: Tuysi</span>
                <p class="p-product-detail">480,000đ <span>530,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: Tuysi</li>
                        <li>Định lượng vải 220gsm dày dặn</li>
                        <li>Chất liệu vải tuytsi tạo nên sự mềm mại và thoải mái khi mặc. Với chất vải thoáng mát và
                            thiết kế xẻ tà độc đáo, quần ống suông tuytsi sẽ là một sự lựa chọn hoàn hảo cho phái
                            đẹp muốn tạo nên phong cách thời trang tối giản và đầy sang trọng.</li>
                        <li>Độ dày vải vừa phải, thoải mái, thoáng mát</li>
                        <li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam.</li>
                        <li>Người mẫu: 160cm - 50kg, mẫu mặc size S</li>
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
                    <p>Được thiết kế với dáng quần ống suông đơn giản nhưng thanh lịch, sản phẩm sẽ giúp bạn tạo nên
                        phong cách thời trang đẳng cấp và nổi bật.</p><br>
                    <p>Một điểm nhấn đặc biệt của sản phẩm là chi tiết xẻ tà hai bên ống quần, tạo nên vẻ ngoài trẻ
                        trung và hiện đại.</p><br>
                    <p> Với thiết kế này, quần có thể được mặc đi làm hoặc đi chơi, phù hợp với nhiều hoàn cảnh khác
                        nhau. Không chỉ đẹp mắt và phong cách, sản phẩm còn đảm bảo sự thoải mái khi mặc, giúp bạn
                        dễ dàng di chuyển và hoạt động trong suốt ngày dài.</p>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNu/product8.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoThunNu/product8')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo thun Pink Baby</a></p>
        <span>Thun</span>
        <div class="product-item-price">
            <p>180,000<sup>đ</sup> <span>220,000<sup>đ</sup></span> </p>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanShortNu/product8.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanShortNu/product8')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần short Ladies Rayon</a></p>
        <span>Tuysi</span>
        <div class="product-item-price">
            <p>330,000<sup>đ</sup> <span>350,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanDaiNam/product5.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanDaiNam/product5')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần Tây Tuysi Regular Fit</a></p>
        <span>Tuysi</span>
        <div class="product-item-price">
            <p>280,000<sup>đ</sup> <span>315,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanJeanNu/product8.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanJeanNu/product8')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần Baggy phối khuy đai</a></p>
        <span>Denim</span>
        <div class="product-item-price">
            <p>360,000<sup>đ</sup> <span>380,000<sup>đ</sup></span> </p>
        </div>
    </div>
</div>
@endsection