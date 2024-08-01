document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search-item');
    const products = document.querySelectorAll('.hot-product-item');

    searchInput.addEventListener('keyup', () => {
        const filter = searchInput.value.toLowerCase();
        products.forEach(product => {
            const productName = product.querySelector('p a').innerText.toLowerCase();
            if (productName.includes(filter)) {
                product.style.display = '';
            } else {
                product.style.display = 'none';
            }
        });
    });
});