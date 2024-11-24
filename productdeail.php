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

                <li class="border-white"><a href="#abc">Best Sellers</a></li>
                <li class="border-white"><a href="#abc">Today's Deals</a></li>
                <li class="border-white"><a href="#">Mobiles</a></li>
                <li class="border-white"><a href="#">Customer Service</a></li>
                <li class="border-white"><a href="#">Electronic</a></li>
                <li class="border-white"><a href="#">Home & Kitchen</a></li>
                <li class="border-white"><a href="#">Fashion</a></li>
                <li class="border-white"><a href="#abc">Book</a></li>
                <li class="border-white prime-image-hover">
                    <a href="#">Prime</a>
                    <div class="prime-image">
                        <img
                            src="https://m.media-amazon.com/images/G/31/prime/NavFlyout/TryPrime/2018/Apr/IN-Prime-PIN-TryPrime-MultiBen-Apr18-400x400._CB442254244_.jpg" />
                    </div>

                </li>
            </ul>

        </div>
    </nav>
    <section>
        <div class="container">
            <div class="product-container">
                <div class="container-item">
                    <h2>Result</h2>
                    <p> Price and other details may vary based on product size and color.</p>
                    <div class="product-item">
                        <div class="product-summary">
                            <div class="product">
                                <img src="https://m.media-amazon.com/images/I/71+4epVt2fL._AC_SY200_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>OnePlus 10T 5G | 16GB RAM+256GB | Dual-SIM | Titan Black | US Fact</p>
                            </div>
                            <div class="top-deal">
                                <p><a href="preview.html">Top Deal</a></p>
                            </div>
                            <div class="price">
                                <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                            </div>
                        </div>
                        <div class="product-summary">
                            <div class="product">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/61dcWgQnk3L._AC_UL160_SR160,160_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>Xiaomi Redmi 10 4G Volte GSM Factory Unlocked 6.5" 50MP Quad Camera </p>
                            </div>
                            <div class="top-deal">
                                <p><a href="preview.html">Top Deal</a></p>
                            </div>
                            <div class="price">
                                <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                            </div>
                        </div>
                        <div class="product-summary">
                            <div class="product">
        
                                <img src="https://images-na.ssl-images-amazon.com/images/I/71CfORmS1TL._AC_UL160_SR160,160_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>ANRABESS Women 2 Piece Outfits Sweatsuit Oversized Sweatshirt & Lounge Shorts
                                    2023 Casual Cozy Pajamas</p>
                            </div>
                            <div class="top-deal">

                          <p><a href="preview.php">Top Deal</a></p>
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
                                <p>ANRABESS Women 2 Piece Outfits Sweatsuit Oversized Sweatshirt & Lounge Shorts
                                    2023 Casual Cozy Pajamas</p>
                            </div>
                            <div class="top-deal">
                                <p><a href="preview.html">Top Deal</a></p>
                            </div>
                            <div class="price">
                                <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="product-container">
                <div class="container-item">
                    <h2>Trending deals in Cell Phones & Accessories</h2>
                   
                    <div class="product-item">
                        <div class="product-summary">
                            <div class="product">
                                <img src="https://m.media-amazon.com/images/I/61Kf+coz5uL._AC_SY300_SX300_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>3 in 1 Charging Station for iPhone, Wireless Charger for iPhone 15 14 13 12 11 </p>
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
                                <img src="https://m.media-amazon.com/images/I/51+1-NUb9hL._AC_UL320_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>Realspace® Magellan Performance Electric 60" W Height-Adjustable Standing Desk, Espresso </p>
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
                                <img src="https://m.media-amazon.com/images/I/7159wyool6L.__AC_SX300_SY300_QL70_FMwebp_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>Bioworld Star Wars Multi Character AOP Adult 17" Laptop Backpack</p>
                            </div>
                            <div class="top-deal">
                                <p>Top Deal</p>
                            </div>
                            <div class="price">
                                <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                            </div>
                        </div><div class="product-summary">
                            <div class="product">
                                <img src="https://m.media-amazon.com/images/I/71GkEDRgw3S._AC_SX679_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>Star Wars Endor Councilor Embroidered Trucker Hat Multicolored</p>
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

        <div class="container">
            <div class="product-container">
                <div class="container-item">
                    <h2>Trending deals in Kitchen & Dining</h2>
                
                    <div class="product-item">
                        
                        <div class="product-summary">
                            <div class="product">
                                <img src="https://m.media-amazon.com/images/I/71O0Is7QpeL._AC_SY155_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>ANRABESS Women 2 Piece Outfits Sweatsuit Oversized Sweatshirt & Lounge Shorts
                                    2023 Casual Cozy Pajamas</p>
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
                                <img src="https://m.media-amazon.com/images/I/81sG72G84+L._AC_SY155_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>ANRABESS Women 2 Piece Outfits Sweatsuit Oversized Sweatshirt & Lounge Shorts
                                    2023 Casual Cozy Pajamas</p>
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
                                <img src="https://m.media-amazon.com/images/I/81jm9+Db-VL._AC_SY155_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>ANRABESS Women 2 Piece Outfits Sweatsuit Oversized Sweatshirt & Lounge Shorts
                                    2023 Casual Cozy Pajamas</p>
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
         <div class="container">
            <div class="product-container">
                <div class="container-item">
                    <h2>Brand</h2>
                
                    <div class="product-item">
                        <div class="product-summary">
                            <div class="product">
                                <img src="https://m.media-amazon.com/images/I/31ErT4djdOL._AC_UF226,226_FMjpg_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>Amazon Essentials Men's Apparel</p>
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
                                <img src="https://m.media-amazon.com/images/I/31ErT4djdOL._AC_UF226,226_FMjpg_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>Amazon Essentials Men's Apparel</p>
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
                                <img src="https://m.media-amazon.com/images/I/41aKYIjQ84L._AC_SR400,600_AGcontrast_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>Amazon Essentials Men's Hooded top-deal
    
                            </div>
                            <div class="top-deal">
                                <p>Top Deal</p>
                            </div>
                            <div class="price">
                                <sup>$</sup>31<sup>99</sup> <sub>List:<strike>$59.99</strike></sub>
                            </div>
                        </div><div class="product-summary">
                            <div class="product">
                                <img src="https://m.media-amazon.com/images/I/41yxF5KqmtL._AC_SR400,600_AGcontrast_.jpg" />
                            </div>
                            <div class="product-caption">
                                <p>Men's Crewneck Sweater (Available in Big & Tall)</p>
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
      
    <footer>
        <div class="foot-panel">
            Back to top
        </div>
        <div class="foot-panel1">
            <div class="foot-panel2">

                <ul>
                    <p> Get to Know Us </p>
                    <a href="#">Careers</a>
                    <a href="#">Blog</a>
                    <a href="#">About Amazon</a>
                    <a href="#">Investor Relations</a>
                    <a href="#">Amazon Devices</a>
                    <a href="#">Amazon Science</a>
                </ul>
            </div>

            <div class="foot-panel2">

                <ul>
                    <p> Make Money with Us </p>
                    <a href="#">Sell products on Amazon</a>
                    <a href="#">Sell on Amazon Business</a>
                    <a href="#">Sell apps on Amazon</a>
                    <a href="#">Become an Affiliate</a>
                    <a href="#">Advertise Your Products</a>
                    <a href="#">Self-Publish with Us</a>
                    <a href="#">Host an Amazon Hub</a>
                    <a href="#">›See More Make Money with Us</a>


                </ul>
            </div>
            <div class="foot-panel2">
                <ul>
                    <p> Amazon Payment Products</p>
                    <a href="#">Amazon Business Card</a>
                    <a href="#">Shop with Points</a>
                    <a href="#">About Amazon</a>
                    <a href="#">Reload Your Balance</a>
                    <a href="#">Amazon Currency Converter</a>
                </ul>
            </div>


            <div class="foot-panel2">
                <ul>
                    <p>Let Us Help You</p>
                    <a href="#">Amazon and COVID-19</a>
                    <a href="#">Your Account</a>
                    <a href="#">Your Orders</a>
                    <a href="#">Shipping Rates & Policies</a>
                    <a href="#">Help</a>
                </ul>
            </div>

        </div>

        </div>
        <div class="foot-panel3">
            <div class="logo">
                <img src="amazon-logo.jpg">
            
            </div>
        </div>

        <div class="foot-panel4">
            <div class="pages">
                <a>condition use</a>
                <a>privacy notice</a>
                <a>add your privacy choice</a>
            </div>
        </div>
        <div class="copy-right">
            © 2023, Amazon.com, Inc. or its affiliates
        </div>
    </footer>

</body>

</html>