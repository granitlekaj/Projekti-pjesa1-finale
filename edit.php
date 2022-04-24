<?php 
include_once '../repository/userRepository.php';

$userId = $_GET['id'];

$userRepository = new UserRepository();

$user = $userRepository->getUserById($userId);

?>


<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<form action =""  method="post">
            
            <input type="text"  name="id"  value="<?= $user['id'] ?>" readonly> <br></br>
            <input type="text"  name="email"  value="<?= $user['email'] ?>"> <br></br>
            <input type="text"  name="username"  value="<?= $user['username'] ?>"> <br></br>
            <input type="text"  name="password"  value="<?= $user['password'] ?>"> <br></br>
            <input type="text"  name="rewritepassword"  value="<?= $user['rewritepassword'] ?>"> <br></br>
            <input type="text"  name="phonenumber"  value="<?= $user['phonenumber'] ?>"> <br></br>
            <input type="text"  name="role"  value="<?= $user['role'] ?>"> <br></br>

            <input type="submit"  name="saveBtn"  value="save"> <br></br>

        </form>
</body>
</html>


<?php 
if(isset($_POST['saveBtn'])){
   $id = $user['id'];
   $email =$_POST['email'];
   $username =$_POST['username'];
   $password =$_POST['password'];
   $rewritepassword =$_POST['rewritepassword'];
   $phonenumber =$_POST['phonenumber'];
   $role=$_POST['role'];

   $userRepository->updateUser($id,$email,$username,$password,$rewritepassword,$phonenumber,$role);
   header("location:databaseUsers.php");
}
