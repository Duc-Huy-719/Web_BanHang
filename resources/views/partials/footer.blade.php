<!-- resources/views/partials/footer.blade.php -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Tải xuống ứng dụng của chúng tôi</h3>
                <p>Tải App cho điện thoại Android và ios</p>
                <div class="app-logo">
                    <img src="{{ asset('image/logo/play-store.png') }}">
                    <img src="{{ asset('image/logo/app-store.png') }}">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="{{ asset('image/logo/Mango_store.jpg') }}">
                <p>Mục đích của chúng tôi là mang lại niềm vui và lợi ích của thời trang một cách bền vững cho nhiều
                    người</p>
            </div>
            <div class="footer-col-3">
                <h3>Liên kết hữu ích</h3>
                <ul>
                    <li>Phiếu giảm giá</li>
                    <li>Bài viết trên blog</li>
                    <li>Chính sách hoàn trả</li>
                    <li>Tham gia liên kết</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Theo dõi chúng tôi</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube </li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="Copyright">Copyright {{ date('Y') }}</p>
    </div>
</div>