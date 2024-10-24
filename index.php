<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Evara Shop</title>
    <!-- MDB icon -->
    <link rel="icon" href="./img/logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/usericon.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a33d3e9294.js" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body>
  <div>
    <header>
      <div class="top-bar">
          <span>(+880) 1764163504</span>
          
          <a href="#" class="coupon-link">Style Delivered, Happiness Guaranteed!</a>
          
      </div>

      <nav class="main-navbar">
          <div class="logo">
              <a href="./index.php"><img src="./img/logo.svg" alt="Evara Logo" /></a>
          </div>
          <ul class="nav-links">
              
              <li><a href="./shop.html">Shop</a></li>
              <li><a href="./category.html">Category</a></li>
              <li><a href="./contactus.php">Contact Us</a></li>
              <li><a href="./about-us.html">About Us</a></li>
          </ul>

          
          <!-- Search Bar -->
          <div class="search-bar">
  <input type="text" id="search-input" placeholder="Search For Items...">
  <button class="search-btn" onclick="searchProduct()">
    <i class="fa fa-search search-icon"></i>
  </button>
</div>

    
        <div id="search-results"></div>  
          <div class="icons">
            <a href="./cart.html"><i class="fa fa-shopping-bag"></i><span id="cart-count">0</span></a>
            
        </div>
        <div>
        <a href="./login.php" class="login-icon"><i class="fa fa-user"></i></a>
        </div>

        <div>
        <a href="logout.php">
        <i class="fa-solid fa-right-from-bracket"></i>
  
        </a>
        </div>
        <!-- Navigation to Admin Panel -->
    
</div>
      
        </div>
        
</div>
        
        
      
  </header>
    <main class="mt-5">
      <section class="banner">
        <div class="banner-content">
            <h4>Hot Promotions</h4>
            <h1>Fashion Trending <span>Great</span> Collection</h1>
            <p>Save more with coupons & up to 20% off</p>
            <a href="./shop.html" class="shop-now-btn">Shop Now</a>
        </div>
    
        <div class="banner-images">
            <img src="./img/home-img.png" alt="Cap" class="cap-image">
            
        </div>
    </section>
    
    <div class="container">
      <div class="filter-bar">
          <button class="filter-btn active">Featured</button>
          <button class="filter-btn">Popular</button>
          <button class="filter-btn" id="new-added-btn">New Added</button>
      </div>
      
  </div>
  <div class="product-grid">
    <!-- Product Cards -->
    <div class="product-card" data-product-id="1">
      <img src="./img/Card1.jpg" alt="Product Image">
      <div class="product-info">
          <h3>Blue Long-Sleeve Shirt</h3>
          <p class="category">This cozy, lightweight long-sleeve shirt is perfect for casual outings or layering during cooler months. 
            </p>
          <div class="price">
              <span class="current-price">$34.50</span>
              <span class="original-price">$50.50</span>
          </div>
      </div>
      <button class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
  </div>
  
  
  <div class="product-card" data-product-id="2">
    <img src="./img/Card2.jpg" alt="Product Image">
    <div class="product-info">
        <h3>Floral Navy Short-Sleeve Shirt</h3>
        <p class="category">A chic and trendy floral print shirt featuring a navy blue base with vibrant pink flowers.</p>
        <div class="price">
            <span class="current-price">$42.99</span>
            <span class="original-price">$49.99</span>
        </div>
    </div>
    <button class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
</div>
<div class="product-card" data-product-id="3">
  <img src="./img/Card3.jpg" alt="Product Image">
  <div class="product-info">
      <h3>Tropical Green Floral Shirt</h3>
      <p class="category">Designed for a breezy summer look, this green floral shirt brings a touch of nature to your style.</p>
      <div class="price">
          <span class="current-price">$37.75</span>
          <span class="original-price">$46.00</span>
      </div>
  </div>
  <button class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
</div>
<div class="product-card" data-product-id="4">
  <img src="./img/clothes-1.jpg" alt="Product Image">
  <div class="product-info">
      <h3>Pink and White Graphic Sweatshirt</h3>
      <p class="category">Stay warm and stylish in this playful graphic sweatshirt featuring a cute design. </p>
      <div class="price">
          <span class="current-price">$39.99</span>
          <span class="original-price"> $47.99</span>
      </div>
  </div>
  <button class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
</div>
<div class="product-card" data-product-id="5">
  <img src="./img/clothes-2.jpg" alt="Product Image">
  <div class="product-info">
      <h3>Pink Cropped Knotted T-Shirt</h3>
      <p class="category">This cute and casual cropped t-shirt is designed with a trendy front knot detail. </p>
      <div class="price">
          <span class="current-price">$25.99</span>
          <span class="original-price">$40.99</span>
      </div>
  </div>
  <button class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
</div>
<div class="product-card" data-product-id="6">
  <img src="./img/clothes-3.jpg" alt="Product Image">
  <div class="product-info">
      <h3>Black A-line Button Skirt</h3>
      <p class="category">A modern twist on a classic, this black A-line skirt features gold button detailing and a high waistline. </p>
      <div class="price">
          <span class="current-price">$45.50</span>
          <span class="original-price">$54.99</span>
      </div>
  </div>
  <button class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
