@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product7.1.webp')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product7.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product7.3.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product7.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product7.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product7.webp')}}" alt="" class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Đầm thêu hoa</h1>
                <span class="span-product">Chất liệu: vải tổng hợp</span>
                <p class="p-product-detail">750,000đ <span>790,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: vải tổng hợp</li>
                        <li>Định lượng vải 220gsm dày dặn</li>
                        <li> Kiểu dáng: đầm thiết kế dáng chữ A dài qua gối, tone màu nâu phối họa tiết hoa thêu
                        </li>
                        <li>Thiết kế tạo kiểu tay ngắn bồng nhẹ, chiết đai eo thon gọn.</li>
                        <li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam.</li>
                        <li>Người mẫu: 167cm - 50kg, mẫu mặc size M</li>
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
                    <p>Đẹp như bông hoa khoe sắc qua thiết kế đầm tạo kiểu vừa thanh lịch, tinh tế vừa nhẹ nhàng,
                        bay bổng.</p><br>
                    <p>Đầm dáng xòe nhẹ, độ dài qua gối mang đến sự thoải mái và dễ dàng di chuyển.</p><br>
                </div>
            </div>
        </div>
</section>
@endsection
@section('product')
<div class="row-grid row-grid-hot-products">
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/AoSoMiNu/product4.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoSoMiNu/product4')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo sơ mi cổ đức</a></p>
        <span>Lụa</span>
        <div class="product-item-price">
            <p>570,000<sup>đ</sup> <span>660,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNam/product8.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoKhoacNam/product8')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo Phao Nam Siêu Nhẹ</a></p>
        <span>Polyester</span>
        <div class="product-item-price">
            <p>510,000<sup>đ</sup> <span>550,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product3.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoSoMiNam/product3')}}">Xem
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
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanShortNu/product2.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanShortNu/product2')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần short Lozenge Set</a></p>
        <span>Lụa</span>
        <div class="product-item-price">
            <p>280,000<sup>đ</sup> <span>310,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanDaiNam/product2.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanDaiNam/product2')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần Plants Khaki</a></p>
        <span>Khaki</span>
        <div class="product-item-price">
            <p>270,000<sup>đ</sup> <span>300,000<sup>đ</sup></span> </p>
        </div>
    </div>
</div>
@endsection