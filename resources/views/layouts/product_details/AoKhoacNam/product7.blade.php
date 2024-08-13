@extends('layouts.main.product_details')
@section('content')
<section class="product-detail p-to-top">
    <div class="container">
        <div class="row-grid-product-detail">
            <div class="product-detail-left">
                <div class="product-img-items">
                    <img src="{{asset('frontend/asset/image/product/AoKhoacNam/product7.1.webp')}}" alt=""
                        class="small-img active">
                    <img src="{{asset('frontend/asset/image/product/AoKhoacNam/product7.2.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoKhoacNam/product7.3.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoKhoacNam/product7.4.webp')}}" alt=""
                        class="small-img">
                    <img src="{{asset('frontend/asset/image/product/AoKhoacNam/product7.5.webp')}}" alt=""
                        class="small-img">
                </div>
                <div class="big-img-container">
                    <img src="{{asset('frontend/asset/image/product/AoKhoacNam/product7.jpg')}}" alt="" class="big-img">
                </div>
            </div>
            <div class="product-detail-right">
                <h1>Áo Khoác thể thao Pro Active</h1>
                <span class="span-product">Chất liệu: Polyester</span>
                <p class="p-product-detail">310,000đ <span>350,000đ</span></p>
                <div class="product-detail-description">
                    <h2>Đặc điểm nổi bật</h2>
                    <ul>
                        <li>Chất liệu: Polyester</li>
                        <li>Chất liệu áo khoác thể thao có khả năng giữ ấm</li>
                        <li>Hạn chế xù lông và chống nhăn</li>
                        <li>Form áo: Regular, ôm nhẹ</li>
                        <li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam. <a href="#">Xem nhà máy ></a></li>
                        <li>Người mẫu: 177cm - 69kg, mặc áo 2XL</li>
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
                    <p>Với 100% chất liệu vải polyester dày dặn vừa tăng cường khả năng giữ ấm, vừa tạo sự khỏe
                        khoắn mà nhiều anh em đang tìm kiếm. Đặc biệt, việc xử lý kỹ càng từ khâu nguyên liệu cũng
                        giúp áo hạn chế nhăn, hạn chế xù vải hiệu quả.</p><br>
                    <p>Với dòng áo khoác thể thao không mũ này, sẽ có rất nhiều cách để lên outfit cho mọi anh chàng
                        xuất hiện tự tin và năng động trong mọi hoạt động thể thao. Bạn hãy thử lên concept cùng áo
                        phông, quần short; áo thun dài tay, quần nỉ; áo phông ngắn tay, quần nỉ… Bất cứ bộ trang
                        phục nào bạn muốn “diện” khi đi tập thể dục thể thao, áo khoác không mũ Pro Active đều có
                        thể kết hợp.</p>
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
            <a href=""><img src="{{asset('frontend/asset/image/product/AoKhoacNam/product3.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoKhoacNam/product3')}}">Xem
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
            <a href=""><img src="{{asset('frontend/asset/image/product/AoThunNu/product8.jpg')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoThunNu/product8')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo thun Pink Baby</a></p>
        <span>Thun</span>
        <div class="product-item-price">
            <p>180,000<sup>đ</sup> <span>220,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/QuanJeanNu/product7.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/QuanJeanNu/product7')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Quần Denim ống sẻ</a></p>
        <span>Denim</span>
        <div class="product-item-price">
            <p>350,000<sup>đ</sup> <span>370,000<sup>đ</sup></span> </p>
        </div>
    </div>
    <div class="hot-product-item">
        <div class="image-container">
            <a href=""><img src="{{asset('frontend/asset/image/product/SoMiNam/product7.webp')}}" alt=""></a>
            <div class="overlay">
                <div class="overlay-content"><a href="{{asset('/layouts/product_details/AoThunNam/product7')}}">Xem
                        thêm</a>
                </div>
            </div>
        </div>
        <p><a href="">Áo sơ mi denim Regular fit</a></p>
        <span>Denim</span>
        <div class="product-item-price">
            <p>270,000<sup>đ</sup> <span>300,000<sup>đ</sup></span> </p>
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
</div>
@endsection