// Sample product data (you can replace this with your actual product data)
const products = [
    { name: "Áo sơ mi nữ", category: "Nữ", type: "Áo" },
    { name: "Quần jean nam", category: "Nam", type: "Quần" },
    { name: "Đầm hoa", category: "Đầm", type: "Đầm" },
    // Add more products as needed
];

const searchInput = document.getElementById('searchInput');
const searchButton = document.getElementById('searchButton');
const searchResults = document.getElementById('searchResults');

function performSearch() {
    const query = searchInput.value.toLowerCase();
    const filteredProducts = products.filter(product =>
        product.name.toLowerCase().includes(query) ||
        product.category.toLowerCase().includes(query) ||
        product.type.toLowerCase().includes(query)
    );

    displayResults(filteredProducts);
}

function displayResults(results) {
    searchResults.innerHTML = '';
    if (results.length === 0) {
        searchResults.style.display = 'none';
        return;
    }

    results.forEach(product => {
        const resultItem = document.createElement('div');
        resultItem.classList.add('search-result-item');
        resultItem.textContent = `${product.name} - ${product.category} (${product.type})`;
        resultItem.addEventListener('click', () => {
            // Handle click on search result (e.g., navigate to product page)
            console.log(`Clicked on: ${product.name}`);
            searchResults.style.display = 'none';
        });
        searchResults.appendChild(resultItem);
    });

    searchResults.style.display = 'block';
}

searchButton.addEventListener('click', performSearch);
searchInput.addEventListener('keyup', (e) => {
    if (e.key === 'Enter') {
        performSearch();
    }
});

// Close search results when clicking outside
document.addEventListener('click', (e) => {
    if (!searchResults.contains(e.target) && e.target !== searchInput && e.target !== searchButton) {
        searchResults.style.display = 'none';
    }
});