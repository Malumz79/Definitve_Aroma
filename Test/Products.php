<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Women</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100..900&display=swap" rel="stylesheet">
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Jost', sans-serif;
    list-style: none;
    text-decoration: none;

body {
 background-color: white;
}
}

    .navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: black;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 0 5%;
    z-index: 1000;

  }

  .navbar a:first-child {
    font-size: 24px;
    color: white;
    padding: 15px 0;
    text-decoration: none;
}
  
.searchbar {
    flex: 1;
    max-width: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 20px;
}

.searchbar input {
    width: 100%;
    padding: 8px 15px;
    border: none;
    border-radius: 20px 0 0 20px;
    outline: none;
}

.searchbar button {
    padding: 8px 20px;
    border: none;
    border-radius: 0 20px 20px 0;
    background-color: red;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s;
}

.searchbar button:hover {
    background-color: #cc0000;
}

/* Navigation menu */
.nav-menu {
    display: flex;
    align-items: center;
    margin-left: auto;
}

/* Subnav container */
.subnav {
    position: relative;
    display: inline-block;
}

.subnavbtn {
    font-size: 16px;
    color: white;
    padding: 20px;
    background: none;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 5px;
}

.subnav-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: red;
    min-width: 200px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    border-radius: 0 0 4px 4px;
}

.subnav-content a {
    color: white;
    padding: 12px 16px;
    display: block;
    text-align: left;
    font-size: 14px;
}

.subnav:hover .subnavbtn {
    background-color: red;
}

.subnav:hover .subnav-content {
    display: block;
}

.subnav-content a:hover {
    background-color: #cc0000;
}

.nav-icons {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-left: 20px;

}

/* Icon buttons */
.icon-btn {
    background: none;
    border: none;
    color: white;
    font-size: 20px;
    padding: 10px;
    cursor: pointer;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}
.icon-btn i {
    font-size: 18px;
    color: white !important;
    display: inline-block;
    vertical-align: middle;
}
.icon-btn:hover {
    color: #ff0000;
}


/* Cart count badge */
.cart-count {
    position: absolute;
    top: -5px;
    right: -5px;
    background-color: red;
    color: white;
    font-size: 12px;
    padding: 2px 6px;
    border-radius: 50%;
    min-width: 18px;
    height: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Profile dropdown specific styles */
.profile-dropdown {
    right: 0;
    min-width: 200px;
    background-color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 4px;
}

.profile-dropdown a {
    color: #333;
    padding: 12px 20px;
    border-bottom: 1px solid #eee;
}

.profile-dropdown a:hover {
    background-color: #f5f5f5;
    color: #ff0000;
}

/* Cart dropdown specific styles */
.cart-dropdown {
    right: 0;
    min-width: 300px;
    background-color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    padding: 0;
}

.cart-header {
    padding: 15px 20px;
    border-bottom: 1px solid #eee;
}

.cart-header h3 {
    margin: 0;
    color: #333;
    font-size: 16px;
}

.cart-items {
    max-height: 300px;
    overflow-y: auto;
    padding: 15px;
}

.empty-cart {
    text-align: center;
    padding: 20px;
    color: #666;
}

.cart-footer {
    padding: 15px 20px;
    border-top: 1px solid #eee;
}

.cart-total {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
    font-weight: bold;
    color: #333;
}

.view-cart-btn,
.checkout-btn {
    display: block;
    width: 100%;
    padding: 10px;
    text-align: center;
    border-radius: 4px;
    margin-bottom: 10px;
    font-weight: 500;
}

.view-cart-btn {
    background-color: #f5f5f5;
    color: #333;
}

.checkout-btn {
    background-color: #ff0000;
    color: white;
}

.view-cart-btn:hover {
    background-color: #e5e5e5;
}

.checkout-btn:hover {
    background-color: #cc0000;
}

.subnavbtn i {
    margin-left: 5px;
}

.subnav:hover .subnav-content {
        display: block;
    }
    .nav-icons {
        position: absolute;
        right: 5%;
        top: 50%;
        transform: translateY(-50%);
    }

.fas, .far, .fab {
    font-family: "Font Awesome 6 Free" !important;
    
}

.fa-solid {
    color: white;

}
.fas {
    font-weight: 900;
    color: white;
}

.category-header {
    text-align: center;
    color: white;
    margin-top: 80px;
    padding: 30px 0;
    font-size: 2.5em;
    background-color: black;
        }

        .main {
            font-family: 'Open Sans', sans-serif;
            margin: 40px auto;
            padding: 40px 20px;
            max-width: 1400;
            background-color: #f5f5f5;
        }

        .list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 0;
            margin: 0;
            max-width: 1300px;
            margin: 0 auto;
        }

        .contain {
            display: flex;
            justify-content: center;
            padding: 10px;
            transition: transform 0.3s ease;
        }

        .contain:hover {
            cursor: pointer;
            transform: translateY(-5px);
        }

        .product {
            background-color: black;
            max-width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 10px;
            height: 380px;
            margin: 10px;
            padding: 20px;
            position: relative;
            transition: all 0.3s ease;
            width: 100%;
            border-radius: 12px;
        }

        .product img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
           background: white;
        }

        .product h3 {
    color: white;
    font-size: 1.2em;
    text-align: center;
    margin: 0;
    line-height: 1.4;
}

