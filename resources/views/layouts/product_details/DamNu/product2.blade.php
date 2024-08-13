@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product2.1.webp')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product2.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product2.3.jpg')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product2.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product2.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/Vay_Dam/product2.jpg')}}" alt="" class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Đầm Peplum thiết kế</h1>
                <span class="span-product">Chất liệu: vải tweed</span>
                <p class="p-product-detail">1,013,000đ <span>1,050,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: vải tweed</li>
                        <li>Định lượng vải 220gsm dày dặn</li>
                        <li> Kiểu dáng: đầm peplum thiết kế dáng bút chì dài qua gối, tone màu đen, đính khuy ngọc
                            phía trước</li>
                        <li>Với dáng đầm cơ bản ôm sát cơ thể, nhấn nhá một chút với bèo ở eo. Đầm phù hợp diện đi
                            làm hoặc đến một bữa tiệc tối sang trọng với trang sức và ví cầm tay. Những phụ kiện đi
                            kèm nên là những loại có dây bản nhỏ như quai túi hay dây giày, trông bạn sẽ quyến rũ và
                            thanh lịch hơn với phong cách quý phái này.</li>
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
                    <p>Chiếc đầm Peplum luôn là lựa chọn hàng đầu cho nàng mong muốn sự hoàn hảo trong trang phục.
                    </p><br>
                    <p>Chất liệu tuysi cao cấp, chiều dài qua đầu gối, có kéo khóa sau lưng, phần chân váy xẻ sau
                        giúp nàng dễ dàng di chuyển. Thiết kế tay áo độc đáo tạo điềm nhấn cho trang phục.</p>
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