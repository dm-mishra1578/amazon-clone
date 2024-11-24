
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style>
            body,
html {
    width: 100%;
    height: 100%;
}

body{
    padding-top:100px;
}

body,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700;
}

#content{
    min-height: 600px;
}

#banner_image {
    padding-bottom: 50px;
    text-align: center;
    color: #f8f8f8;
    background: url(../img/intro-bg_1.jpg) no-repeat center center;
    background-size: cover;
}

#banner_content {
    position: relative;
    padding-top: 6%;
    padding-bottom: 6%;
    margin-top: 12%;
    margin-bottom: 12%;
    background-color: rgba(0, 0, 0, 0.7);
    max-width: 660px;
}

#item_list {
    padding-top: 50px;
}

/*This code ensures that when we navigate to a particular section of a page, the section does not get lost behind the header*/
#cameras:before, #watches:before, #shirts:before{
    display: block; 
    content: " "; 
    margin-top: -85px; 
    height: 85px; 
    visibility: hidden;
}


#login-panel .panel-footer{
    font-weight:normal;
}

footer {
    padding: 10px 0;
    background-color: #101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%;
}

.red{
    color:red;
}

#settings-container{
    margin-bottom:10px;
}

.navbar-brand{
    font-size:20px;
}

@media(max-width:768px) {
    #banner_content {
        padding-bottom: 15%;
    }
    footer{
        text-align:left;
    }
}

.remove_item_link{
    color:#0000ff;
}
        </style>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Amazon</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href = "cart.html"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href = "settings.html"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = "index.html"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3>
                    <p align="center">your product id : ABC49968</p>
                    <hr>
                    <p align="center">Click <a href="productdeail.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <center>
                    <p>Copyright &copy; Amazon clone. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
                </center>
            </div>
        </footer>
    </body>
</html>