.product h4 {
    color: #ff0000;
    font-size: 1.1em;
    text-align: center;
    margin: 0;
}

        /* Cart controls styling */
        .cart-controls {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-top: auto;
}

.quantity-control {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: #333;
    padding: 8px;
    border-radius: 6px;
}

.quantity-control button {
    background: #ff0000;
    color: white;
    border: none;
    width: 30px;
    height: 30px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1.2em;
    display: flex;
    align-items: center;
    justify-content: center;
}
        .quantity-control input {
            width: 50px;
          text-align: center;
           border: none;
          background: transparent;
          color: white;
          font-size: 1.2em;
}

        .add-to-cart-btn {
            background: #ff0000;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1em;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .add-to-cart-btn:hover {
            background: #cc0000;
        }


    </style>
</head>
<body>

    <header>
        <div class="navbar">
		
            <a href="Home.php">Definitive Aroma</a>
          
            <div class="searchbar">
                <input type="text" placeholder="SEARCH..."/>
                <button type="submit">Search</button>
                </div>
          
          <div class="subnav">
            <button class="subnavbtn">Menu<i class=" fas fa-caret-down"></i></button>
            <div class="subnav-content">
                <a href="Products_Men.html">Mens Perfume</a>
                <a href="Products_Women.html">Womens Perfume</a>
                <a href="Accessories_Men.html">Mens Accessories</a>
                <a href="Accessories_Men.html">Womens Accessories</a>
              </div>
            </div>
          
            <div class="subnav">
              <button class="subnavbtn">About<i class="fas fa-caret-down"></i></button>
              <div class="subnav-content">
                <a href="About.html">Company</a>
                <a href="About.html">Team</a>
                <a href="About.html">Careers</a>
              </div>
            </div>
          
            <div class="subnav">
              <button class="subnavbtn">Services <i class="fas fa-caret-down"></i></button>
              <div class="subnav-content">
                <a href="#collection">Collection</a>
                <a href="#delivery">Delivery</a>
                <a href="#package">Package</a>
                <a href="#express">Express</a>
              </div>
            </div>
            <div class="subnav">
              <button class="subnavbtn">Partners <i class="fas fa-caret-down"></i></button>
              <div class="subnav-content">
                <a href="Partners.html">Mashudu</a>
                <a href="Partners.html">Thlalefang</a>
                <a href="Partners.html">Thami</a>
              </div>
            </div>
            <div class="nav-icons">
                <div class="subnav">
                    <button class="icon-btn">
                        <i class="fas fa-user"></i>
                    </button>
                    <div class="subnav-content profile-dropdown">
                        <a href="login.html">Login</a>
                        <a href="RegForm.html">Register</a>
                        <a href="profile.html">My Profile</a>
                        <a href="RegForm.html">Logout</a>
                    </div>
                </div>
                
                <div class="subnav">
                    <button class="icon-btn">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="cart-count">0</span>
                    </button>
                    <div class="subnav-content cart-dropdown">
                        <div class="cart-header">
                            <h3>Shopping Cart</h3>
                        </div>
                        <div class="cart-items">
                            <!-- Cart items will be added here -->
                            <div class="empty-cart">
                                <p>Your cart is empty</p>
                            </div>
                        </div>
                        <div class="cart-footer">
                            <div class="cart-total">
                                <span>Total:</span>
                                <span>R0.00</span>
                            </div>
                            <a href="cart.html" class="view-cart-btn">View Cart</a>
                            <a href="Payment.php" class="checkout-btn">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
            

    </header>


    <main>
        <!-- Women's Section -->
        <h2 class="category-header">For Women</h2>
        <div class="main">
            <ul class="list">
                <li class="contain">
                    <div class="product">
                        <img src="Prods/Jasmine Rose.jpg" alt="Women's Perfume 1">
                        <h3>Jasmine Rose<br>For Women</h3>
                        <h4>Price: R220.00</h4>
                        <div class="cart-controls">
                            <div class="quantity-control">
                                <button>-</button>
                                <input type="number" value="1" min="1" max="99">
                                <button>+</button>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </li>
                <li class="contain discount">
                    <div class="product">
                        <img src="Prods/Dolce & Gabbana.jpg" alt="Women's Perfume 2">
                        <h3>Sweet Rose<br>For Women</h3>
                        <h4>Price: R180.00</h4>
                        <div class="cart-controls">
                            <div class="quantity-control">
                                <button>-</button>
                                <input type="number" value="1" min="1" max="99">
                                <button>+</button>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </li>
                       <li class="contain discount">
                    <div class="product">
                        <img src="Prods/Chanel no.5.jpg" alt="Women's Perfume 2">
                        <h3>Chanel no.5<br>For Women</h3>
                        <h4>Price: R120.00</h4>
                        <div class="cart-controls">
                            <div class="quantity-control">
                                <button>-</button>
                                <input type="number" value="1" min="1" max="99">
                                <button>+</button>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </li>
                       <li class="contain discount">
                    <div class="product">
                        <img src="Prods/Basil x Cardamom.jpg" alt="Women's Perfume 2">
                        <h3>Basil x Cardamom<br>For Women</h3>
                        <h4>Price: R180.00</h4>
                        <div class="cart-controls">
                            <div class="quantity-control">
                                <button>-</button>
                                <input type="number" value="1" min="1" max="99">
                                <button>+</button>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </li>
                       <li class="contain discount">
                    <div class="product">
                        <img src="Prods/Versace Bright Crystal.jpg" alt="Women's Perfume 2">
                        <h3>Versace Bright Crystal<br>For Women</h3>
                        <h4>Price: R180.00</h4>
                        <div class="cart-controls">
                            <div class="quantity-control">
                                <button>-</button>
                                <input type="number" value="1" min="1" max="99">
                                <button>+</button>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </li>
                       <li class="contain discount">
                    <div class="product">
                        <img src="Prods/Black x Armani.jpg" alt="Women's Perfume 2">
                        <h3>Black x Armani<br>For Women</h3>
                        <h4>Price: R200.00</h4>
                        <div class="cart-controls">
                            <div class="quantity-control">
                                <button>-</button>
                                <input type="number" value="1" min="1" max="99">
                                <button>+</button>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </li>
                <li class="contain discount">
                    <div class="product">
                        <img src="Prods/Jasmine Rose.jpg" alt="Women's Perfume 2">
                        <h3>White Rose<br>For Women</h3>
                        <h4>Price: R150.00</h4>
                        <div class="cart-controls">
                            <div class="quantity-control">
                                <button>-</button>
                                <input type="number" value="1" min="1" max="99">
                                <button>+</button>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </li>
                <li class="contain discount">
                    <div class="product">
                        <img src="Prods/Black x Armani.jpg" alt="Women's Perfume 2">
                        <h3>Red<br>For Women</h3>
                        <h4> Price: R180.00</h4>
                        <div class="cart-controls">
                            <div class="quantity-control">
                                <button>-</button>
                                <input type="number" value="1" min="1" max="99">
                                <button>+</button>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </li>
              
			  </ul>

        </div>

        <!-- Men's Section -->
    <h2 class="category-header">For Men</h2>
    <div class="main">
        <ul class="list">
            <li class="contain">
                <div class="product">
                    <img src="Prods/Black Sued.jpg" alt="Men's Perfume 1">
                    <h3>Classic Musk<br>For Men</h3>
                    <h4>Price: R200.00</h4>
                    <div class="cart-controls">
                        <div class="quantity-control">
                            <button>-</button>