</div>
<div class="product-card" data-product-id="7">
  <img src="./img/Card7.jpg" alt="Product Image">
  <div class="product-info">
      <h3>Nude Strappy Heels</h3>
      <p class="category">Elegant and comfortable, these nude heels are perfect for both casual and formal occasions.</p>
      <div class="price">
          <span class="current-price">$35.99</span>
          <span class="original-price">$54.99</span>
      </div>
  </div>
  <button class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
</div>
<div class="product-card" data-product-id="8">
  <img src="./img/Card8.jpg" alt="Product Image">
  <div class="product-info">
      <h3>Brown Oxford Leather Shoes</h3>
      <p class="category">Crafted from premium leather, these classic brown Oxford shoes are designed for both comfort and style.</p>
      <div class="price">
          <span class="current-price">$69.00</span>
          <span class="original-price">$75.00</span>
      </div>
  </div>
  <button class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
</div>
<div class="product-card" data-product-id="9">
  <img src="./img/belt.jpg" alt="Product Image">
  <div class="product-info">
      <h3>Classic Brown Leather Belt</h3>
      <p class="category">This sturdy, genuine leather belt is a versatile addition to any wardrobe.</p>
      <div class="price">
          <span class="current-price">$22.50</span>
          <span class="original-price">$30.00</span>
      </div>
  </div>
  <button class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
</div>
    <!-- Repeat product cards as necessary -->
</div>
  <!-- Countdown Section -->

  <div class="countdown-banner">
    <!-- Deal of the Day -->
    <div class="deal">
        <img src="./img/3.png" alt="Deal of the Day">
        <h2>Deals of the Day</h2>
        <p>Winter Collection New Modern Design</p>
        <div class="price">$139.00 <span class="old-price">$160.99</span></div>
        <div class="countdown" id="countdown1">
            <div><span id="days1">02</span> Days</div>
            <div><span id="hours1">22</span> Hours</div>
            <div><span id="minutes1">57</span> Mins</div>
            <div><span id="seconds1">28</span> Sec</div>
        </div>
        <a href="./shop.html"><button id="countdown-button">Shop Now</button></a>
    </div>

    <!-- Women Clothing -->
    <div class="clothing">
        <img src="./img/1.png" alt="Women Clothing">
        <h2>Women Clothing</h2>
        <p>Try Something New on Vacation</p>
        <div class="price">$178.00 <span class="old-price">$256.99</span></div>
        <div class="countdown" id="countdown2">
            <div><span id="days2">02</span> Days</div>
            <div><span id="hours2">22</span> Hours</div>
            <div><span id="minutes2">57</span> Mins</div>
            <div><span id="seconds2">28</span> Sec</div>
        </div>
        <a href="./women.html"><button id="countdown-button">Shop Now</button></a>
    </div>
</div>

<!-- Mini-Card Container  -->
<div class="section-titles">
  <div class="title">
      <h2>Hot Releases</h2>
      <hr>
  </div>
  <div class="title">
      <h2>Deals & Outlet</h2>
      <hr>
  </div>
  <div class="title">
      <h2>Top Selling</h2>
      <hr>
  </div>
</div>

  
</div>
<div class="card-container">
  
  <div class="card">
      <img src="./img/showcase-img-1.jpg" alt="Floral Print Casual Cotton Dress">
      <h3>Brown Floral Handbag</h3>
      <p class="price">$213.85 <span>$446.99</span></p>
  </div>
  <div class="card">
      <img src="./img/showcase-img-2.jpg" alt="Ruffled Solid Long Sleeve Blouse">
      <h3>Tropical Leaf Print Pillow
      </h3>
      <p class="price">$213.85 <span>$336.99</span></p>
  </div>
  <div class="card">
    <img src="./img/showcase-img-3.jpg" alt="Floral Print Casual Cotton Dress">
    <h3>Yellow Leather Crossbody Bag
    </h3>
    <p class="price">$238.85 <span>$345.8</span></p>
</div>
<div class="card">
    <img src="./img/showcase-img-4.jpg" alt="Ruffled Solid Long Sleeve Blouse">
    <h3>Multicolor Knit Beanie
    </h3>
    <p class="price">$35.50 <span>$70.00</span></p>
</div>
<div class="card">
  <img src="./img/showcase-img-5.jpg" alt="Floral Print Casual Cotton Dress">
  <h3>Orange Floral Shirt
  </h3>
  <p class="price">$54.99 <span>$110.00</span></p>
</div>
<div class="card">
  <img src="./img/showcase-img-6.jpg" alt="Ruffled Solid Long Sleeve Blouse">
  <h3>Blue & White Floral Shirt
  </h3>
  <p class="price">$65.00 <span> $120.00</span></p>
