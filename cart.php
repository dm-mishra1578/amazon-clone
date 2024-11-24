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
                <li class="border-white"><a href="#">Best Sellers</a></li>
                <li class="border-white"><a href="#">Today's Deals</a></li>
                <li class="border-white"><a href="#">Mobiles</a></li>
                <li class="border-white"><a href="#">Customer Service</a></li>
                <li class="border-white"><a href="#">Electronic</a></li>
                <li class="border-white"><a href="#">Home & Kitchen</a></li>
                <li class="border-white"><a href="#">Fashion</a></li>
                <li class="border-white"><a href="#">Book</a></li>

        </div>
    </nav>
    <mi class="cart-storage">
        <div class="container-cart-storage">
            <div class="container-cart">
                <div class="cart-items">
                    <div class="cart-item">
                        <img
                            src="https://m.media-amazon.com/images/G/01/cart/empty/kettle-desaturated._CB445243794_.svg">
                    </div>
                    <div class="cart-empty">
                        <h1>Your Amazon Cart is empty</h1>
                    </div>
                </div>
                <div class="container-item">

                </div>

                <h6>The price and availability of items at Amazon.com are subject to change. The Cart is a temporary
                    place
                    to
                    store a list of your items and reflects each item's most recent price. Shopping CartLearn more.</h6>

            </div>
            <div class="container-item-list">
                <p>New international customers purchased</p>
                <div class="cart-add">
                    <div class="cart-product">
                        <div class="cart-product-item">
                            <img
                                src="https://images-na.ssl-images-amazon.com/images/I/613husHS6EL._AC_UL200_SR200,200_.jpg">
                        </div>
                        <div class="cart-product-details">
                            <h4>
                                StarTech.com 1 Port PCIe Gigabit Network</h4>
                            <div class="add-carts">
                                <p>Add to cart</p>
                            </div>
                        </div>
                    </div>
                    <div class="cart-product">
                        <div class="cart-product-item">
                            <img
                                src="https://images-na.ssl-images-amazon.com/images/I/91n+yAE5aeL._AC_UL200_SR200,200_.jpg">
                        </div>
                        <div class="cart-product-details">
                            <h4>
                                StarTech.com 1 Port PCIe Gigabit Network</h4>
                            <div class="add-carts">
                                <p>Add to cart</p>
                            </div>
                        </div>
                    </div>
                    <div class="cart-product">
                        <div class="cart-product-item">
                            <img
                                src="https://images-na.ssl-images-amazon.com/images/I/51vPBQFVT3L._AC_UL200_SR200,200_.jpg">
                        </div>
                        <div class="cart-product-details">
                            <h4>
                                StarTech.com 1 Port PCIe Gigabit Network</h4>
                            <div class="add-carts">
                                <p>Add to cart</p>
                            </div>
                        </div>
                    </div>
                    <div class="cart-product">
                        <div class="cart-product-item">
                            <img
                                src="https://images-na.ssl-images-amazon.com/images/I/51vPBQFVT3L._AC_UL200_SR200,200_.jpg">
                        </div>
                        <div class="cart-product-details">
                            <h4>
                                StarTech.com 1 Port PCIe Gigabit Network</h4>
                            <div class="add-carts">
                                <p>Add to cart</p>
                            </div>
                        </div>
                    </div>
                    <div class="cart-product">
                        <div class="cart-product-item">
                            <img
                                src="https://images-na.ssl-images-amazon.com/images/I/51vPBQFVT3L._AC_UL200_SR200,200_.jpg">
                        </div>
                        <div class="cart-product-details">
                            <h4>
                                StarTech.com 1 Port PCIe Gigabit Network</h4>
                            <div class="add-carts">
                                <p>Add to cart</p>
                            </div>
                        </div>
                    </div>
                    <div class="cart-product">
                        <div class="cart-product-item">
                            <img
                                src="https://images-na.ssl-images-amazon.com/images/I/51vPBQFVT3L._AC_UL200_SR200,200_.jpg">
                        </div>
                        <div class="cart-product-details">
                            <h4>
                                StarTech.com 1 Port PCIe Gigabit Network</h4>
                            <div class="add-carts">
                                <p>Add to cart</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </mi>
    <br>
    <br>
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
            © 2023, Amazon clone.com
        </div>
    </footer>
</body>

</html>