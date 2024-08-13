@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/SoMiNam/product8.1.webp')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/SoMiNam/product8.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/SoMiNam/product8.3.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/SoMiNam/product8.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/SoMiNam/product8.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/SoMiNam/product8.webp')}}" alt="" class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Áo sơ mi nam giáng Slim Fit</h1>
                <span class="span-product">Chất liệu: Denim</span>
                <p class="p-product-detail">250,000đ <span>280,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: Denim</li>
                        <li>Định lượng vải 220gsm dày dặn</li>
                        <li>Áo sơ mi cổ đức. Tay dài bo gấu và 2 khuy cài đính kèm. Cài bằng hàng khuy phía trước.
                        </li>
                        <li>Lựa chọn vải kẻ có gam màu sáng, phù hợp gam màu hè.</li>
                        <li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam.</li>
                        <li>Người mẫu: 185cm - 75kg, mẫu mặc size L</li>
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
                    <p> Một thiết kế sơ mi từ chất liệu denim sáng màu sẽ giúp trẻ hóa phong cách của chàng. Không
                        khó để nhận thấy những thiết kế có độ ôm nhẹ thường tôn dáng người mặc tốt hơn.</p><br>
                    <p> Dáng áo Slim fit ôm gọn cơ thể và tôn dáng người mặc. Tạo cho nam giới phong thái đĩnh đạc,
                        hiện đại, chuyên nghiệp và lịch lãm.</p><br>
                    <p>Màu sắc cơ bản phù hợp với nhiều sự kiện như: đi học, đi làm, đi chơi. Kết hợp với quần âu,
                        quần Jeans, quần Kaki và quần short đều phù hợp.</p>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/Vay_Dam/product5.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/DamNu/product5')}}">Xem
                        thêm</a></div>
            </div>
        </div>
        <p><a href="">Đầm suông tay voan</a></p>
        <span>Vải thô</span>
        <div class="product-item-price">
            <p>890,000<sup>đ</sup> <span>920,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNu/product6.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoThunNu/product6')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo lụa 2 dây cổ vuông</a></p>
        <span>Lụa poly</span>
        <div class="product-item-price">
            <p>210,000<sup>đ</sup> <span>230,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanShortNam/product7.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanShortNam/product7')}}">Xem
                        thêm</a></div>
            </div>
        </div>
        <p><a href="">Quần shorts Regular ngang gối</a></p>
        <span>Khaki</span>
        <div class="product-item-price">
            <p>210,000<sup>đ</sup> <span>240,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNu/product3.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoThunNu/product3')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo thun ôm cách điệu</a></p>
        <span>Thun</span>
        <div class="product-item-price">
            <p>130,000<sup>đ</sup> <span>170,000<sup>đ</sup></span> </p>
        </div>
    </div>
</div>
@endsection