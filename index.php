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

    <!--------------------------------------navigation------------------------------------>
    <nav class="nav">
        <div class="container container-nav">
            <ul>

                <li class="border-white" id="open-nav-sidebar">
                    <div class="click">
                        <span class="open-nav-slider">
                            <i class="fa-solid fa-bars"></i>
                            All
                        </span>
                        <div class="option-all-container">

                            <div class="all-hello">
                                <i class="fa-regular fa-user"></i>
                                <label>
                                    <h3>Hello,Sign</h3>
                                </label>
                            </div>
                            <div class="overflow">
                                <div class="all-slide">

                                    <p>Digital Content & Device</p>

                                    <a href="#">Amazon Music</a>
                                    <a href="#">Idle-E reader Book</a>
                                    <a href="#">Amazon appstore</a><a href="#">Amazon Music</a>
                                    <a href="#">Idle-E reader Book</a>
                                    <a href="#">Amazon appstore</a><a href="#">Amazon Music</a>
                                    <a href="#">Idle-E reader Book</a>
                                    <a href="#">Amazon appstore</a>


                                </div>
                                <div class="all-slide">

                                    <p>Digital Content & Device</p>

                                    <a href="#">Amazon Music</a>
                                    <a href="#">Idle-E reader Book</a>
                                    <a href="#">Amazon appstore</a>



                                </div>
                                <div class="all-slide">

                                    <p>Digital Content & Device</p>
                                    <a href="#">Amazon Music</a>
                                    <a href="#">Idle-E reader Book</a>
                                    <a href="#">Amazon appstore</a>

                                </div>
                            </div>

                        </div>

                    </div>
                </li>
              
                <li class="border-white"><a href="#tdeals">Today's Deals</a></li>
                <li class="border-white"><a href="#mobiles">Mobiles</a></li>
                <li class="border-white"><a href="#">Customer Service</a></li>
                <li class="border-white"><a href="#electronics">Electronic</a></li>
                <li class="border-white"><a href="#kitchen">Home & Kitchen</a></li>
                <li class="border-white"><a href="#fashion">Fashion</a></li>
                <li class="border-white"><a href="#books">Book</a></li>
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

 <!---------------------------------------sidebar navigation------------------------------------>

    <div class="sidebar-container-navigation" id="sidebar-container-navigation-id">
        <div class="sidebar-left-part">
            <div class="sidebar-top">
                <i class="fa-solid fa-circle-user"></i>
                <h2>Hello, <span>sign in</span></h2>
            </div>
            <div class="sidebar-wrap">
                <div class="sidebar-item">
                    <h2>Trending</h2>
                    <p>Best Sellers</p>
                    <p>New Releases</p>
                    <p>Movers and Shakers</p>
                </div>
                <div class="sidebar-item">
                    <h2>Digital Content And Devices</h2>
                    <p>Echo & Alexa</p>
                    <p>Fire TV</p>
                    <p>Kindle E-Readers & eBooks</p>
                    <p>Audible Audiobooks</p>
                    <p>Amazon Prime Video</p>
                    <p>Amazon Prime Music</p>
                </div>
                <div class="sidebar-item">
                    <h2>Shop By Category</h2>
                    <p>Mobiles, Computes</p>
                    <p>TV, Appliances, Electronic</p>
                    <p>Men's Fashion</p>
                    <p>Women's Fashion</p>
                    <p>See All</p>
                </div>
                <div class="sidebar-item">
                    <h2>Programs & Features</h2>
                    <p>Gift Cards & Mobile Recharges</p>
                    <p>Flight Tickets</p>
                    <p>#Foundlt-OnAmazon</p>
                    <p>Clearance store</p>
                </div>
                <div class="sidebar-item">
                    <h2>Help & Settings</h2>
                    <p>Your Account</p>
                    <p>Customer Service</p>
                    <p>Sign in</p>
                </div>
            </div>
        </div>
        <button id="sidebar-navigation-close">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

        
    <!----------------------------------------image slider ------------------------------>
    <section>
        <div class="image-container">
            <div class="image-list" id="abc">
                <div class="image-item">
                    <img src="https://m.media-amazon.com/images/I/71cp9PVuTfL._SX3000_.jpg" />
                </div>
                <div class="image-item">
                    <img src="https://m.media-amazon.com/images/I/61GnAucagBL._SX3000_.png" />
                </div>
                <div class="image-item">
                     <img src="https://m.media-amazon.com/images/I/71qlKqpJnlL._SX3000_.jpg" />
                </div>
                <div class="image-item">
                    <img src="https://m.media-amazon.com/images/I/71cQMXCLSvL._SX3000_.jpg" />
                </div>
                <div class="image-item">
                    <img src="https://m.media-amazon.com/images/I/61aURrton0L._SX3000_.jpg" />
                </div>
                <div class="image-item">
                    <img src="https://m.media-amazon.com/images/I/61O72XhcEkL._SX3000_.jpg" />
                </div>
                <div class="image-item">
                    <img src="https://m.media-amazon.com/images/I/61VuJdpjvaL._SX3000_.jpg" />
                </div>
                <div class="image-item">
                    <img src="https://m.media-amazon.com/images/I/61UrRx+3LLL._SX3000_.jpg" />
                </div>
            </div>

            <div class="image-btn-container">
                <button class="slider-btn" id="slide-btn-left" onclick="plusSlides(-1);"><i
                        class="fa-solid fa-chevron-left"></i></button>
                <button class="slider-btn" id="slide-btn-right" onclick="plusSlides(1)"><i
                        class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
          
    </section>


    <!-----------------------------------------product container card------------------------------------------>
    <main class="main">
        <div class="card-product-container container">
            <div class="card-product">
                <h2>Up to 60% off | Styles for Men</h2>
                <div class="card-product-nested-card">
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PF_MF/MF-1-186-116._SY116_CB636110853_.jpg" />
                        <p>clothing</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PF_MF/MF-3-186-116._SY116_CB636110853_.jpg" />
                        <p>Footwear</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/BAU/Oct/186X116_3._SY116_CB606110532_.jpg" />
                        <p>Watches</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/Fashion/Gateway/BAU/BTF-Refresh/May/PF_MF/MF-4-186-116._SY116_CB636110853_.jpg" />
                        <p>Bags & language</p>
                    </div>
                </div>
                <button class="card-product-btn"><a href="productdeail.php">see more</a></button>
            </div>
            <div class="card-product">
                <h2>Redefine your living room</h2>
                <div class="card-product-nested-card">
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Furniture/furniture_node_1/372_232_03_low._SY116_CB605507312_.jpg" />
                        <p>Sofa cum beds</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Furniture/furniture_node_1/372_232_04_low._SY116_CB605507312_.jpg" />
                        <p>Office chairs & study</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Furniture/furniture_node_1/372_232_01_low._SY116_CB605507312_.jpg" />
                        <p>Bean bags</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Furniture/furniture_node_1/372_232_02_low._SY116_CB605507312_.jpg" />
                        <p>Explore all</p>
                    </div>
                </div>
                <button class="card-product-btn">Visit our furniture store</button>
            </div>
            <div class="card-product" id="fashion">
                <h2>Top rated, premium quality | Amazon Brands &</h2>
                <div class="card-product-nested-card">
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/BAU/Oct/186X116_1._SY116_CB606110532_.jpg" />
                        <p>Home Products</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/BAU/Oct/186X116_5._SY116_CB606110532_.jpg" />
                        <p>Furniture</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/BAU/Oct/186X116_3._SY116_CB606110532_.jpg" />
                        <p>Daily essentials</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/BAU/Oct/186X116_8._SY116_CB606110532_.jpg" />
                        <p>Fashion</p>
                    </div>
                </div>
                <button class="card-product-btn">see more</button>
            </div>
            <div class="card-product">
                <h2>Easy updates for elevated spaces</h2>
                <div class="card-product-nested-card">
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/img18/home/2023/Q2/Homepage/2023Q2_GW_EE_LaundryLuxe_D_Quad_186x116._SY116_CB594237035_.jpg" />
                        <p>Baskets & hampers</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/img18/home/2023/Q2/Homepage/2023Q2_GW_EE_Kitchen_D_Quad_186x116._SY116_CB594237035_.jpg" />
                        <p>Hardware</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/img18/home/2023/Q2/Homepage/2023Q2_GW_EE_AccentFurniture_D_Quad_186x116._SY116_CB594237035_.jpg" />
                        <p>Accent furniture</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/img18/home/2023/Q2/Homepage/2023Q2_GW_EE_Hallway_D_Quad_186x116._SY116_CB594237035_.jpg" />
                        <p>paint & wallpaper</p>
                    </div>
                </div>
                <button class="card-product-btn">see more</button>
            </div>
        </div>

        <div class="card-product-container container productBackgraound">
            <div class="card-product">
                <h2>Refresh your space</h2>
                <div class="card-product-nested-card">
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/launchpad/2023/Gateway/January/DesktopQuadCat_186x116_LP-HP_B08MYX5Q2W_01.23._SY116_CB619238939_.jpg" />
                        <p>Dining</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/launchpad/2023/Gateway/January/DesktopQuadCat_186x116_kitchen_B0126LMDFK_01.23._SY116_CB619238939_.jpg" />
                        <p>Kitchen</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/launchpad/2023/Gateway/January/DesktopQuadCat_186x116_home_B08RCCP3HV_01.23._SY116_CB619238939_.jpg" />
                        <p>fashion</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/launchpad/2023/Gateway/January/DesktopQuadCat_186x116_health-beauty_B07662GN57_01.23._SY116_CB619238939_.jpg" />
                        <p>Health and Beauty</p>
                    </div>
                </div>
                <button class="card-product-btn">see more</button>
            </div>
            <div class="card-product">
                <h2>More smiles, for less</h2>
                <div class="card-product-nested-card">
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/US-hq/2023/img/Consumables/XCM_CUTTLE_1645243_3455324_186x116_1X_en_US._SY116_CB575931318_.jpg" />
                        <p>Beauty</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/BAU/Oct/186X116_5._SY116_CB606110532_.jpg" />
                        <p>Gift for her</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/US-hq/2023/img/Consumables/XCM_CUTTLE_1641385_3445941_186x116_1X_en_US._SY116_CB575768111_.jpg" />
                        <p>Daily essentials</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/US-hq/2023/img/Consumables/XCM_CUTTLE_1641385_3445939_186x116_1X_en_US._SY116_CB575768111_.jpg" />
                        <p>Most-loved beauty</p>
                    </div>
                </div>
                <button class="card-product-btn">see more</button>
            </div>
            <div class="card-product" id="mobiles">
                <h2>Pick up where you left off</h2>
                <div class="card-product-nested-card">
                    <div class="card-nested">
                        <img src="https://m.media-amazon.com/images/I/71+4epVt2fL._AC_SY110_.jpg" />
                        <p>OnePlus 10T | Moo…</p>
                    </div>
                    <div class="card-nested">
                        <img src="https://m.media-amazon.com/images/I/71Sa3dqTqzL._AC_SY110_.jpg" />
                        <p>SAMSUNG Galaxy S…</p>
                    </div>
                    <div class="card-nested">
                        <img src="https://m.media-amazon.com/images/I/71+l1mbWEEL._AC_SY110_.jpg" />
                        <p>ASUS ROG Phone 6…</p>
                    </div>
                    <div class="card-nested">
                        <img src="https://m.media-amazon.com/images/I/81qOD8EZTjL._AC_SY110_.jpg" />
                        <p>OnePlus 10 Pro | 5G…</p>
                    </div>
                </div>
                <button class="card-product-btn">see more</button>
            </div>
            <div class="card-product" id="bsell">
                <h2>Host gifts under $50</h2>
                <div class="card-product-nested-card">
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/img22/Events/Winter23/WIN23_HostessGifts_Candles_QuadCard_D_01_186x116._SY116_CB577074175_.jpg" />
                        <p>candels</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/img22/Events/Winter23/WIN23_HostessGifts_CofTableBooks_QuadCard_D_04_186x116._SY116_CB577074175_.jpg" />
                        <p>Coffe tables books</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/img22/Events/Winter23/WIN23_HostessGifts_Glassware_QuadCard_D_03_186x116._SY116_CB577074175_.jpg" />
                        <p>Glassware</p>
                    </div>
                    <div class="card-nested">
                        <img
                            src="https://images-na.ssl-images-amazon.com/images/G/01/img22/Events/Winter23/WIN23_HostessGifts_TableTop_QuadCard_D_02_186x116._SY116_CB577074175_.jpg" />
                        <p>Tabless</p>
                    </div>
                </div>
                <button class="card-product-btn">see more</button>
            </div>
        </div>


