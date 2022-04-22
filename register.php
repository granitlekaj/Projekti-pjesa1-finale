<?php
  include_once '../controller/registerController.php';

?>


<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action ="<?php echo $_SERVER['PHP_SELF']?>"  method="post">
            <input type="text"  name="name"  placeholder="name..."> <br></br>
            <input type="text"  name="surname"  placeholder="surname..."> <br></br>
            <input type="text"  name="email"  placeholder="email..."> <br></br>
            <input type="text"  name="username"  placeholder="username..."> <br></br>
            <input type="text"  name="password"  placeholder="password..."> <br></br>

            <input type="submit"  name="registerBtn"  value="Register"> <br></br>

        </form>

        <?php include_once '../controller/registerController.php';?>
    </body>
</html>