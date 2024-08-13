@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNam/product8.1.jpg')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNam/product8.2.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNam/product8.3.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNam/product8.4.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNam/product8.5.jpg')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNam/product8.jpg')}}" alt="" class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Quần dài Tuysi be nâu</h1>
                <span class="span-product">Chất liệu: Tuysi</span>
                <p class="p-product-detail">290,000đ <span>320,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: Tuysi</li>
                        <li>Kiểu dáng thanh lịch, phù hợp với nhiều phong cách thời trang khác nhau.</li>
                        <li>Được làm từ vải tuysi, mang đến sự mềm mại, thoáng mát và bền bỉ.</li>
                        <li>Tông màu trung tính, dễ dàng phối hợp với nhiều loại trang phục và phụ kiện.</li>
                        <li>Có thể sử dụng trong nhiều hoàn cảnh khác nhau, từ đi làm, đi học đến các hoạt động
                            thường ngày.</li>
                        <li>Người mẫu: 186cm - 75kg, mẫu mặc size XXL</li>
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
                    <p>Quần dài Tuysi be nâu là lựa chọn hoàn hảo cho những ai yêu thích phong cách thời trang thanh
                        lịch, hiện đại và thoải mái trong mọi hoạt động hàng ngày.</p><br>
                    <p>- Chất liệu: Vải tuysi, mềm mại, thoáng khí và ít nhăn.</p><br>
                    <p>- Kiểu dáng: Thiết kế thoải mái, mang lại sự dễ chịu khi mặc.</p><br>
                    <p>- Màu sắc: Màu nâu be, trung tính và dễ phối đồ.</p><br>
                    <p>- Cạp quần:Cạp cao vừa phải, có đỉa để mang thắt lưng, tăng cường tính tiện dụng.</p><br>
                    <p>- Túi: Gồm 2 túi trước và 2 túi sau, tiện dụng cho việc mang theo các vật dụng nhỏ.</p><br>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNam/product4.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoThunNam/product4')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo thun trơn tay cộc</a></p>
        <span>Cotton</span>
        <div class="product-item-price">
            <p>140,000<sup>đ</sup> <span>170,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/AoSoMiNu/product6.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoSoMiNu/product6')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo sơ mi tay cách điệu</a></p>
        <span>Rayon, Poly, Spandex</span>
        <div class="product-item-price">
            <p>610,000<sup>đ</sup> <span>740,000<sup>đ</sup></span> </p>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNu/product4.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoThunNu/product4')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo thun ôm cổ cách điệu</a></p>
        <span>Thun</span>
        <div class="product-item-price">
            <p>150,000<sup>đ</sup> <span>180,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanDaiNu/product4.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanDaiNu/product4')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần suông trơn Tuysi</a></p>
        <span>Tuysi</span>
        <div class="product-item-price">
            <p>430,000<sup>đ</sup> <span>470,000<sup>đ</sup></span> </p>
        </div>
    </div>
</div>
@endsection