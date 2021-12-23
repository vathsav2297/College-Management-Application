<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/signin.css">
<link rel="stylesheet" href="../css/wdm.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- Navbar (sit on top) -->
    <div class="top">
        <div class="bar white wide padding card" style="font-family: cursive;padding: 0 !important;">
            <a href="../Home/homepage.php" class="bar-item button" style="font-size: 24px;">SayItRight</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="right hide-small" style="font-size: 19px;padding: 4px;">
              <a href="../Home/homepage.php#home" class="bar-item button">Home</a>
              <a href="../Home/homepage.php#about" class="bar-item button">About</a>
              <a href="../Home/homepage.php#services" class="bar-item button">Services</a>
              <a href="../Home/homepage.php#contact" class="bar-item button">Contact</a>
              <a href="../Home/signin.php" class="bar-item button">Login/Register</a>
            </div>
          </div>
    </div>
    <!--Login and signup-->
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                <div class="title">Login</div>
                <form action="../Api/login.php" method="post">
                <div class="input-boxes">
                    <div class="input-box">
                    <i class="fa fa-envelope"></i>
                    <input type="text" name="uname" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                    <i class="fa fa-lock" style="font-size: 24px;"></i>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="text"><a href="#">Forgot password?</a></div>
                    <div class="button input-box">
                    <input type="submit" value="Login">
                    </div>
                    <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
                </div>
                </form>
            </div>
            <div class="signup-form">
                <div class="title">Signup</div>
                <form action="../Api/signup.php" method="post">
                <div class="input-boxes">
                    <div class="input-box">
                    <i class="user"></i>
                    <input type="text" name="uname" placeholder="Enter your First name" required>
                    </div>
                    <div class="input-boxes">
                    <div class="input-box">
                        <i class="user"></i>
                        <input type="text" name="lname" placeholder="Enter your Last name" required>
                    </div>
                    <div class="input-box">
                    <i class="envelope"></i>
                    <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                    <i class="lock"></i>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <label for="account">Choose account type:</label>
                        <select id="account" name="usertype" style="border: none;
                                background-color: antiquewhite;
                                padding: 0 0 0 5%;">
                            <option value="student">student</option>
                            <option value="professor">professor</option>
                            <option value="advisor">advisor</option>
                            <option value="admin">admin</option>
                            </select>
                    </div>
                    <div class="button input-box">
                    <input type="submit" value="Register">
                    </div>
                    <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                </div>
                </form>
            </div>

        </div>

    </div>

    <h3 style="margin: 0 0 23px 0;font-family: Verdana,sans-serif;text-align: center;"><?php echo $_GET['successmsg'] ?></h1>
</body>
</html>