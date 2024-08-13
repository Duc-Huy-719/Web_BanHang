@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product5.1.webp')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product5.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product5.3.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product5.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product5.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product5.jpg')}}" alt="" class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Đầm suông tay voan</h1>
                <span class="span-product">Chất liệu: vải thô</span>
                <p class="p-product-detail">890,000đ <span>920,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: vải thô</li>
                        <li>Định lượng vải 220gsm dày dặn</li>
                        <li> Kiểu dáng: đầm thiết kế dáng suông dài qua gối, tay voan bồng, tone màu đen, kết hợp
                            hoa đính nổi</li>
                        <li>Với thiết kế tối giản nhưng vẫn đủ thu hút các cô nàng công sở nhờ vào chất liệu Tuysi
                            cát có độ co giãn nhẹ, dễ mặc. Tuy đơn giản nhưng có hiệu quả tối ưu cho việc che đi mọi
                            khuyết điểm hình thể, giúp người mặc có được vóc dáng gọn gàng, thanh lịch hơn.</li>
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
                    <p>Đầm suông 1 lớp cổ tròn, tay ngắn. Phần trên cổ được làm bằng lưới và vải voan mỏng phối cùng
                        đăng ren tạo nên điểm hút mắt.</p><br>
                    <p>Dáng đầm suông qua gối, xẻ gấu 1 bên. 2 túi chéo 2 bên. Cài bằng khóa kéo ẩn và khuy giọt lệ
                        phía sau.</p><br>
                    <p>Đẹp như bông hoa khoe sắc qua thiết kế đầm tạo kiểu vừa thanh lịch, tinh tế vừa nhẹ nhàng,
                        bay bổng.</p><br>
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