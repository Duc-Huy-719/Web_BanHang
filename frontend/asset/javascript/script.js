const SliderArrowRight = document.querySelector('.fa-arrow-right')
const SliderArrowLeft = document.querySelector('.fa-arrow-left')
const SlideItem = document.querySelector('.slider-items')
const SlideItems = document.querySelectorAll('.slider-item')
let SlideLength = SlideItems.length - 1
let active = 0;
if (SliderArrowRight) {
    SliderArrowRight.addEventListener('click', () => {
        if (active >= SlideLength) {
            active = 0

        } else {
            active++

        }
        activeBanner(active)

    })
}
if (SliderArrowLeft) {
    SliderArrowLeft.addEventListener('click', () => {

        if (active - 1 < 0) {
            active = SlideLength

        } else {
            active--


        }
        activeBanner(active)
    })
}
function activeBanner(active) {
    SlideItem.style.left = "-" + active * 100 + "%"
}



// Menu Mobil active

const MenuBar = document.querySelector('.header-bar-icon');
const NavMobile = document.querySelector('header nav');
MenuBar.addEventListener('click', () => {
    NavMobile.classList.toggle('active');
    NavMobile.style.transition = '0.3s'
})
//Header -> sticky

const header = document.querySelector('header')
window.addEventListener('scroll', () => {
    window.pageYOffset >= 50 ? header.classList.add('active')
        : header.classList.remove('active')
})
//product-detail
const subImg = document.querySelectorAll('.small-img')

for (let index = 0; index < subImg.length; index++) {
    if (subImg[index].src == document.querySelector('.big-img').src) {
        subImg[index].classList.add('active')
    }
    subImg[index].addEventListener('click', () => {
        for (let index = 0; index < subImg.length; index++) {
            subImg[index].classList.remove('active')

        }
        document.querySelector('.big-img').src = subImg[index].src
        subImg[index].classList.add('active')
    })

}
//Product-quantity
const InputValue = document.querySelectorAll('.product-detail-quantity input')
const InputMinus = document.querySelectorAll('.product-detail-quantity i:first-child')
const InputPlus = document.querySelectorAll('.product-detail-quantity i:last-child')

if (InputMinus != null && InputPlus != null && InputValue != null) {
    for (let index = 0; index < InputValue.length; index++) {

        InputPlus[index].addEventListener('click', () => {
            let a = InputValue[index].value;
            a++
            InputValue[index].value = a
        })
        InputMinus[index].addEventListener('click', () => {
            let a = InputValue[index].value;
            if (a <= 1) {
                a = 1
            } else {
                a--
            }
            InputValue[index].value = a
        })

    }


}
//Mouse hover cart
const CartIcon = document.querySelector('.header-cart-icon')
const CartBox = document.querySelector('.header-cart-box')
CartIcon.addEventListener('mouseover', () => {
    CartBox.classList.add('active')

})
window.addEventListener('scroll', () => {
    window.pageYOffset >= 0 ? CartBox.classList.remove('active')
        : CartBox.classList.add('active')
})
// login/register
// document.addEventListener('DOMContentLoaded', function () {
//     const tabs = document.querySelectorAll('.tab');
//     const closeBtn = document.querySelector('.close-btn');
//     const overlay = document.querySelector('.overlay');
//     const loginForm = document.getElementById('loginForm');
//     const registerForm = document.getElementById('registerForm');
//     const formTitle = document.getElementById('formTitle');

//     let users = [];

//     tabs.forEach(tab => {
//         tab.addEventListener('click', function () {
//             tabs.forEach(t => t.classList.remove('active'));
//             this.classList.add('active');
//             if (this.dataset.tab === 'login') {
//                 loginForm.style.display = 'block';
//                 registerForm.style.display = 'none';
//                 formTitle.textContent = 'Đăng nhập';
//             } else {
//                 loginForm.style.display = 'none';
//                 registerForm.style.display = 'block';
//                 formTitle.textContent = 'Đăng ký';
//             }
//         });
//     });

//     closeBtn.addEventListener('click', function () {
//         overlay.style.display = 'none';
//     });

//     loginForm.addEventListener('submit', function (e) {
//         e.preventDefault();
//         const username = document.getElementById('loginUsername').value;
//         const password = document.getElementById('loginPassword').value;
//         const user = users.find(u => u.username === username && u.password === password);
//         if (user) {
//             document.getElementById('loginSuccess').style.display = 'block';
//             document.getElementById('loginError').style.display = 'none';
//             setTimeout(() => {
//                 alert('Đăng nhập thành công!');
//                 overlay.style.display = 'none';
//             }, 1500);
//         } else {
//             document.getElementById('loginError').style.display = 'block';
//             document.getElementById('loginSuccess').style.display = 'none';
//         }
//     });

//     registerForm.addEventListener('submit', function (e) {
//         e.preventDefault();
//         const newUser = {
//             firstName: document.getElementById('registerFirstName').value,
//             lastName: document.getElementById('registerLastName').value,
//             email: document.getElementById('registerEmail').value,
//             username: document.getElementById('registerUsername').value,
//             password: document.getElementById('registerPassword').value
//         };
//         users.push(newUser);
//         document.getElementById('registerSuccess').style.display = 'block';
//         setTimeout(() => {
//             tabs[0].click();
//             registerForm.reset();
//             document.getElementById('registerSuccess').style.display = 'none';
//         }, 1500);
//     });
// });
//order
document.addEventListener("DOMContentLoaded", function () {
    var completeOrderButton = document.getElementById("completeOrder");

    completeOrderButton.addEventListener("click", function () {
        alert("Đơn hàng đã đặt thành công");
    });
});
// hiệu ứng khi di chuyển chuột vào ảnh
document.addEventListener('DOMContentLoaded', function () {
    const productItems = document.querySelectorAll('.hot-product-item');

    productItems.forEach(item => {
        const imageContainer = item.querySelector('.image-container');
        const overlay = item.querySelector('.overlay');
        const overlayContent = item.querySelector('.overlay-content');

        imageContainer.addEventListener('click', (e) => {
            e.preventDefault();
            imageContainer.classList.toggle('clicked');
        });

        overlayContent.addEventListener('mouseenter', () => {
            if (!imageContainer.classList.contains('clicked')) {
                overlayContent.style.backgroundColor = '#fff';
                overlayContent.style.color = '#000';
                overlayContent.style.borderColor = '#000';
            }
        });

        overlayContent.addEventListener('mouseleave', () => {
            if (!imageContainer.classList.contains('clicked')) {
                overlayContent.style.backgroundColor = 'transparent';
                overlayContent.style.color = '#fff';
                overlayContent.style.borderColor = '#fff';
            }
        });

        item.addEventListener('mouseleave', () => {
            imageContainer.classList.remove('clicked');
            overlayContent.style.backgroundColor = 'transparent';
            overlayContent.style.color = '#fff';
            overlayContent.style.borderColor = '#fff';
        });
    });
});
// order-detail
function applyVoucher() {
    alert('Mã giảm giá đã được áp dụng!');
}

function completeOrder() {
    alert('Bạn đã đặt hàng thành công!');
}

function showCart() {
    const cartItems = document.getElementById('cartItems');
    cartItems.style.display = cartItems.style.display === 'none' ? 'block' : 'none';
}