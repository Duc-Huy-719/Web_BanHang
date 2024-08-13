@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNam/product8.1.jpg')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNam/product8.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNam/product8.3.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNam/product8.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNam/product8.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNam/product8.jpg')}}" alt=""
                        class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Quần Jeans Slim</h1>
                <span class="span-product">Chất liệu: Denim</span>
                <p class="p-product-detail">380,000đ <span>400,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: Denim</li>
                        <li>Quần Jeans Slim có phom dáng ôm vừa phải, không quá chật nhưng vẫn tạo cảm giác gọn
                            gàng, thanh lịch. </li>
                        <li>Chất liệu denim được sử dụng cho quần Jeans Slim thường là loại cao cấp, có độ bền cao
                            và mang lại cảm giác thoải mái khi mặc. </li>
                        <li>Thích hợp cho nhiều hoàn cảnh từ đi làm, đi chơi đến các sự kiện không chính thức.</li>
                        <li>Với thiết kế đơn giản và thanh lịch, dễ dàng kết hợp với nhiều loại trang phục khác áo
                            sơ mi, áo khoác,... tạo nên nhiều phong cách khác nhau từ lịch sự đến năng động.</li>
                        <li>Người mẫu: 186cm - 75kg, mẫu mặc size 2XL</li>
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
                    <p>Quần Jeans Slim là lựa chọn hoàn hảo cho những ai yêu thích sự thanh lịch, hiện đại nhưng vẫn
                        muốn giữ cảm giác thoải mái trong mọi hoạt động hàng ngày.</p><br>
                    <p>Thiết kế:</p><br>
                    <p>- Ống quần: Ống quần thuôn nhỏ dần từ hông đến mắt cá chân, tạo dáng ôm vừa phải nhưng không
                        quá bó sát.</p><br>
                    <p>- Lưng quần: Lưng quần vừa phải, không quá cao cũng không quá thấp, giúp tôn dáng người mặc.
                    </p><br>
                    <p>- Túi quần: 5 túi truyền thống (2 túi trước, 2 túi sau, 1 túi nhỏ).</p><br>
                    <p>- Đường may: Đường may chắc chắn, chi tiết và tinh tế, đảm bảo độ bền cho sản phẩm. Các chi
                        tiết như nút, khóa kéo được chọn lọc kỹ lưỡng và chắc chắn.
                    </p>

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