<input type="number" value="1" min="1" max="99">    
                            <button>+</button>
                        </div>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </li>
            <li class="contain">
                <div class="product">
                    <img src="Prods/Calvin Klein.jpg" alt="Men's Perfume 2">
                    <h3>Ocean Breeze<br>For Men</h3>
                    <h4>Price: R150.00</h4>
                    <div class="cart-controls">
                        <div class="quantity-control">
                            <button>-</button>
                            <input type="number" value="1" min="1" max="99">
                            <button>+</button>
                        </div>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </li>
                   <li class="contain">
                <div class="product">
                    <img src="Prods/Amouage Search.jpg" alt="Men's Perfume 2">
                    <h3>Ocean Breeze<br>For Men</h3>
                    <h4>Price: 150.00</h4>
                    <div class="cart-controls">
                        <div class="quantity-control">
                            <button>-</button>
                            <input type="number" value="1" min="1" max="99">
                            <button>+</button>
                        </div>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </li>
                   <li class="contain">
                <div class="product">
                    <img src="Prods/Black x Armani.jpg" alt="Men's Perfume 2">
                    <h3>Ocean Breeze<br>For Men</h3>
                    <h4> Price: R150.00</h4>
                    <div class="cart-controls">
                        <div class="quantity-control">
                            <button>-</button>
                            <input type="number" value="1" min="1" max="99">
                            <button>+</button>
                        </div>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </li>
                   <li class="contain">
                <div class="product">
                    <img src="Prods/Farrenheit.jpg" alt="Men's Perfume 2">
                    <h3>Ocean Breeze<br>For Men</h3>
                    <h4>Price: R150.00</h4>
                    <div class="cart-controls">
                        <div class="quantity-control">
                            <button>-</button>
                            <input type="number" value="1" min="1" max="99">
                            <button>+</button>
                        </div>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </li>             
                   <li class="contain">
                <div class="product">
                    <img src="Prods/Invictus.jpg" alt="Men's Perfume 2">
                    <h3>Ocean Breeze<br>For Men</h3>
                    <h4>Price: R150.00</h4>
                    <div class="cart-controls">
                        <div class="quantity-control">
                            <button>-</button>
                            <input type="number" value="1" min="1" max="99">
                            <button>+</button>
                        </div>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    </main>
        
    <script>
        // Cart state management
       // Cart state management
