<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <style>
        .registration-container {
            box-sizing: border-box;

        }

        .rigistration-logo {
            display: flex;
            justify-content: space-evenly;
            align-items: center;

        }

        .rigistration-logo img {
            width: 120px;
        }

        .registration-form-detail {
            height: 670px;
            width: 300px;
            margin: auto;
            background-color: white;
            display: flex;
            justify-content: center;
            border-radius: 5px;
            line-height: 30px;
            border: 1px solid rgb(231, 236, 238);
            padding: 25px;
            margin-top: 0px;
            padding-top: 0px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        h1 {
            left: 0;
            font-weight: 200;

        }

        .in-name,
        .in-email,
        .in-email,
        .in-pwd,
        .in-re-pwd {
            width: 300px;
            padding: 6px;
            color: brown;
            margin-top: 2px;
            margin-bottom: 2px;
            border-radius: 2px;
            align-items: center;
            border: 1px solid black;
            background-color: transparent;
            box-shadow: 1px solid yellow;
        }

        .submit {
            width: 100%;
            background-color: yellow;

            padding: 8px;
            border-radius: 5px;
            border: none;

        }

        #agree,
        #buy {
            display: block;

        }

        .discription-block {
            display: flex;
            justify-content: center;
            margin: auto;
        }
        label a{
            text-decoration: none;
        }
        label a:hover{
            text-decoration: underline;
            color: rgb(158, 33, 33);
        }
    </style>
</head>

<body>
    <container>

        <div class="rigistration-logo">
            <img src="th.jpg">
        </div>
        <div class="registration-form-detail">

            <form method="POST" action="registersub.php">
                <h1>Create Account</h1>
                <div class="name">
                    <label>Your name</label>
                    <input type="text" class="in-name" name="name" required placeholder="First and Last name">
                </div>
                <div class="email">
                    <label>Enter number or email</label>
                    <input type="email" class="in-email" name="email">
                </div>
                <div class="password">
                    <label>Password</label>
                    <input type="password" class="in-pwd" name="pwd" id="pwd" placeholder="At Least 6 character">
                </div>
                <div class="re-password">
                    <label>Re-password</label>
                    <input type="password" class="in-re-pwd" name="re_pwd" id="re_pwd">
                </div>
                <p><input type="submit" name="submit" class="submit" value="Continue"  onclick="fun();"></p>
                <br>

                <label> By creating an account, you agree to Amazon's <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice.</a></label>
                <br>
                <label> Buying for work?
                    <label>
                    <a href="#">Create a free business account</a>
                    </label>
                </label>
                <br>
                <label>
                    Already have an account? 
                    <a href="login.php">Sign int</a>
                </label>


            </form>
        </div>

    </container>
    <script type="text/javascript">
        function fun(){
            var mypwd = document.getElementById("pwd");
            var myre_pwd =document.getElementById("re_pwd");
            if(mypwd.value=="")
            {
            alert("Enter password...");
            }
            if(mypwd.value!=myre_pwd.value)
            {
            alert("Your password not match...");
            }
            if(mypwd.value==myre_pwd.value)
            {     
            alert("You have register succersfully");
            }
        }

    </script>
    
</body>

</html>