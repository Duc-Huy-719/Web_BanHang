const cartItems = [
    { id: 1, name: "Áo sơ mi lụa", price: 30000, oldPrice: 56000, image: "../image/product/AoSoMiNu/product1.jpg", quantity: 1 },
    { id: 2, name: "T-Shirt Cotton 220 GSM", price: 30000, oldPrice: 56000, image: "../image/product/AoSoMiNu/product2.jpg", quantity: 1 },
    { id: 3, name: "T-Shirt Cotton 220 GSM", price: 30000, oldPrice: 56000, image: "../image/product/AoSoMiNu/product3.jpg", quantity: 1 }
];

function renderCart() {
    const cartItemsElement = document.getElementById('cartItems');
    const totalItemsElement = document.getElementById('totalItems');
    const totalPriceElement = document.getElementById('totalPrice');
    const finalPriceElement = document.getElementById('finalPrice');
    const tempTotalElement = document.getElementById('tempTotal');

    let totalItems = 0;
    let totalPrice = 0;
    let finalPrice = 0;
    let tempTotal = 0;

    cartItemsElement.innerHTML = '';

    cartItems.forEach(item => {
        const itemElement = document.createElement('tr');

        itemElement.innerHTML = `
            <td><img style="width: 70px;" src="${item.image}" alt="${item.name}"></td>
            <td>
                <div class="product-detail-right-infor">
                    <h1>${item.name}</h1>
                    <div class="product-item-price">
                        <p>${item.price} <sub>đ</sub> <span>${item.oldPrice} <sub>đ</sub></span></p>
                    </div>
                </div>
                <div class="product-deatail-right-quanty-input">
                    <i class="ri-subtract-line" onclick="changeQuantity(${item.id}, -1)"></i>
                    <input class="quantity-input" type="number" value="${item.quantity}" readonly>
                    <i class="ri-add-line" onclick="changeQuantity(${item.id}, 1)"></i>
                </div>
            </td>
            <td>
                <p>${item.price * item.quantity} <sub>đ</sub></p>
            </td>
            <td onclick="removeItem(${item.id})">Xóa</td>
        `;

        cartItemsElement.appendChild(itemElement);

        totalItems += item.quantity;
        totalPrice += item.price * item.quantity;
        finalPrice += item.price * item.quantity;
        tempTotal += item.price * item.quantity;
    });

    totalItemsElement.innerText = totalItems;
    totalPriceElement.innerText = totalPrice.toLocaleString() + ' đ';
    finalPriceElement.innerText = finalPrice.toLocaleString() + ' đ';
    tempTotalElement.innerText = tempTotal.toLocaleString() + ' đ';
}

function changeQuantity(itemId, change) {
    const item = cartItems.find(item => item.id === itemId);
    if (item) {
        item.quantity += change;
        if (item.quantity <= 0) {
            item.quantity = 1;
        }
        renderCart();
    }
}

function removeItem(itemId) {
    const itemIndex = cartItems.findIndex(item => item.id === itemId);
    if (itemIndex !== -1) {
        cartItems.splice(itemIndex, 1);
        renderCart();
    }
}

function updateCart() {
    // Logic to update the cart
}

document.addEventListener("DOMContentLoaded", renderCart);
