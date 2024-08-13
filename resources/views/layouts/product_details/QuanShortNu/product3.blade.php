@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNu/product3.1.webp')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNu/product3.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNu/product3.3.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNu/product3.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNu/product3.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNu/product3.webp')}}" alt=""
                        class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Quần short kaki túi kiểu</h1>
                <span class="span-product">Chất liệu: kaki</span>
                <p class="p-product-detail">310,000đ <span>330,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: kaki</li>
                        <li>Định lượng vải 220gsm dày dặn</li>
                        <li>Vải khaki thun có độ dày vừa phải giữ form quần đứng dáng, thấm hút mồ hôi, thoải mái.
                        </li>
                        <li>Độ dày vải vừa phải, thoải mái, thoáng mát</li>
                        <li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam. <a href="#">Xem nhà máy ></a></li>
                        <li>Người mẫu: 163 cm - 47 kg, mẫu mặc size S</li>
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
                    <p>Quần short kaki túi kiểu là loại trang phục nữ đặc biệt, với độ dài ngang đùi. Thiết kế tạo
                        điểm nhấn qua 2 túi chéo. Quần được cài bằng móc khóa và dây kéo phía trước.
                    </p><br>
                    <p>Nàng chỉ cần mang thêm đôi giày hợp trend, phối cùng mẫu áo thun hoặc áo vest thời thượng là
                        nàng có thể tự tin xuống phố.</p>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/AoSoMiNu/product5.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoSoMiNu/product5')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo sơ mi họa tiết</a></p>
        <span>Tencel</span>
        <div class="product-item-price">
            <p>580,000<sup>đ</sup> <span>680,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product8.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoSoMiNam/product8')}}">Xem
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
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanDaiNu/product8.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanDaiNu/product8')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần suông ống rộng xếp ly</a></p>
        <span>Tuysi</span>
        <div class="product-item-price">
            <p>360,000<sup>đ</sup> <span>390,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanJeanNam/product6.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanJeanNam/product6')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần Jean Dáng Regular</a></p>
        <span>Denim</span>
        <div class="product-item-price">
            <p>360,000<sup>đ</sup> <span>380,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/Vay_Dam/product7.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/DamNu/product7')}}">Xem
                        thêm</a></div>
            </div>
        </div>
        <p><a href="">Đầm thêu hoa</a></p>
        <span>Vải tổng hợp</span>
        <div class="product-item-price">
            <p>750,000<sup>đ</sup> <span>790,000<sup>đ</sup></span> </p>
        </div>
    </div>
</div>
@endsection