<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZODET.EG</title>
        <link rel="stylesheet" href="clothes.css">
        <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <header id="header">
            <nav class="navbar">
                <a href="#home" class="logo"><img src="img/logo.jpeg" alt="" class="logo"></a>


            </a>
                <ul>


                    <li><a href="index.php">Home</a></li>
                    <li><a href="clothes.html">clothes</a></li>
                    <li><a href="index.php #about">about us</a></li> </ul>
                    <a href="#cart" class="cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Cart (<span id="cartCount">0</span>)
                    </a>
                    
               
            </nav>
        </HEader>

        <div class="container">
            <div class="listproduct">
    
                <div class="item"> 
                    <img src="img/hod1.png" alt="Product Image">
                    
                    <h2>black hodi</h2> 
                    
                    <div class="price">$400</div>
                    
                    <button onclick="addToCart('black hodi', 400)" class="add cart">
                        Add To Cart
                    </button>
                    
                </div>
                
                <div class="item"> 
                    <img src="img/hodi2.png" alt="Product Image">
                    
                    <h2>white hodi</h2> 
                    
                    <div class="price">$350</div>
                    <button onclick="addToCart('white hodi', 350)" class="add cart">
                        Add To Cart
                    </button>
                    
                </div>
                
                <div class="item"> 
                    <img src="img/calson1.png" alt="Product Image">
                    
                    <h2>farmer calson</h2> 
                    
                    <div class="price">$1000</div>
                    
                    <button onclick="addToCart('farmer calson', 1000)" class="add cart">
                        Add To Cart
                    </button>
                    
                </div>
                
                <div class="item"> 
                    <img src="img/shorts.png" alt="Product Image">
                    
                    <h2>traning short</h2> 
                    
                    <div class="price">$300</div>
                    
                    <button onclick="addToCart('traning short', 300)" class="add cart">
                        Add To Cart
                    </button>
                    
                </div>
                
                <div class="item"> 
                    <img src="img/shoes1.png" alt="Product Image">
                    
                    <h2>new palance shoes</h2> 
                    
                    <div class="price">$300</div>
                    <button onclick="addToCart('new palance shoes', 300)" class="add cart">
                        Add To Cart
                    </button>
                    
                </div>
                
                <div class="item"> 
                    <img src="img/shoes2.png" alt="Product Image">
                    
                    <h2>air forse</h2> 
                    
                    <div class="price">$350</div>
                    
             
                    <button onclick="addToCart('air forse', 350)" class="add cart">
                        Add To Cart
                    </button>
                    
                </div>
                
                </div>
        </div>
        <div class="carttab">
            <h1>SHOPPING CART</h1>
        
            <div id="cartItems"></div>
        
            <div class="listcart">
                <button class="close">Close</button>
                <button class="checkout">Checkout</button>
            </div>
        </div>
        
            </body>
            <script src="cart.js"></script>
        </html>