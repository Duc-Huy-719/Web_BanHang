@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNam/product5.1.jpg')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNam/product5.2.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNam/product5.3.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNam/product5.4.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNam/product5.5.jpg')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/QuanShortNam/product5.jpg')}}" alt=""
                        class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Quần short Regular cotton</h1>
                <span class="span-product">Chất liệu: Cotton</span>
                <p class="p-product-detail">240,000đ <span>270,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: Cotton</li>
                        <li>Được làm từ 100% cotton hoặc pha trộn với một lượng nhỏ spandex để tăng độ co giãn, quần
                            short này mang lại cảm giác mềm mại, thoáng mát và thấm hút mồ hôi tốt, rất phù hợp cho
                            các hoạt động mùa hè.</li>
                        <li>Với thiết kế đơn giản, không cầu kỳ, quần short Regular cotton dễ dàng phối hợp với
                            nhiều loại áo và phụ kiện, tạo nên phong cách năng động và trẻ trung.</li>
                        <li>Phù hợp để mặc ở nhà, đi dạo phố, chơi thể thao hoặc tham gia các hoạt động ngoài trời.
                        </li>
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
                    <p>Chất liệu: 100% cotton hoặc pha trộn cotton với một lượng nhỏ spandex (thường từ 2-5%) để
                        tăng độ co giãn và thoải mái khi vận động.</p><br>
                    <p>Kiểu dáng: Regular fit, không quá rộng cũng không quá ôm sát, phù hợp với nhiều dáng người.
                    </p><br>
                    <p>Túi quần: Thường có 4 túi (2 túi phía trước, 2 túi phía sau) tiện lợi cho việc đựng đồ cá
                        nhân như điện thoại, ví, chìa khóa.</p><br>
                    <p>Quần short Regular cotton là sự lựa chọn lý tưởng cho những ai ưa thích sự thoải mái, tiện
                        dụng và phong cách trẻ trung, năng động.</p><br>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product5.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/SoMiNam/product5')}}"></a>Xem
                    thêm
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
            <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNu/product2.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoKhoacNu/product2')}}">Xem
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
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanJeanNam/product7.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanJeanNam/product7')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần Jeans Slim</a></p>
        <span>Denim</span>
        <div class="product-item-price">
            <p>380,000<sup>đ</sup> <span>400,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanShortNu/product5.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanShortNu/product5')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần short dáng ngắn</a></p>
        <span>Tuysi</span>
        <div class="product-item-price">
            <p>315,000<sup>đ</sup> <span>330,000<sup>đ</sup></span> </p>
        </div>
    </div>
</div>
@endsection