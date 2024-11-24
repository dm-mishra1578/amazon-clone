<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title> Amazon.com</title>

    <!--css file-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/product.css"/>

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            footer {
    margin-top: -350px;

}
        </style>

</head>

<body>

   
    <header class="header">
        <div class="container container-header">
            <div class="logo-container border-white">
                <div class="logo">
                    <a href="index.html"><img src="amazon-logo.jpg"></a>
                </div>

            </div>

            <div class="address-container border-white">
                <p class="hello">Hello</p>
                <div class="icon-address">
                    <i class="fa-solid fa-location-dot icon-location"></i>
                    <p>Select your address</p>
                </div>
            </div>

            <div class="search-container">
                <select class="search-select">
                    <option class="option-all">All</option>

                </select>
                <input type="text" class="search-input" />
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>

            </div>

            <div class="language-container border-white">
                <p>English</p>
                <div class="lauguge-image">
                    <img
                        src="https://media.istockphoto.com/vectors/vector-flag-of-the-republic-of-india-proportion-23-the-national-flag-vector-id1051236720?k=20&m=1051236720&s=612x612&w=0&h=ATObRTHmTosADa9zaB2dQPn_VAQmG1XYH2x92kzc304=" />
                </div>
            </div>

            <div class="login-container border-white"> 
                <?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) 
                {   $user_name = htmlspecialchars($_SESSION['user_name']);
                     echo "<p class='account'>Hello, <span  style='color: crimson;'>$user_name </span> </p>";
                     
                     echo '<p class="account"><a href="logout.php" style="color: white; font-weight: bold; display:block;">Logout</a></p>';
                     } 
                else { 
                    echo '<p>Hello,<span><a href="login.php" target="_self" id="loginlink">sign in</a></span></p>';
                     echo '<p class="account">Account & Lists</p>'; } 
                ?>
             </div>       

            <div class="return-order-container border-white">
                <p>Returns
                <div class="order">& Orders</div>
                </p>

            </div>


            <div class="cart-container border-white">
            <?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) 
                {   $user_name = htmlspecialchars($_SESSION['user_name']);
                     echo " <i class='fa-solid fa-cart-shopping'></i>";
                     
                     echo '<a href="cart.php">Cart</a>';
                     } 
                else { 
                    echo " <i class='fa-solid fa-cart-shopping'></i>";
                     
                     echo '<a href="login.php">Cart</a>';
                }
                ?>
           
              
            </div>
        </div>
    </header>

    <!--navigation-->
    <nav class="nav">
        <div class="container container-nav">
            <ul>
                </li>
                <li class="border-white"><a href="#Bigdeals">Best Sellers</a></li>
                <li class="border-white"><a href="#">Today's Deals</a></li>
                <li class="border-white"><a href="#">Mobiles</a></li>

                <li class="border-white"><a href="#fashion">Fashion</a></li>
                <li class="border-white"><a href="#books">Book</a></li>
              
        </div>
    </nav>
    <containner>
        <div class="containner">
            <div class="product-feature">
                <div class="product-item-pic">
                    <img src="https://m.media-amazon.com/images/I/71+4epVt2fL._AC_SY200_.jpg">
                    <label style="color: yellow; padding-left: px;">out of stack</label>
                </div>
                <div class="product-features">
                   <div class="container-product-detail">
                    <p class="deall">OnePlus 10T | Moonstone Black | 5G Unlocked Android Smartphone U.S Version | 8GB RAM+128GB Storage | 120Hz Fluid AMOLED Display | Triple Camera 50+8+2MP, 16MP | 125w SuperVOOC Charging (CPH2417)</p>
                    <div class="deals">
                      
                       <table>
          
                       
                        <tr>
                            <td><th>Brand</th></td>
                            <td>OnePlus</td>
                        </tr>
                        <tr>
                            <td><th>Model Name</th></td>
                            <td>10T 5G</td>
                        </tr>
                        <tr>
                            <td><th>Wireless carrer</th></td>
                            <td>Unlocked for All Carriers</td>
                        </tr>
                        <tr>
                            <td><th>Cellular Technology</th></td>
                            <td>5G</td>
                        </tr>
                        <tr>
                            <td><th>Memory Storage Capacity</th></td>
                            <td>Unlocked for All Carriers</td>
                        </tr>
                        <tr>
                            <td><th>Connectivity Technology</th></td>
                            <td>Bluetooth, Wi-Fi, USB, NFC</td>
                        </tr>
                        <tr>
                            <td><th>Color</th></td>
                            <td>Moonstone Black</td>
                        </tr>
                       </table>
                    </div>
                    <div class="features">
                        <a href="#">See all bundles</a>
                        <ul>
                            <li>CAPTURE THE NIGHT IN LOW LIGHT: Whether you’re headed to a concert or romantic night
                                out, there’s no such thing as bad lighting with Night Mode; Galaxy S23 Ultra lets you
                                capture epic content in any setting with stunning Nightography.Aperture - Rear: 200MP
                                (f/1.7), 12MP (f/2.2), 10MP (f/2.4), 10MP (f/4.9), Front: 12MP (f/2.2). Flaw Detection :
                                Yes. Wireless Powershare : Yes..Peak Brightness 1750 nits</li>
                            <li>HIGHEST PHONE CAMERA RESOLUTION: Create crystal-clear content worth sharing with Galaxy
                                S23 Ultra’s 200MP camera — the highest camera resolution on a phone; Whether you’re
                                posting or printing, Galaxy S23 Ultra always does the moment justice</li>
                            <li>STUNNINGLY SMOOTH VIDEO: Capture incredibly smooth video during life’s most exciting
                                moments; With Video Stabilization, this smartphone easily records daytime outdoor
                                adventures or those spur-of-the-moment dance parties at night</li>
                            <li>Now with extended battery life – A single charge via USB-C lasts up to 6 weeks.</li>
                            <li>WRITE, DRAW, CREATE w/ S PEN: Whether you’re in Samsung Note, Microsoft Office or Google
                                Suite, with the built-in S Pen, you can convert handwriting to text, share your
                                creations live and keep everything on your Galaxy S23 Ultra device</li>
                            <li>NAP PICS w/ S PEN: Capture epic selfies and beautiful photos with the click of your S
                                Pen; Simply open up the camera app and click the button on the S Pen instead of the
                                screen; Getting that great shot just got easier
                                FASTEST MOBILE PROCESSOR AVAILABLE: Whether you’re working hard, playing hard or doing
                                both at the same time, smoothly switch between apps with our fastest processor ever
                                UNLOCK SMOOTH GAMING: Game at full throttle and smoothly switch between apps; Get more
                                done with our fastest processor ever combined with massive internal storage; And if
                                you’re on the move, keep going with a screen that adapts to your environment</li>
                            <li>BATTERY THAT POWERS YOUR DAY: Power through a packed day* or long night of gaming
                                without worrying about your phone dying; The robust 5,000mAh battery has been fine-tuned
                                with a smarter processor that helps manage energy usage without slowing you down</li>
                        </ul>
                        <p><b>Note:</b> Products with electrical plugs are designed for use in the US. Outlets and
                            voltage differ internationally and this product may require an adapter or converter for use
                            in your destination. Please check compatibility before purchasing.</p>
                    </div>
                    </div>
                    <div class="exclusive-deals">
                        <p>$489.00</p>
                         <p>This item cannot be shipped to your selected delivery location. Please choose a different delivery location.</p>
                        <a href="#">Deliver to india</a>
                        <p>See similar items shipping to India.</p>
                            <div class="p-join">
                                <p>Add to cart</p>
                            </div>
                            <div class="exclusive-deals">
                                <p>$489.00</p>
                                 <p>This item cannot be shipped to your selected delivery location. Please choose a different delivery location.</p>
                                <a href="#">Deliver to india</a>
                                <p>See similar items shipping to India.</p>
                                    <div class="p-join payment_form">
                                        <p><a href="success.php">Buy Now</a></p>
                                    </div>
                                </div>
        
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        </container>
        <section>
            <div class="book_container" id="books">
                <h2>Top Sellers in Books for you</h2>
                <div class="book_list">
                    <div class="book_img">
                        <img src="https://m.media-amazon.com/images/I/91n+yAE5aeL._AC_SY200_.jpg">
                    </div>
                    <div class="book_img">
                        <img src="https://m.media-amazon.com/images/I/61gpEX9QKkL._AC_SY200_.jpg">
                    </div>
                    <div class="book_img">
                        <img src="https://m.media-amazon.com/images/I/71mo8pckh1L._AC_SY200_.jpg">
                    </div>
                    <div class="book_img">
                        <img src="https://m.media-amazon.com/images/I/51ANGs92WhL._AC_SY200_.jpg">
                    </div>
                    <div class="book_img">
                        <img src="https://m.media-amazon.com/images/I/61n-Bi8rEbL._AC_SY200_.jpg">
                    </div>
    
                    <div class="book_img">
                        <img src="https://m.media-amazon.com/images/I/71d05LRCy-L._AC_SY200_.jpg">
                    </div>
    
                    <div class="book_img">
                        <img src="https://m.media-amazon.com/images/I/41zu6z6lDuL._AC_SY200_.jpg">
                    </div>
                    <div class="book_img">
                        <img src="https://m.media-amazon.com/images/I/61sYrZXjsyL._AC_SY200_.jpg">
                    </div>
                    <div class="book_img">
                        <img src="https://m.media-amazon.com/images/I/81O9My+c-KL._AC_SY200_.jpg">
                    </div>
                    
                </div>
                <div class="book-btn-container">
                    <button class="book-btn" id="slide-btn-left"><i class="fa-solid fa-angle-left"></i></button>
                    <button class="book-btn" id="slide-btn-right"><i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
            <div class="container" id="Bigdeals">
                <div class="product-container" id="fashion">
                    <div class="container-item">
                        <h2>Some Related Product</h2>
                        
                        <div class="product-item">
                            <div class="product-summary">
                                <div class="product">
                                    <img src="https://m.media-amazon.com/images/I/41FxbrMzpnL._AC_SR320,320_.jpg" />
                                </div>
                                <div class="product-caption">
                                    <p>UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android 13 Mobile Phone, 64MP Main Camera Octa Core Smartphone Unlocked 6.7” HD+ Full-View Waterdrop Screen, 5000mAh Battery 20W Fast Charging, 4G Dual SIM, NFC
UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android</p>
                                </div>
                                <div class="top-deal">
                                    <p>Top Deal</p>
                                </div>
                                <div class="price">
                                    <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                                </div>
                            </div>
                            <div class="product-summary">
                                <div class="product">
                                    <img src="https://m.media-amazon.com/images/I/41FxbrMzpnL._AC_SR320,320_.jpg" />
                                </div>
                                <div class="product-caption">
                                    <p>UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android 13 Mobile Phone, 64MP Main Camera Octa Core Smartphone Unlocked 6.7” HD+ Full-View Waterdrop Screen, 5000mAh Battery 20W Fast Charging, 4G Dual SIM, NFC
UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android</p>
                                </div>
                                <div class="top-deal">
                                    <p>Top Deal</p>
                                </div>
                                <div class="price">
                                    <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                                </div>
                            </div>
                            <div class="product-summary">
                                <div class="product">
                                    <img src="https://m.media-amazon.com/images/I/41FxbrMzpnL._AC_SR320,320_.jpg" />
                                </div>
                                <div class="product-caption">
                                    <p>UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android 13 Mobile Phone, 64MP Main Camera Octa Core Smartphone Unlocked 6.7” HD+ Full-View Waterdrop Screen, 5000mAh Battery 20W Fast Charging, 4G Dual SIM, NFC
UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android</p>
                                </div>
                                <div class="top-deal">
                                    <p>Top Deal</p>
                                </div>
                                <div class="price">
                                    <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                                </div>
                            </div>
                            <div class="product-summary">
                                <div class="product">
                                    <img src="https://m.media-amazon.com/images/I/41R2IrhlaDL._AC_SR320,320_.jpg" />
                                </div>
                                <div class="product-caption">
                                    <p>UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android 13 Mobile Phone, 64MP Main Camera Octa Core Smartphone Unlocked 6.7” HD+ Full-View Waterdrop Screen, 5000mAh Battery 20W Fast Charging, 4G Dual SIM, NFC
UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android</p>
                                </div>
                                <div class="top-deal">
                                    <p>Top Deal</p>
                                </div>
                                <div class="price">
                                    <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <div class="container" id="fashion">
                <div class="product-container">
                    <div class="container-item">
                        <h2>Big Deals</h2>
                       
                        <div class="product-item">
                            <div class="product-summary">
                                <div class="product">
                                    <img src="https://m.media-amazon.com/images/I/41MqvZf1WNL._AC_SR160,160_.jpg" />
                                </div>
                                <div class="product-caption">
                                    <p>UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android 13 Mobile Phone, 64MP Main Camera Octa Core Smartphone Unlocked 6.7” HD+ Full-View Waterdrop Screen, 5000mAh Battery 20W Fast Charging, 4G Dual SIM, NFC
UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android</p>
                                </div>
                                <div class="top-deal">
                                    <p>Top Deal</p>
                                </div>
                                <div class="price">
                                    <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                                </div>
                            </div>
                            <div class="product-summary">
                                <div class="product">
                                    <img src="https://m.media-amazon.com/images/I/41FxbrMzpnL._AC_SR320,320_.jpg" />
                                </div>
                                <div class="product-caption">
                                    <p>UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android 13 Mobile Phone, 64MP Main Camera Octa Core Smartphone Unlocked 6.7” HD+ Full-View Waterdrop Screen, 5000mAh Battery 20W Fast Charging, 4G Dual SIM, NFC
UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android</p>
                                </div>
                                <div class="top-deal">
                                    <p>Top Deal</p>
                                </div>
                                <div class="price">
                                    <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                                </div>
                            </div>
                            <div class="product-summary">
                                <div class="product">
                                    <img src="https://m.media-amazon.com/images/I/41FxbrMzpnL._AC_SR320,320_.jpg" />
                                </div>
                                <div class="product-caption">
                                    <p>UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android 13 Mobile Phone, 64MP Main Camera Octa Core Smartphone Unlocked 6.7” HD+ Full-View Waterdrop Screen, 5000mAh Battery 20W Fast Charging, 4G Dual SIM, NFC
UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android</p>
                                </div>
                                <div class="top-deal">
                                    <p>Top Deal</p>
                                </div>
                                <div class="price">
                                    <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                                </div>
                            </div>
                            <div class="product-summary">
                                <div class="product">
                                    <img src="https://m.media-amazon.com/images/I/41FxbrMzpnL._AC_SR320,320_.jpg" />
                                </div>
                                <div class="product-caption">
                                    <p>UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android 13 Mobile Phone, 64MP Main Camera Octa Core Smartphone Unlocked 6.7” HD+ Full-View Waterdrop Screen, 5000mAh Battery 20W Fast Charging, 4G Dual SIM, NFC
UMIDIGI A15 Cell Phones 16(8+8)G+256G, Android</p>
                                </div>
                                <div class="top-deal">
                                    <p>Top Deal</p>
                                </div>
                                <div class="price">
                                    <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>