</div>
<div class="card">
  <img src="./img/showcase-img-7.jpg" alt="Floral Print Casual Cotton Dress">
  <h3>Floral Sneakers
  </h3>
  <p class="price">$89.99<span>$175.00</span></p>
</div>
<div class="card">
  <img src="./img/showcase-img-8.jpg" alt="Ruffled Solid Long Sleeve Blouse">
  <h3>Green Wallet

  </h3>
  <p class="price">$120.50 <span>$225.99</span></p>
</div>
<div class="card">
  <img src="./img/showcase-img-9.jpg" alt="Floral Print Casual Cotton Dress">
  <h3>Color-Block Denim Shirt with Orange Jacket

  </h3>
  <p class="price">$35.99<span> $69.99</span></p>
</div>
<div class="card">
  <img src="./img/showcase-img-1.jpg" alt="Ruffled Solid Long Sleeve Blouse">
  <h3>Brown Floral Handbag

  </h3>
  <p class="price">$48.75<span>$95.00</span></p>
</div>
<div class="card">
  <img src="./img/showcase-img-2.jpg" alt="Floral Print Casual Cotton Dress">
  <h3>Tropical Leaf Print Pillow
  </h3>
  <p class="price"> $139.99<span> $270.00</span></p>
</div>
<div class="card">
  <img src="./img/showcase-img-3.jpg" alt="Ruffled Solid Long Sleeve Blouse">
  <h3>Yellow Leather Crossbody Bag
  </h3>
  <p class="price">$162.85 <span>$329.99</span></p>
</div>
  <!-- Add more cards similarly -->
</div>
<script src="./js/addtocartcount.js"></script>
    </main>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i><img src="./img/logo.svg" alt="">
          </h6>
          <p>
           <b>"Style Delivered, Happiness Guaranteed!"</b> 
        Perfect for conveying customer satisfaction with a focus on delivering quality products.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="./men.html" class="text-reset">Men</a>
          </p>
          <p>
            <a href="./women.html" class="text-reset">Women</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="./about-us.html" class="text-reset">About Us</a>
          </p>
          <p>
            <a href="./contactus.php" class="text-reset">Contact Us</a>
          </p>
          <p>
            <a href="./shop.html" class="text-reset">Shop Now</a>
          </p>
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Mymensingh, 2200, BD</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@evara.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 880 1764163504</p>
          <p><i class="fas fa-print me-3"></i> + 880 1630557809</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © All Right Reserve 2024
    
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->




    




<!-- Add To Cart Icon and View Page  -->
 
 <script>
  // Function to update the cart count in the icon
function updateCartCount() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartCountElement = document.getElementById('cart-count');
    cartCountElement.textContent = cart.length;
}

// Function to add product to cart
function addToCart(event) {
    const productCard = event.target.closest('.product-card');
    
    // Get product information from the card
    const productId = productCard.dataset.productId;  // Assuming product-card has a data-product-id attribute
    const productName = productCard.querySelector('h3').textContent;
    const productPrice = productCard.querySelector('.current-price').textContent;
    const productImage = productCard.querySelector('img').src;

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Check if the product is already in the cart
    const existingProduct = cart.find(item => item.id === productId);
    
    if (existingProduct) {
        // If product is already in cart, increase the quantity
        existingProduct.quantity++;
    } else {
        // If product is not in the cart, add it
        const newProduct = {
            id: productId,
            name: productName,
            price: productPrice,
            image: productImage,
            quantity: 1
        };
        cart.push(newProduct);
    }

    // Save the updated cart to localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();  // Update the cart count
    alert(`${productName} has been added to your cart!`);
}

// Redirect to cart page when clicking on the cart icon
document.querySelector('.icons a').addEventListener('click', (event) => {
    event.preventDefault();  // Prevent default link behavior
    window.location.href = 'cart.html';  // Redirect to the cart page
});

// Add event listeners to all "Add to Cart" buttons
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', addToCart);
});

// Ensure the cart count is updated when the page loads
document.addEventListener('DOMContentLoaded', updateCartCount);

 </script>






<!-- ...........................................//////////////////// -->




 <!-- Search Item  -->

<script>
  function searchProduct() {
    const input = document.getElementById("search-input").value.toLowerCase();
    const productCards = document.querySelectorAll(".product-card");

    productCards.forEach((card) => {
      const productName = card.querySelector("h3").innerText.toLowerCase();
      if (productName.includes(input)) {
        card.style.display = "block"; // Show matching product
      } else {
        card.style.display = "none"; // Hide non-matching product
      }
    });
  }
</script>


<!-- Popular Button  -->




<script>
document.querySelectorAll('.filter-btn').forEach(button => {
  button.addEventListener('click', function() {
    if (this.textContent === 'Popular') {
      window.location.href = './popular.html'; // Navigate to Popular page
    }
  });
});
</script>

<script>
  // JavaScript to handle navigation to the New Added page
  document.getElementById("new-added-btn").addEventListener("click", function() {
    window.location.href = './new-added.html'; // Redirect to the New Added page
  });
</script>




<script src="./js/count-down.js"></script>


  </body>
  
</html>
