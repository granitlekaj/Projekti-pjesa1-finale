
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="http://localhost/ProjektiWebFinale/view/databaseUsers.php"> <h3>Users</h3></a>
    <a href=""> <h3>Products</h3></a>
</body>
</html>





<?php /*
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <table border ="2">
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>REWRITEPASSWORD</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>

        <?php 
        include_once  '../repository/userRepository.php';

        $userRepository = new UserRepository();

        $users = $userRepository->getAllUsers();

        foreach($users as $user){
            echo
            "
            <tr>
                 <td>$user[Id]</td>
                 <td>$user[Email]</td>
                 <td>$user[Username]</td>
                 <td>$user[Password]</td>
                 <td>$user[ReWritePassword]</td>
                 <td><a href='edit.php?id=$user[Id]'>Edit</a></td>
                 <td><a href='delete.php?id=$user[Id]'>Delete</a></td>

            </tr>
            ";
        }

        
        
        ?>
    </table>
</body>
</html>
*/ ?>
