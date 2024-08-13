@extends('layouts.main.login_register_layout')
@section('content')
<div class="container">
    <div class="overlay">
        <button class="close-btn">&times;</button>
        <h2 id="formTitle">Đăng nhập</h2>
        <div class="tab-overlay">
            <div class="tab active" data-tab="login">Đăng nhập</div>
            <div class="tab" data-tab="register">Đăng ký</div>
        </div>
        <form id="loginForm">
            <div class="form-group">
                <input type="text" id="loginUsername" placeholder="Tên đăng nhập" required>
            </div>
            <div class="form-group">
                <input type="password" id="loginPassword" placeholder="Mật khẩu" required>
            </div>
            <div class="forgot-password">
                <a href="#">Quên mật khẩu?</a>
            </div>
            <button type="submit" class="submit-btn">TIẾP TỤC</button>
            <div class="alert error" id="loginError">Tài khoản hoặc mật khẩu không đúng!</div>
            <div class="alert success" id="loginSuccess">Đăng nhập thành công!</div>
        </form>
        <form id="registerForm" style="display: none;">
            <div class="form-group">
                <input type="text" id="registerFirstName" placeholder="Họ" required>
            </div>
            <div class="form-group">
                <input type="text" id="registerLastName" placeholder="Tên" required>
            </div>
            <div class="form-group">
                <input type="email" id="registerEmail" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="text" id="registerUsername" placeholder="Tên đăng nhập" required>
            </div>
            <div class="form-group">
                <input type="password" id="registerPassword" placeholder="Mật khẩu" required>
            </div>
            <button type="submit" class="submit-btn">TẠO TÀI KHOẢN</button>
            <div class="alert success" id="registerSuccess">Đăng ký thành công!</div>
        </form>
    </div>
</div>
@endsection