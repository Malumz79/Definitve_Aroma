<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100..900&display=swap" rel="stylesheet">
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<style>


/* Navigation bar*/

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
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


.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  position: relative;
  text-align: center;
  max-width: 2100px;
  padding: 45px;
  float: center;
  margin: auto;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

.shop-button{
display: inline-block;
margin-top: 35px;
background-color: red;
color: white;
padding: 15px 50px;
text-decoration: none;
border-radius:5px;
font-size: 24px;
transition: background-color 0.5s;
z-index: 10;
}

.shop-button hover{
background-color: red;
}

/* Section Headers */
        .category-header {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            margin: 30px 0;
            font-size: 32px;
            position: relative;
        }

        .category-header:after {
            content: '';
            display: block;
            width: 100px;
            height: 3px;
            background: red;
            margin: 10px auto;
        }

/* Product Grid Styles */
        .main {
            font-family: 'Open Sans', sans-serif;
            margin: 20px 50px;
            padding: 25px 0;
            position: relative;
        }

        .list {
            margin: 0 auto;
            max-width: 1200px;
            min-width: 200px;
            position: relative;
            width: 100%;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .list li {
            display: block;
            list-style: none;
        }

        .contain {
            position: relative;
        }

        .contain:hover {
            cursor: pointer;
            z-index: 200;
        }


/*Product card*/

.card {
  box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2);
  max-width: 150px;
  text-align: center;
  font-family: arial;
  float: left;
  width: 150px;
  padding: 20px;
  background-color: white;
  margin: 10px;
  border: 2px solid black;
  border-radius: 8px;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.price {
  color: white;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: black;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

/*More Products Link*/

.Link_Button {
  border: none;
  outline: 0;
  padding: 25px;
  color: white;
  background-color: white;
  text-align: center;
  float: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

</style>
</head>
<body bgcolor="grey">

    <header>
        <div class="navbar">
            <a href="ChampionsLeague.html">Definitive Aroma</a>
          
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
                        <a href="register.html">Register</a>
                        <a href="profile.html">My Profile</a>
                        <a href="orders.html">My Orders</a>
                        <a href="settings.html">Settings</a>
                        <a href="logout.html">Logout</a>
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
                            <!-- Cart items will be dynamically added here -->
                            <div class="empty-cart">
                                <p>Your cart is empty</p>
                            </div>
                        </div>
                        <div class="cart-footer">
                            <div class="cart-total">
                                <span>Total:</span>
                                <span>$0.00</span>
                            </div>
                            <a href="cart.html" class="view-cart-btn">View Cart</a>
                            <a href="checkout.html" class="checkout-btn">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
            

    </header>

 
 <div class="slideshow-container">

<div class="mySlides fade">
  <img src="Prods/DA1.jpg" style="width:100%">
</div>
<a href="Products.php" class ="shop-button">Shop Now</a>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000);
}
</script>
 
 <h2 class ="category-header">Some products offered For Men.</h2>
 <div class="main">
      <ul class ="list">
            
 
  <form action="Products.php" method="Get">
  <li class="contain">
  <div class="card">
      <img src="Prods\Black Sued.jpg" alt="Mens Perfume" style="width:100%">
      
      <h1>Black Sued</h1>
      <p class ="price: ">R250</p>
      <p><button> Show More </button></p>
  </div>

 
 
  <div class="card">
      <img src="Prods\Wrist Chain.jpg" alt="Mens Accessories" style="width:100%">
      
      <h1>Wrist Chain</h1>
      <p class ="price: ">R50.00</p>
      <p><button> Show More </button></p>
  </div>

 

 <div class="card">
      <img src="Prods\Calvin Klein.jpg" alt="Mens Accessories" style="width:100%">
      
      <h1>CK One</h1>
      <p class ="price: ">R350.00</p>
      <p><button> Show More </button></p>
  </div>
 
 
 
  <div class="card">
      <img src="Prods\Tridon Ring.jpg" alt="Mens Accessorie" style="width:100%">
      
      <h1>Tridon Ring</h1>
      <p class ="price: ">R75.00</p>
      <p><button> Show More </button></p>
  </div>
 
 
 
  <div class="card">
      <img src="Prods\Amouage Search.jpg" alt="Mens Perfume" style="width:100%">
      
      <h1>Amouage Search</h1>
      <p class ="price: ">R350.00</p>
      <p><button> Show More </button></p>
  </div>
 
</div>
</li>
</ul>

 
   <h2 class ="category-header">Some products offered For Men.</h2>
  <div class="main">
  <ul class="list">
 
  <form action="Product A.php" method="Get">
  <li class="contain">
  <div class="card">
      <img src="Prods\Chanel no.5.jpg" alt="Womens Perfume" style="width:100%">
      
      <h1>Chanel no.5</h1>
      <p class ="price: ">R350</p>
      <p><button> Show More </button></p>
  </div>
 
  <div class="card">
      <img src="Prods\Accessory Pack.jpg" alt="Womens Accessories" style="width:100%">
      
      <h1>Accessory Pack</h1>
      <p class ="price: ">R150.00</p>
      <p><button> Show More </button></p>
  </div>
 
  <div class="card">
      <img src="Prods\Jasmine rose.jpg" alt="Womens Perfume" style="width:100%">
      
      <h1>Jasmine Rose</h1>
      <p class ="price: ">R350.00</p>
      <p><button> Show More </button></p>
  </div>
 
  <div class="card">
      <img src="Prods\Suavage.jpg" alt="Womens Perfume" style="width:100%">
      
      <h1>Suavage</h1>
      <p class ="price: ">R350.00</p>
      <p><button> Show More </button></p>
  </div>
 
  <div class="card">
      <img src="Prods\Silver C.jpg" alt="Womens Accessories" style="width:100%">
      
      <h1>Chain</h1>
      <p class ="price: ">R120.00</p>
      <p><button> Show More </button></p>
  </div>
</form>
</div>
</li>
</ul>

 

</body>
</html>

