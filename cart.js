let iconCart = document.querySelector('.cart');
let body = document.querySelector('body');
let closeCart = document.querySelector('.carttab .close');

let cart = JSON.parse(localStorage.getItem("cart")) || [];

// فتح السلة
iconCart.addEventListener('click', () => {
    body.classList.add('show-cart');
});

// غلق السلة
closeCart.addEventListener('click', () => {
    body.classList.remove('show-cart');
});

// إضافة منتج
function addToCart(name, price) {
    cart.push({ name, price });
    saveCart();
    updateCart();
}

// حذف منتج
function removeFromCart(index) {
    cart.splice(index, 1);
    saveCart();
    updateCart();
}

// حفظ في LocalStorage
function saveCart() {
    localStorage.setItem("cart", JSON.stringify(cart));
}

// تحديث السلة
function updateCart() {
    const cartItems = document.getElementById("cartItems");
    const cartCount = document.getElementById("cartCount");

    cartItems.innerHTML = "";
    cartCount.innerText = cart.length;

    cart.forEach((item, index) => {
        cartItems.innerHTML += `
            <div class="cart-item">
                <span>${item.name} - $${item.price}</span>
                <button onclick="removeFromCart(${index})">X</button>
            </div>
        `;
    });
}

// تشغيل عند فتح الصفحة
updateCart();