<!-------------------------------------------------today's deals ------------------------------------------------>
       
         <section class="today_deals_container" id="tdeals">
            <div class="today_deals_heading">
                <h1>Today's Deals</h1>
                <p><a href="#">See all deals</a></p>
            </div>

            <div class="today_deals_product_container">
                <div class="today_deals_btn_container">
                    <button class="today_deal_btn" id="today_deal_btn_prev">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>
                    <button class="today_deal_btn" id="today_deal_btn_next">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>

                <div class="today_deals_product_list">
                    <div class="today_deals_product_item">
                        <img src="https://m.media-amazon.com/images/I/411mbYGYIdL._AC_SY200_.jpg" />
                        <div class="discount_Contaienr">
                            <a href="#">Up to 52% off</a>
                            <a href="#">Deal of the day</a>
                        </div>
                        <p>adidas and Campus Footwear</p>
                    </div>

                    <div class="today_deals_product_item">
                        <img src="https://m.media-amazon.com/images/I/411mbYGYIdL._AC_SY200_.jpg" />
                        <div class="discount_Contaienr">
                            <a href="#">Up to 52% off</a>
                            <a href="#">Deal of the day</a>
                        </div>
                        <p>adidas and Campus Footwear</p>
                    </div>

                    <div class="today_deals_product_item">
                        <img src="https://m.media-amazon.com/images/I/411mbYGYIdL._AC_SY200_.jpg" />
                        <div class="discount_Contaienr">
                            <a href="#">Up to 52% off</a>
                            <a href="#">Deal of the day</a>
                        </div>
                        <p>adidas and Campus Footwear</p>
                    </div>

                    <div class="today_deals_product_item">
                        <img src="https://m.media-amazon.com/images/I/411mbYGYIdL._AC_SY200_.jpg" />
                        <div class="discount_Contaienr">
                            <a href="#">Up to 52% off</a>
                            <a href="#">Deal of the day</a>
                        </div>
                        <p>adidas and Campus Footwear</p>
                    </div>

                    <div class="today_deals_product_item">
                        <img src="https://m.media-amazon.com/images/I/411mbYGYIdL._AC_SY200_.jpg" />
                        <div class="discount_Contaienr">
                            <a href="#">Up to 52% off</a>
                            <a href="#">Deal of the day</a>
                        </div>
                        <p>adidas and Campus Footwear</p>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------------------Sellers in Books--------------------------------------------------->
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
        <!----------------------------------------------------->
        <!----------------------------------------Home&kitchen-------------------------------------------------->
        <div class="container" id="kitchen">
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
                                <img src="https://m.media-amazon.com/images/I/61P1EJoF3yL._AC_SY155_.jpg" />
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

        
        <!-------------------------------Electronics---------------------------------------->
        <div class="electronics_container" id="electronics">
            <h2>Top Electonics Items for you</h2>
            <div class="book_list">
                <div class="electronics_img">
                    <img src="https://m.media-amazon.com/images/I/814KnXVtcsL._AC_UL320_.jpg">
                </div>
               
                <div class="electronics_img">
                    <img src="https://m.media-amazon.com/images/I/51Bioe8wnPL._AC_UL320_.jpg">
                </div>
                <div class="electronics_img">
                    <img src="https://m.media-amazon.com/images/I/81djh1gfUwL._AC_UL320_.jpg">
                </div>

                <div class="electronics_img">
                    <img src="https://m.media-amazon.com/images/I/71JqyTBiXrL._AC_UL320_.jpg">
                </div>

                <div class="electronics_img">
                    <img src="https://m.media-amazon.com/images/I/61kRNDZh8UL._AC_UL320_.jpg">
                </div>
                <div class="electronics_img">
                    <img src="https://m.media-amazon.com/images/I/715-sdgYOWL._AC_UL320_.jpg">
                </div>
                <div class="electronics_img">
                    <img src="https://m.media-amazon.com/images/I/814KnXVtcsL._AC_UL320_.jpg">
                </div>

            </div>
            <div class="book-btn-container">
                <button class="book-btn" id="slide-btn-left"><i class="fa-solid fa-angle-left"></i></button>
                <button class="book-btn" id="slide-btn-right"><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
    </main>
        <!---------------------------------------------footer------------------------>

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
                © 1996-2023, Amazon clone.com, 
            </div>
        </footer>

    
<div class="last_footer"></div>



<script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
        
      let i;
      let slides = document.getElementsByClassName("image-item");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>





</body>

</html>