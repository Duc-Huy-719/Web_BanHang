@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNam/product1.1.jpg')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNam/product1.2.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNam/product1.3.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNam/product1.4.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNam/product1.5.jpg')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/QuanDaiNam/product1.webp')}}" alt=""
                        class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Quần Regular Khaki Basic</h1>
                <span class="span-product">Khaki</span>
                <p class="p-product-detail">260,000đ <span>290,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: Khaki</li>
                        <li>Quần có kiểu dáng Regular Fit, vừa vặn với nhiều dáng người, mang đến sự thoải mái và
                            linh hoạt khi di chuyển.</li>
                        <li> Được làm từ chất liệu vải khaki bền bỉ, dễ chịu khi mặc, phù hợp cho cả môi trường làm
                            việc và đi chơi.</li>
                        <li>Cạp quần có đỉa để đeo thắt lưng, giúp quần luôn giữ được form dáng.</li>
                        <li>Quần thường có túi trước và túi sau, tiện lợi để đựng đồ cá nhân như điện thoại, ví.
                        </li>
                        <li>Người mẫu: 178cm - 67kg, mẫu mặc size L</li>
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
                    <p>Quần Regular Khaki Basic là một sản phẩm dễ dàng phối đồ, phù hợp cho nhiều hoàn cảnh từ công
                        sở đến các hoạt động thường ngày.</p><br>
                    <p>- Chất liệu: Khaki (thường là cotton hoặc cotton pha polyester)</p><br>
                    <p>- Kiểu dáng: Regular Fit</p><br>
                    <p>- Màu sắc: Đa dạng, nhưng chủ yếu là các màu cơ bản và trung tính</p><br>
                    <p>- Độ dài: Dài đến mắt cá chân</p><br>
                    <p>- Cạp quần: Có đỉa để thắt lưng</p><br>
                    <p>- Túi: Hai túi trước, hai túi sau</p><br>
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