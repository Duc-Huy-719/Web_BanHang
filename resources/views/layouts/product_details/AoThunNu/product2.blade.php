@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/AoThunNu/product2.1.webp')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/AoThunNu/product2.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoThunNu/product2.3.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoThunNu/product2.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoThunNu/product2.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/AoThunNu/product2.webp')}}" alt="" class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Áo thun bo gấu dáng ngắn</h1>
                <span class="span-product">Chất liệu thun</span>
                <p class="p-product-detail">150,000đ <span>195,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: thun</li>
                        <li>Định lượng vải 220gsm dày dặn</li>
                        <li> đặc biệt thích hợp cho ngày hè oi nóng để mang đến trải nghiệm mặc thoáng mát, dễ chịu.
                        </li>
                        <li>Các đường xếp li tinh tế, ôm chọn body quyến rũ, giúp nàng toát lên nét đẹp kiêu sa,
                            thời thượng</li>
                        <li>Phù hợp mặc hàng ngày</li>
                        <li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam. <a href="#">Xem nhà máy ></a></li>
                        <li>Người mẫu: 165cm - 49kg, mẫu mặc size S</li>
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
                    <p>Áo thun bo gấu dáng ngắn là loại trang phục <a href="#"><strong>áo nữ</strong></a> với kiểu
                        dáng
                        hiện đại cùng dòng chất liệu thoáng mát, xứng đáng để nàng mang ngay về tủ đồ của mình.
                    </p><br>
                    <p>Thích hợp cho ngày hè oi nóng để mang đến trải nghiệm mặc thoáng mát, dễ chịu.</p><br>
                    <p>Các đường xếp li tinh tế, ôm chọn body quyến rũ, giúp nàng toát lên nét đẹp kiêu sa, thời
                        thượng.</p>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNam/product1.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoKhoacNam/product1')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo Phao Nam Siêu Nhẹ</a></p>
        <span>Polyester</span>
        <div class="product-item-price">
            <p>530,000<sup>đ</sup> <span>550,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/AoSoMiNu/product3.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoSoMiNu/product3')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo Sơ Mi Cộc Tay</a></p>
        <span>Vải gấm</span>
        <div class="product-item-price">
            <p>560,000<sup>đ</sup> <span>760,000<sup>đ</sup></span> </p>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanShortNu/product7.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanShortNu/product7')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần short cạp cao Rayon</a></p>
        <span>Tuysi</span>
        <div class="product-item-price">
            <p>320,000<sup>đ</sup> <span>360,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanDaiNam/product4.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanDaiNam/product4')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần Slim Khaki Basic</a></p>
        <span>Khaki</span>
        <div class="product-item-price">
            <p>270,000<sup>đ</sup> <span>310,000<sup>đ</sup></span> </p>
        </div>
    </div>
</div>
@endsection