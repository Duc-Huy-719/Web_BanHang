<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Nhập và Đăng Ký</title>
    <link rel="stylesheet" href="{{asset('frontend/asset/css/login.css')}}">
</head>

<body>
    @Yield('content')
</body>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll(".tab");
    const loginForm = document.getElementById("loginForm");
    const registerForm = document.getElementById("registerForm");
    const loginTab = document.querySelector('.tab[data-tab="login"]');
    const registerTab = document.querySelector('.tab[data-tab="register"]');
    const loginError = document.getElementById("loginError");
    const loginSuccess = document.getElementById("loginSuccess");
    const registerSuccess = document.getElementById("registerSuccess");

    tabs.forEach(tab => {
        tab.addEventListener("click", () => {
            tabs.forEach(t => t.classList.remove("active"));
            tab.classList.add("active");
            if (tab.dataset.tab === "login") {
                loginForm.style.display = "block";
                registerForm.style.display = "none";
            } else {
                loginForm.style.display = "none";
                registerForm.style.display = "block";
            }
        });
    });
    loginTab.addEventListener('click', () => {
        loginTab.classList.add('active');
        registerTab.classList.remove('active');
        loginForm.style.display = 'block';
        registerForm.style.display = 'none';
        formTitle.textContent = 'Đăng nhập';
    });

    registerTab.addEventListener('click', () => {
        registerTab.classList.add('active');
        loginTab.classList.remove('active');
        registerForm.style.display = 'block';
        loginForm.style.display = 'none';
        formTitle.textContent = 'Đăng ký';
    });


    loginForm.addEventListener("submit", (e) => {
        e.preventDefault();
        const username = document.getElementById("loginUsername").value;
        const password = document.getElementById("loginPassword").value;

        if (username === "registeredUser" && password === "password") {
            loginSuccess.style.display = "block";
            loginError.style.display = "none";
            setTimeout(() => {
                window.location.href = "{{asset('/layouts')}}"; // Redirect to the home page
            }, 1000);
        } else {
            loginError.style.display = "block";
        }
    });

    registerForm.addEventListener("submit", (e) => {
        e.preventDefault();
        registerSuccess.style.display = "block";
        setTimeout(() => {
            document.querySelector(".tab[data-tab='login']").click();
            registerSuccess.style.display = "none";
        }, 1000);
    });

    document.querySelector(".close-btn").addEventListener("click", () => {
        window.location.href = "{{asset('/layouts')}}"; // Redirect to the home page
    });
});
</script>