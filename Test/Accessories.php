<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Previous styles remain the same until product card styles */
        /* Base styles */
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-color: grey;
        }

        /* Navigation bar */
        .navbar {
            overflow: hidden;
            background-color: black;
            display: flex;
            align-items: center;
            padding: 0 20px;
        }

        .navbar a {
            float: left;
            font-size: 20px;
            color: white;
            text-align: center;
            padding: 18px 20px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: red;
        }
            
            .subnav {
  float: right;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 19px 20px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  right:0;
  background-color: red;
  width: 100%;
  z-index: 1;
  font-size: 15px;
}

.subnav-content a {
  float: right;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}

        /* Search bar */
        .searchbar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 20px;
            flex-grow: 1;
        }

        .searchbar input {
            padding: 8px 15px;
            border: none;
            border-radius: 5px 0 0 5px;
            width: 300px;
            font-size: 16px;
        }

        .searchbar button {
            padding: 8px 20px;
            border: none;
            border-radius: 0 5px 5px 0;
            background-color: red;
            color: white;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
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

       

        .product {
            background-color: black;
            display: inline-block;
            font-size: 10px;
            height: 320px; /* Increased height to accommodate new elements */
            margin: 10px;
            overflow: hidden;
            padding: 10px 5px;
            position: relative;
            transition: all 0.5s ease;
            width: 150px;
            z-index: 10;
        }

        .product:hover {
            box-shadow: 5px 4px 0 0 rgba(0,0,0,0.15);
            height: 320px;
            margin-bottom: 10px;
            width: 150px;
        }

        .product img {
            background: white;
            overflow: hidden;
            height: 150px;
            width: 150px;
            object-fit: cover;
        }

        .product h3, .product h4 {
            color: white;
            margin: 0;
            padding: 0;
            width: 130px;
        }

        .product h3 {
            color: white;
            margin-bottom: 15px;
        }

        /* New Cart Controls Styles */
        .cart-controls {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 8px;
        }

        .quantity-control button {
            background-color: red;
            border: none;
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .quantity-control button:hover {
            background-color: grey;
        }

        .quantity-control input {
            width: 40px;
            height: 25px;
            text-align: center;
            border: 1px solid grey;
            border-radius: 3px;
        }

        .add-to-cart-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            width: 90%;
            transition: background-color 0.3s;
        }

        .add-to-cart-btn:hover {
            background-color: grey;
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

        /* Responsive design */
        @media screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
                padding: 10px;
            }
           
            .searchbar {
                width: 50%;
                margin: 10px 0;
            }

            .searchbar input {
                width: 400px;
            }

            .main {
                margin: 10px;
            }

            .list {
                padding: 0;
            }
        }
    </style>
</head>


    <div class="navbar">
        <a href="ChampionsLeague.html">Definitive Aroma</a>
        <div class="searchbar">
            <input type="text" placeholder="SEARCH..."/>
            <button type="submit">Search</button>
        </div>
            <div class="subnav">
  <button class="subnavbtn">Menu<i class=" fa fa-caret-down"></i></button>
  <div class="subnav-content">
      <a href="Products.html">Mens Perfume</a>
      <a href="Products.html">Womens Perfume</a>
      <a href="Accessories.html">Mens Accessories</a>
        <a href="Accessories.html">Womens Accessories</a>
    </div>
  </div>
    </div>

<!--Accessories--!>

 <!-- Men's Section -->
    <h2 class="category-header">Accessories: Men</h2>
    <div class="main">
        <ul class="list">
            <li class="contain">
                <div class="product">
                    <img src="" alt="Men's Accessories">
                    <h3>Accessory Pack<br>For Men</h3>
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
                    <img src="" alt="Men's Accessories">
                    <h3>Wrist Chain<br>For Men</h3>
                    <h4>Price: R500.00</h4>
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
                    <img src="" alt="Men's Accessories">
                    <h3>Plain Jane: Chain<br>For Men</h3>
                    <h4>Price: R50.00</h4>
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
                    <img src="" alt="Men's Accessories">
                    <h3>Charcoal Shades<br>For Men</h3>
                    <h4>Price: R250.00</h4>
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
                    <img src="" alt="Men's Accessories">
                    <h3>Chain Pack<br>For Men</h3>
                    <h4>Price: R450.00</h4>
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
                    <img src="" alt="Men's Accessories">
                    <h3>Ring Pack<br>For Men</h3>
                    <h4>Price: R300.00</h4>
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
                    <img src="" alt="Men's Accessories">
                    <h3>Tridon Ring<br>For Men</h3>
                    <h4>Price: R450.00</h4>
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
                    <img src="" alt="Men's Accessories">
                    <h3>Golden Cross: Chain<br>For Men</h3>
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
                  <li class="contain">
                <div class="product">
                    <img src="" alt="Men's Accessories">
                    <h3>Metal Punk: Shades<br>For Men</h3>
                    <h4>Price: R300.00</h4>
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
                    <img src="" alt="Men's Accessories">
                    <h3>Square Frame Shades<br>For Men</h3>
                    <h4>Price: R350.00</h4>
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
                  
<!--Womens Section--!>

<h2 class="category-header">Accessories: Women</h2>
    <div class="main">
        <ul class="list">
            <li class="contain">
                <div class="product">
                    <img src="" alt="Men's Accessories">
                    <h3>Accessory Pack<br>For Men</h3>
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
                    <img src="" alt="Men's Accessories">
                    <h3>Belly Brace<br>For Women</h3>
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
                    <img src="" alt="Men's Accessories">
                    <h3>Bangles & Earrings Pack<br>For Women</h3>
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
                    <img src="" alt="Men's Accessories">
                    <h3>Black Diamond: Earrings<br>For Women</h3>
                    <h4>Price: R250.00</h4>
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
			
			</body>
			</html>