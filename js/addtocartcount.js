// Array to store cart items
let cart = [];

// Function to handle adding items to the cart
function addToCart(itemName, itemPrice) {
    // Create an object for the cart item
    const item = {
        name: itemName,
        price: itemPrice
    };
    
    // Push the item to the cart array
    cart.push(item);
    
    // Update the cart count
    updateCartCount();
}

// Function to update cart count
function updateCartCount() {
    const cartCount = document.getElementById('cart-count');
    cartCount.innerText = cart.length; // Display the number of items in the cart
}

// Add event listener to all "Add to Cart" buttons
document.querySelectorAll('.add-to-cart').forEach((button, index) => {
    button.addEventListener('click', function () {
        const itemName = document.querySelectorAll('.product-info h3')[index].innerText;
        const itemPrice = document.querySelectorAll('.current-price')[index].innerText;

        // Call addToCart with the item name and price
        addToCart(itemName, itemPrice);
        
        alert(itemName + ' has been added to the cart.');
    });
});
