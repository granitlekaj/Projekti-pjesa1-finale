<?php  
   include_once 'controller/registerController.php'; 
        
?>

<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <header>
            <section>
                <div class="logo">
                    <a>Movies</a>
                </div>
                <div class="nav">
                   <a href="http://localhost/ProjektiWebFinale/">HOME</a>
                   <a href="http://localhost/ProjektiWebFinale/movies.php">MOVIES</a>
                   <a href="http://localhost/ProjektiWebFinale/aboutUs.php">ABOUT US</a>
                   <a href="http://localhost/ProjektiWebFinale/news.php">NEWS</a>
                   <a href="">LOG IN</a>
                </div>
            </section>
        </header>
        <div class="login-form">
            <h1>Log In</h1>
            <form >
              <p>User Name</p> 
              <input type="text" name="username" id="username" placeholder="User Name"> <br>
              <label id="usernameMsg" style="color: red; margin-left: 16%;"></label>
              <p>Password</p>
              <input type="password" id="password" name="password" placeholder="Password"> <br>
              <label id="passwordMsg" style="color: red; margin-left: 16%;"></label> <br>
              
            </form>
            <div class="loginRegister">
                <button type="submit" style="background-color: black; color: white;" id="logInBtn">Log In</button> 
                <button type="submit"  onclick="window.location='http://localhost/ProjektiWebFinale/signup.php'">Sign Up</button>
                </div>
        </div>
        <script src="loginJs.js"></script>
    </body>
</html>