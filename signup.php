<?php include_once 'controller/registerController.php' ?>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <header>
            <section>
                <div class="logo">
                    <a>Movies</a>
                </div>
                <div class="nav">
                   <a href="http://localhost/ProjektiWebFinale/home.php">HOME</a>
                   <a href="http://localhost/ProjektiWebFinale/movies.php">MOVIES</a>
                   <a href="http://localhost/ProjektiWebFinale/aboutUs.php">ABOUT US</a>
                   <a href="http://localhost/ProjektiWebFinale/news.php">NEWS</a>
                   <a href="http://localhost/ProjektiWebFinale/login.php">LOG IN</a>
                </div>
            </section>
        </header>
        <div class="login-form">
            <h1>Sign Up</h1>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
                <p>Email</p> 
            <input type="text" name="email" id="email" placeholder="Email"> <br>
              <label id="emailMsg" style="color: red; margin-left: 16%;"></label>
              <p>User Name</p> 
              <input type="text" name="username" id="username1" placeholder="User Name"> <br>
              <label id="usernameMsg" style="color: red; margin-left: 16%;"></label>
              <p>Password</p>
              <input type="password" id="password" name="password" placeholder="Password"> <br>
              <label id="passwordMsg" style="color: red; margin-left: 16%;"></label> <br>
              <p>Re-write Password</p>
              <input type="password" id="password2" name="reWritePassword" placeholder="Re-write Password"> <br>
              <label id="password2Msg" style="color: red; margin-left: 16%;"></label> <br>
              <p>Phone Number</p>
              <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number"> <br>
              <label id="phoneNumberMsg" style="color: red; margin-left: 16%;"></label> <br>
              
              <div class="loginRegister">
                <button type="submit" style="background-color: black; color: white;" name="registerBtn" id="signUpButton">Sign Up</button>
                <button type="submit"  onclick="window.location='http://localhost/ProjektiWebFinale/login.php'">Log In</button>
                </div>
            </form>
            
        </div>
        <script src="signUp.js"></script>
    </body>
</html>