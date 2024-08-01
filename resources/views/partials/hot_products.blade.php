<!-- resources/views/partials/hot_products.blade.php -->
<section class="hot-products">
    <div class="container">
        <div class="row-grid">
            <p class="heading-text">Sản Phẩm Mới</p>
        </div>
        <div class="row-grid row-grid-hot-products">
            @foreach($hotProducts as $product)
            <div class="hot-product-item">
                <div class="image-container">
                    <a href="{{ route('product.show', $product->slug) }}"><img src="{{ asset($product->image) }}"
                            alt="{{ $product->name }}"></a>
                    <div class="overlay">
                        <div class="overlay-content"><a href="{{ route('product.show', $product->slug) }}">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <p><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></p>
                <span>{{ $product->material }}</span>
                <div class="product-item-price">
                    <p>{{ number_format($product->price, 0, ',', '.') }}<sup>đ</sup>
                        @if($product->original_price)
                        <span>{{ number_format($product->original_price, 0, ',', '.') }}<sup>đ</sup></span>
                        @endif
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>