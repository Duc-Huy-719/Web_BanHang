@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNu/product8.1.webp')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNu/product8.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNu/product8.3.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNu/product8.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNu/product8.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/QuanJeanNu/product8.webp')}}" alt=""
                        class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Quần Baggy phối khuy đai</h1>
                <span class="span-product">Chất liệu: denim</span>
                <p class="p-product-detail">360,000đ <span>380,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: denim</li>
                        <li>Định lượng vải 220gsm dày dặn</li>
                        <li> Phần trên có độ rộng nhẹ, phần dưới bo dần và giữ dáng ống đứng. Phía trước có 2 túi
                            chéo, phía sau có 2 túi hộp. Quần có khuy cài và khóa kéo.</li>
                        <li> Trên thân quần được nhấn màu denim đậm nhạt ngẫu nhiên.</li>
                        <li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam. <a href="#">Xem nhà máy ></a></li>
                        <li>Người mẫu: 169 cm - 48 kg, mẫu mặc size M</li>
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
                    <p>Quần Baggy phối khuy đai là loại trang phục nữ đặc biệt, sẽ là gợi ý hoàn hảo cho thời trang
                        thường ngày của nàng.
                    </p><br>
                    <p> Dáng quần gọn gàng, khóe léo khoe ra mắt cá chân của người mặc. Form quần có độ rộng nhẹ
                        giúp nàng hoạt động thoải mái cả ngày dài. Để diện item này đẹp nhất, nàng hãy phối cùng
                        những chiếc áo có thể sơ vin cao nhé.</p>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNam/product7.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoThunNam/product7')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo Thun Nam Phối Sọc Tay</a></p>
        <span>Cotton</span>
        <div class="product-item-price">
            <p>140,000<sup>đ</sup> <span>170,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/AoSoMiNu/product7.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoSoMiNu/product7')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo sơ mi trắng cổ đá</a></p>
        <span>Vải thô</span>
        <div class="product-item-price">
            <p>560,000<sup>đ</sup> <span>650,000<sup>đ</sup></span> </p>
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
            <p>315,000<sup>đ</sup> <span>335,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanDaiNam/product6.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanDaiNam/product6')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần kẻ Tuysi Slim Fit</a></p>
        <span>Tuysi</span>
        <div class="product-item-price">
            <p>310,000<sup>đ</sup> <span>330,000<sup>đ</sup></span> </p>
        </div>
    </div>
</div>
@endsection