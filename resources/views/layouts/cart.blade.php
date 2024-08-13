@extends('layouts.main.cart_layout')
@section('content')
<section class="cart-section p-to-top">
    <div class="container">
        <div class="row-grid">
            <div class="cart-section-left">
                <h2 class="main-h2">Chi Tiết Đơn Hàng</h2>
                <div class="cart-section-left-detail">
                    <table id="cartTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh</th>
                                <th>Sản Phẩm</th>
                                <th>Thành Tiền</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody id="cartItems">
                            <tr>
                                <td>
                                    <p>1</p>
                                </td>
                                <td><img style="width: 70px;"
                                        src="{{asset('frontend/asset/image/product/AoKhoacNam/product1.jpg')}}" alt="">
                                </td>
                                <td>
                                    <div class="product-detail-right-infor">
                                        <h2>Áo khoác nam có mũ Daily Wear</h2>
                                        <div class="product-item-material">
                                            <h1>Polyester</h1>
                                        </div>
                                        <div class="product-item-price">
                                            <p>530,000 <sub>đ</sub> <span>550,000 <sub>đ</sub></span></p>
                                        </div>
                                    </div>
                                    <div class="product-deatail-right-quanty-input">
                                        <i class="ri-subtract-line"></i>
                                        <input onKeydown="return false" class="quantity-input" type="number" value="1">
                                        <i class="ri-add-line"></i>
                                    </div>
                                </td>
                                <td>
                                    <p>530,000 <sub>đ</sub></p>
                                </td>
                                <td>Xóa</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <button class="main-btn">Cập Nhật Giỏ Hàng</button>
                    <a style="color: crimson; font-size: italic;" href="">Tiếp Tục Mua Hàng</a>
                </div>
            </div>
            <div class="cart-summary">
                <h3>Tổng tiền giỏ hàng</h3>
                <p>Tổng sản phẩm: <span id="totalItems">1</span></p>
                <p>Tổng tiền hàng: <span id="totalPrice">530,000 đ</span></p>
                <p>Thành tiền: <span id="finalPrice">530,000 đ</span></p>
                <p>Tạm tính: <span id="tempTotal">530,000 đ</span></p>
                <p style="color: crimson; font-style: italic;">Miễn đổi trả đối với sản phẩm đồng giá / sale trên
                    50%</p>
                <button onclick="placeOrder()"><a href="../html/order.html">ĐẶT HÀNG</a></button>
            </div>

        </div>
    </div>
</section>
@endsection