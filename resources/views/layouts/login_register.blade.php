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
        <form id="authForm" method="POST" action="{{ url('/layouts/auth') }}">
            @csrf
            <div id="loginFields">
                <div class="form-group">
                    <input type="text" name="USERID" id="loginUsername" placeholder="Tên đăng nhập" required>
                </div>
                <div class="form-group">
                    <input type="password" name="MATKHAU" id="loginPassword" placeholder="Mật khẩu" required>
                </div>
            </div>
            <div id="registerFields" style="display: none;">
                <div class="form-group">
                    <input type="text" name="HONV" placeholder="Họ" required>
                </div>
                <div class="form-group">
                    <input type="text" name="TENNV" placeholder="Tên" required>
                </div>
                <div class="form-group">
                    <input type="email" name="EMAIL" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" name="USERID" placeholder="Tên đăng nhập" required>
                </div>
                <div class="form-group">
                    <input type="password" name="MATKHAU" placeholder="Mật khẩu" required>
                </div>
            </div>
            <button type="submit" class="submit-btn">TIẾP TỤC</button>
            <div class="alert error" id="loginError" style="display: none;">Tài khoản hoặc mật khẩu không đúng!</div>
            <div class="alert success" id="registerSuccess" style="display: none;">Đăng ký thành công!</div>
        </form>
    </div>
</div>
@endsection
<!-- <div class="container">
    <div class="overlay">
        <button class="close-btn">&times;</button>
        <h2 id="formTitle">Đăng nhập</h2>
        <div class="tab-overlay">
            <div class="tab active" data-tab="login">Đăng nhập</div>
            <div class="tab" data-tab="register">Đăng ký</div>
        </div>
        <form id="loginForm" method="POST" action="{{url('/layouts/auth')}}">
            @csrf
            <div class="form-group">
                <input type="text" name="USERID" id="loginUsername" placeholder="Tên đăng nhập" required>
            </div>
            <div class="form-group">
                <input type="password" name="MATKHAU" id="loginPassword" placeholder="Mật khẩu" required>
            </div>
            <div class="forgot-password">
                <a href="#">Quên mật khẩu?</a>
            </div>
            <button type="submit" class="submit-btn">TIẾP TỤC</button>
            <div class="alert error" id="loginError">{{session('loginError')}}</div>
            <div class="alert success" id="loginSuccess">Đăng nhập thành công!</div>
        </form>
        <form id="registerForm" method="POST" action="{{ url('/layouts/register')}}" style="display: none;">
            @csrf
            <div class="form-group">
                <input type="text" name="HONV" id="registerFirstName" placeholder="Họ" required>
            </div>
            <div class="form-group">
                <input type="text" name="TENNV" id="registerLastName" placeholder="Tên" required>
            </div>
            <div class="form-group">
                <input type="email" name="EMAIL" id="registerEmail" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="text" name="USERID" id="registerUsername" placeholder="Tên đăng nhập" required>
            </div>
            <div class="form-group">
                <input type="password" name="MATKHAU" id="registerPassword" placeholder="Mật khẩu" required>
            </div>
            <button type="submit" class="submit-btn">TẠO TÀI KHOẢN</button>
            <div class="alert success" id="registerSuccess">Đăng ký thành công!</div>
        </form>
    </div>
</div>
@endsection -->