let cartItems = [];
let cartTotal = 0;

// Helper function to format ZAR currency
function formatZAR(amount) {
    return new Intl.NumberFormat('en-ZA', {
        style: 'currency',
        currency: 'ZAR',
        minimumFractionDigits: 2
    }).format(amount);
}

// Function to parse price from text
function parsePrice(priceText) {
    // Extract number after "Price: R" or just "R"
    const match = priceText.match(/Price:\s*R?(\d+(?:\.\d{2})?)/);
    if (match) {
        return parseFloat(match[1]);
    }
    return 0;
}

// Function to add item to cart
function addToCart(productName, price, quantity, imageUrl) {
    // Check if item already exists in cart
    const existingItem = cartItems.find(item => item.name === productName);
    
    if (existingItem) {
        existingItem.quantity += quantity;
    } else {
        cartItems.push({
            name: productName,
            price: price,
            quantity: quantity,
            image: imageUrl
        });
    }
    
    updateCartDisplay();
    updateCartCount();
    updateCartTotal();
}

// Function to update cart display
function updateCartDisplay() {
    const cartItemsContainer = document.querySelector('.cart-items');
    
    if (cartItems.length === 0) {
        cartItemsContainer.innerHTML = `
            <div class="empty-cart">
                <p>Your cart is empty</p>
            </div>
        `;
        return;
    }
    
    cartItemsContainer.innerHTML = cartItems.map(item => `
        <div class="cart-item">
            <div class="cart-item-image">
                <img src="${item.image}" alt="${item.name}" style="width: 50px; height: 50px; object-fit: cover;">
            </div>
            <div class="cart-item-details">
                <h4>${item.name}</h4>
                <div class="cart-item-price">${formatZAR(item.price * item.quantity)}</div>
                <div class="cart-item-quantity">
                    <button onclick="updateItemQuantity('${item.name}', ${item.quantity - 1})">-</button>
                    <span>${item.quantity}</span>
                    <button onclick="updateItemQuantity('${item.name}', ${item.quantity + 1})">+</button>
                    <button class="remove-item" onclick="removeFromCart('${item.name}')">Remove</button>
                </div>
            </div>
        </div>
    `).join('');
}

