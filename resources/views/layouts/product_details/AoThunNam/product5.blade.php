@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/AoThunNam/product5.1.webp')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/AoThunNam/product5.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoThunNam/product5.3.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoThunNam/product5.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoThunNam/product5.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/AoThunNam/product5.webp')}}" alt="" class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>T-Shirt Cotton 220GSM</h1>
                <span class="span-product">Chất liệu: Thun</span>
                <p class="p-product-detail">175,000đ <span>210,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: Thun</li>
                        <li>Định lượng vải 220gsm dày dặn</li>
                        <li>Dáng regular giúp cho áo thun ôm vừa phải, mang lại cảm giác thoải mái và tự nhiên cho
                            người mặc. </li>
                        <li>Độ dày vải vừa phải, thoải mái, thoáng mát</li>
                        <li>Sản phẩm được sản xuất từ Ice Cotton, một chất liệu phát triển bởi SPOERRY Thụy Sĩ. Vải
                            có độ xoắn cao, lông tơ sẽ bị triệt tiêu, mang đến cảm giác "mát lạnh" ngay điểm chạm
                            đầu tiên trên da.</li>
                        <li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam. <a href="#">Xem nhà máy ></a></li>
                        <li>Người mẫu: 175cm - 70kg, mẫu mặc size XL</li>
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
                    <p>Áo thun nam thiết kế cổ tròn, cộc tay là một sản phẩm đa năng và phổ biến trong thế giới thời
                        trang hiện nay.</p><br>
                    <p>Với hoạ tiết trơn, áo thun này sẽ dễ dàng phối đồ với quần jeans, quần kaki hay short và
                        thích hợp cho nhiều hoàn cảnh khác nhau như đi chơi, đi làm hay dạo phố.</p>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNam/product3.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoKhoacNam/product3')}}">Xem
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
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanJeanNu/product7.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanJeanNu/product7')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần Denim ống sẻ</a></p>
        <span>Denim</span>
        <div class="product-item-price">
            <p>350,000<sup>đ</sup> <span>370,000<sup>đ</sup></span> </p>
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
        <p><a href="">Áo sơ mi denim Regular fit</a></p>
        <span>Denim</span>
        <div class="product-item-price">
            <p>270,000<sup>đ</sup> <span>300,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/Vay_Dam/product4.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/DamNu/product4')}}">Xem
                        thêm</a></div>
            </div>
        </div>
        <p><a href="">Đầm chấm bi cổ bẻ</a></p>
        <span>Vải thô</span>
        <div class="product-item-price">
            <p>980,000<sup>đ</sup> <span>1,000,000<sup>đ</sup></span> </p>
        </div>
    </div>
</div>
@endsection