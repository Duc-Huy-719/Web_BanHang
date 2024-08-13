@extends('layouts.main.order_layout')
@section('content')
<section class="order-section p-to-top">
    <div class="container">
        <div class="row-grid">
            <div class="order-section-left">
                <h3>Thông Tin Giao Hàng</h3>
                <div class="input-group">
                    <input type="text" placeholder=" Họ tên">
                    <input type="text" placeholder="SĐT">
                </div>
                <input type="email" placeholder="Email">
                <div class="order-section-right-select">
                    <select name="city" id="city">
                        <option value="">Tỉnh/TP</option>
                    </select>
                    <select name="district" id="district">
                        <option value="">Quận/huyện</option>
                    </select>
                    <select name="ward" id="ward">
                        <option value="">Phường/xã</option>
                    </select>
                </div>
                <input type="text" placeholder="Địa chỉ">
            </div>
            <div class="order-section-right">
                <div class="cart-summary">
                    <h3>Tóm tắt đơn hàng</h3>
                    <div class="summary-item">
                        <span>Tổng tiền hàng</span>
                        <span>530,000đ</span>
                    </div>
                    <div class="summary-item">
                        <span>Tạm tính</span>
                        <span>530,000đ</span>
                    </div>
                    <div class="summary-item">
                        <span>Phí vận chuyển</span>
                        <span>15.000đ</span>
                    </div>
                    <div class="summary-item summary-total">
                        <span>Tiền thanh toán</span>
                        <span>545.000đ</span>
                    </div>
                    <div class="tabs">
                        <div class="tab active">Mã phiếu giảm giá</div>
                        <div class="tab">Mã của tôi</div>
                    </div>
                    <div class="apply-voucher">
                        <input type="text" placeholder="Mã giảm giá">
                        <button onclick="applyVoucher()">ÁP DỤNG</button>
                    </div>
                    <button class="complete-button" onclick="completeOrder()">HOÀN THÀNH</button>
                </div>
            </div>
        </div>
        <div class="payment-methods">
            <h3>Phương thức thanh toán</h3>
            <div class="payment-methods-content">
                <p class="payment-info">Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không
                    bao giờ được lưu lại.
                </p>
                <div class="payment-method">
                    <input type="radio" id="credit-card" name="payment-method">
                    <label for="credit-card">Thanh toán bằng thẻ tín dụng
                        <img src="https://pubcdn.ivymoda.com/ivy2/images/1.png" alt="Visa">
                    </label>
                </div>
                <div class="payment-method">
                    <input type="radio" id="atm" name="payment-method">
                    <label for="atm">Thanh toán bằng thẻ ATM</label>
                </div>
                <div class="payment-method">
                    <input type="radio" id="momo" name="payment-method">
                    <label for="momo">Thanh toán bằng Momo</label>
                </div>
                <div class="payment-method">
                    <input type="radio" id="cod" name="payment-method" checked>
                    <label for="cod">Thanh toán khi giao hàng</label>
                </div>
            </div>
        </div>
        <button onclick="showCart()">HIỂN THỊ SẢN PHẨM</button>
        <div id="cartItems" class="cart-items" style="display: none;">
            <h3>Giỏ hàng của bạn</h3>
            <div class="cart-item">
                <img src="https://picsum.photos/100/100?random=3" alt="Áo khoác Gile Ladies Rayon">
                <div class="cart-item-details">
                    <h4>Áo khoác Gile Ladies Rayon</h4>
                    <p>Màu sắc: Be, Size: L</p>
                    <p>Số lượng: 1</p>
                </div>
                <div class="cart-item-price">
                    <p>693.000đ</p>
                    <p>-297.000đ (-30%)</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection