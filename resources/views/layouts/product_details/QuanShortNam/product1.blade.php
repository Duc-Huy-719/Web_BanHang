@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNam/product1.1.jpg')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNam/product1.2.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNam/product1.3.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNam/product1.4.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNam/product1.5.jpg')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNam/product1.jpg')}}" alt=""
                        class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Quần shorts Khaki Slim fit</h1>
                <span class="span-product">Chất liệu: Khaki</span>
                <p class="p-product-detail">250,000đ <span>270,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: Khaki</li>
                        <li>Quần shorts Khaki Slim fit có phom dáng ôm vừa phải, giúp tôn lên vóc dáng và tạo cảm
                            giác gọn gàng, thanh lịch.</li>
                        <li>Thiết kế của quần shorts Khaki Slim fit thường đơn giản nhưng không kém phần tinh tế,
                            với các đường cắt may tỉ mỉ và chi tiết.</li>
                        <li>Độ dày vải vừa phải, thoải mái, thoáng mát</li>
                        <li>Quần shorts Khaki Slim fit thường có nhiều màu sắc để lựa chọn, từ các màu truyền thống
                            như be, nâu, xanh rêu </li>
                        <li>Với thiết kế đơn giản và thanh lịch, dễ dàng kết hợp với nhiều loại trang phục khác nhau
                            như áo thun, áo sơ mi tạo nên nhiều phong cách khác nhau từ năng động đến lịch sự.</li>
                        <li>Người mẫu: 180cm - 70kg, mẫu mặc size L</li>
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
                    <p>Chất liệu: 98% Cotton, 2% Spandex</p><br>
                    <p>Kích thước: Có đầy đủ các size từ nhỏ đến lớn, phù hợp với nhiều phom dáng người mặc.</p><br>
                    <p>Túi quần: 4 túi (2 túi trước, 2 túi sau)</p><br>
                    <p>Quần shorts Khaki Slim fit là lựa chọn lý tưởng cho những ai yêu thích sự thoải mái nhưng vẫn
                        muốn giữ vẻ ngoài thanh lịch và hiện đại. Phù hợp cho cả các hoạt động hàng ngày lẫn các sự
                        kiện ngoài trời.</p><br>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNu/product5.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoThunNu/product5')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo Thun Reef Tee</a></p>
        <span>Thun Cotton</span>
        <div class="product-item-price">
            <p>200,000<sup>đ</sup> <span>240,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/Vay_Dam/product1.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/DamNu/product1')}}">Xem
                        thêm</a></div>
            </div>
        </div>
        <p><a href="">Đầm hạ eo xếp ly</a></p>
        <span>Vải thô</span>
        <div class="product-item-price">
            <p>930,000<sup>đ</sup> <span>970,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanDaiNam/product7.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanDaiNam/product7')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần Regular Tuysi Basic</a></p>
        <span>Tuysi</span>
        <div class="product-item-price">
            <p>290,000<sup>đ</sup> <span>320,000<sup>đ</sup></span> </p>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanShortNu/product3.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanShortNu/product3')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần Sooc Thun Cạp Dây Kéo</a></p>
        <span>Thun</span>
        <div class="product-item-price">
            <p>220,000<sup>đ</sup> <span>250,000<sup>đ</sup></span> </p>
        </div>
    </div>
</div>
@endsection