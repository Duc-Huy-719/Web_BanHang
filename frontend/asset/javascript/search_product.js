document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search');
    const searchResults = document.getElementById('search-results');

    const products = [
        {
            name: 'Áo Phao Nam Siêu Nhẹ',
            price: '510,000đ',
            oldPrice: '550,000đ',
            material: 'Polyester',
            image: 'http://127.0.0.1:5500/asset/image/product/AoKhoacNam/product3.jpg'
        },
        {
            name: 'Áo thun Pink Baby',
            price: '180,000đ',
            oldPrice: '220,000đ',
            material: 'Thun',
            image: 'http://127.0.0.1:5500/asset/image/product/AoThunNu/product8.jpg'
        },
        {
            name: 'Quần Denim ống sẻ',
            price: '350.000đ',
            oldPrice: '370.000đ',
            material: 'Denim',
            image: 'http://127.0.0.1:5500/asset/image/product/QuanJeanNu/product7.webp'
        }
    ];

    searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase();
        searchResults.innerHTML = '';

        if (query) {
            const filteredProducts = products.filter(product => product.name.toLowerCase().includes(query));
            filteredProducts.forEach(product => {
                const productElement = document.createElement('div');
                productElement.classList.add('product');
                productElement.innerHTML = `
                    <img src="${product.image}" alt="${product.name}">
                    <div>
                        <div>${product.name}</div>
                        <div style="color: red;">${product.price}</div>
                        <div><s>${product.oldPrice}</s> ${product.discount}</div>
                    </div>
                `;
                searchResults.appendChild(productElement);
            });
        }
    });
});