// Function to update cart count badge
function updateCartCount() {
    const cartCount = document.querySelector('.cart-count');
    const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
    cartCount.textContent = totalItems;
}

// Function to update cart total
function updateCartTotal() {
    cartTotal = cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    const cartTotalElement = document.querySelector('.cart-total span:last-child');
    cartTotalElement.textContent = formatZAR(cartTotal);
}

// Function to update item quantity
function updateItemQuantity(productName, newQuantity) {
    const item = cartItems.find(item => item.name === productName);
    if (item) {
        if (newQuantity > 0) {
            item.quantity = newQuantity;
        } else {
            removeFromCart(productName);
        }
        updateCartDisplay();
        updateCartCount();
        updateCartTotal();
    }
}

// Function to remove item from cart
function removeFromCart(productName) {
    cartItems = cartItems.filter(item => item.name !== productName);
    updateCartDisplay();
    updateCartCount();
    updateCartTotal();
}

// Initialize cart functionality
document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners to all "Add to Cart" buttons
    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function() {
            const productCard = this.closest('.product');
            const productName = productCard.querySelector('h3').textContent;
            const priceText = productCard.querySelector('h4').textContent;
            const price = parsePrice(priceText); // Using our new price parser
            const quantity = parseInt(productCard.querySelector('.quantity-control input').value);
            const imageUrl = productCard.querySelector('img').src;
            
            addToCart(productName, price, quantity, imageUrl);
            
            // Show confirmation message
            const confirmationMessage = document.createElement('div');
            confirmationMessage.className = 'add-to-cart-confirmation';
            confirmationMessage.textContent = 'Added to cart!';
            confirmationMessage.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background-color: #4CAF50;
                color: white;
                padding: 15px 25px;
                border-radius: 4px;
                z-index: 1000;
                animation: slideIn 0.3s ease-out;
            `;
            
            document.body.appendChild(confirmationMessage);
            
            setTimeout(() => {
                confirmationMessage.style.animation = 'slideOut 0.3s ease-in';
                setTimeout(() => {
                    confirmationMessage.remove();
                }, 300);
            }, 2000);
        });
    });
});
    </script>
</body>
</html>