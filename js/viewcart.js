// DOM Elements
const addToCartBtn = document.querySelector('.add-to-cart-btn');
const cartCount = document.getElementById('cart-count');
const cartItems = document.getElementById('cart-items');
const cartPage = document.getElementById('cart-page');
const cartIcon = document.querySelector('.cart-icon');

// Cart Array to Store Items
let cart = [];

// Add to Cart Button Functionality
addToCartBtn.addEventListener('click', function() {
  const product = {
    name: 'Colorful Pattern Shirts',
    price: '$238.85',
    quantity: 1,
  };

  // Add product to cart array
  cart.push(product);

  // Update cart count
  cartCount.textContent = cart.length;

  // Update Cart Page
  updateCartPage();
});

// Update Cart Page with Items
function updateCartPage() {
  cartItems.innerHTML = ''; // Clear previous items

  cart.forEach(item => {
    const cartItem = document.createElement('div');
    cartItem.classList.add('cart-item');
    cartItem.innerHTML = `
      <h3>${item.name}</h3>
      <p>Price: ${item.price}</p>
      <p>Quantity: ${item.quantity}</p>
    `;
    cartItems.appendChild(cartItem);
  });
}

// Show Cart Page When Clicking Cart Icon
cartIcon.addEventListener('click', function() {
  cartPage.classList.toggle('hidden');
});
