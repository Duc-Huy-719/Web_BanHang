@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNam/product3.1.jpg')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNam/product3.2.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNam/product3.3.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNam/product3.4.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNam/product3.5.jpg')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNam/product3.jpg')}}" alt=""
                        class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Quần Jeans Regular fit</h1>
                <span class="span-product">Chất liệu: Denim</span>
                <p class="p-product-detail">380,000đ <span>410,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: Denim</li>
                        <li>Chất liệu: Chất liệu denim truyền thống, thường có độ bền cao và mang lại cảm giác chắc
                            chắn khi mặc.</li>
                        <li> Quần có màu xanh đen, một lựa chọn phổ biến và dễ dàng phối hợp với nhiều trang phục
                            khác nhau.</li>
                        <li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam. <a href="#">Xem nhà máy ></a></li>
                        <li>Người mẫu: 185cm - 70kg, mẫu mặc size 2XL</li>
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
                    <p> Quần jeans Regular fit phù hợp cho phong cách hàng ngày, thoải mái nhưng vẫn lịch sự. Chúng
                        dễ dàng phối hợp với các loại áo phông, áo sơ mi, và giày thể thao hoặc giày da.</p><br>
                    <p>Thiết kế:</p><br>
                    <p>- Ống quần: Ống quần thẳng, không quá ôm sát nhưng cũng không quá rộng, phù hợp với nhiều
                        dáng người.</p><br>
                    <p>- Cạp quần: Cạp quần ở mức vừa phải, có thể đi kèm với nút và khóa kéo, đảm bảo sự tiện lợi
                        khi mặc vào và tháo ra.</p><br>
                    <p>- Túi quần: Thiết kế thường có 5 túi (2 túi trước, 2 túi sau, và 1 túi nhỏ phía trước).</p>
                    <br>
                    <p>- Đường may: Đường may chắc chắn, thường có chỉ may màu nổi để tạo điểm nhấn.</p>

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