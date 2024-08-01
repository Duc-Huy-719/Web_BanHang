const cartIcon = document.getElementById('cartIcon');
const cartPanel = document.getElementById('cartPanel');
const closeCart = document.getElementById('closeCart');
const addToCartBtn = document.getElementById('addToCart');
const quantityInput = document.getElementById('quantity');
const decreaseQuantity = document.getElementById('decreaseQuantity');
const increaseQuantity = document.getElementById('increaseQuantity');
const notification = document.getElementById('notification');
const cartItems = document.getElementById('cartItems');
const cartTotal = document.getElementById('cartTotal');
const cartCount = document.querySelector('.cart-count');

let cart = [];

cartIcon.addEventListener('click', () => {
    cartPanel.classList.add('open');
});

closeCart.addEventListener('click', () => {
    cartPanel.classList.remove('open');
});

decreaseQuantity.addEventListener('click', () => {
    if (quantityInput.value > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }
});

increaseQuantity.addEventListener('click', () => {
    quantityInput.value = parseInt(quantityInput.value) + 1;
});

addToCartBtn.addEventListener('click', () => {
    const product = {
        name: 'Áo sơ mi lụa',
        price: 553000,
        quantity: parseInt(quantityInput.value),
        image: 'http://127.0.0.1:5500/frontend/asset/image/product/AoSoMiNu/product1.jpg'
    };
    addToCart(product);
    showNotification();
    updateCartUI();
});

function addToCart(product) {
    const existingItem = cart.find(item => item.name === product.name);
    if (existingItem) {
        existingItem.quantity += product.quantity;
    } else {
        cart.push(product);
    }
}

function showNotification() {
    notification.style.display = 'block';
    setTimeout(() => {
        notification.style.display = 'none';
    }, 3000);
}

function updateCartUI() {
    cartItems.innerHTML = '';
    let total = 0;

    cart.forEach((item, index) => {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `
                    <img src="${item.image}" alt="${item.name}">
                    <div class="cart-item-info">
                        <h3>${item.name}</h3>
                        <p>Số lượng: ${item.quantity}</p>
                        <p class="cart-item-price">${(item.price * item.quantity).toLocaleString()}đ</p>
                    </div>
                    <i class="ri-delete-bin-line remove-item" data-index="${index}"></i>
                `;
        cartItems.appendChild(cartItem);
        total += item.price * item.quantity;
    });

    cartTotal.textContent = total.toLocaleString() + 'đ';
    cartCount.textContent = cart.reduce((acc, item) => acc + item.quantity, 0);

    const removeButtons = document.querySelectorAll('.remove-item');
    removeButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const index = e.target.getAttribute('data-index');
            removeFromCart(index);
        });
    });
}

function removeFromCart(index) {
    cart.splice(index, 1);
    updateCartUI();
}

// Image gallery functionality
const smallImages = document.querySelectorAll('.small-img');
const bigImg = document.getElementById('bigImg');