<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .message{
            background-color: rgb(153, 135, 242);
            width: auto;
            height: 200px;
            color: red;
            margin: auto;
            margin-top: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        p{
            padding-left: 30px;
            font-weight: 600;
        }
        a{
            text-decoration: none;
            padding-left: 15px;
            color: red;
        }
        a:hover{
            text-decoration: underline;
            color: brown;
            transition: 0.5s;
        }
    </style>
</head>
<body>
    <container>
        <div class="message">
            <div class="message-text">
                <h1>You have no acoount</h1>
                <label ><a href="login.php" >Try again?</a></label>
                <label ><a href="registration.php" >Need Create new account</a></label>
            </div>
         
        </div>
    </container>
    
</body>
</html>