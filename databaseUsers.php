<?php
    include_once '../repository/userRepository.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        .duA{
            display: flex;
            flex-direction: row-reverse;
            margin-right: 5%;
        }
        .tabela{
            margin-left: 20%;
        }
    </style>
</head>
<body>

       <a class="duA"href="http://localhost/ProjektiWebFinale/view/dashboard.php"> <h3>Dashboard</h3> </a>



    <table border ="1">
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>REWRITEPASSWORD</th>
            <th>PHONENUMBER</th>
            <th>ROLE</th>
            
        </tr>

        <?php 
   

        $userRepository = new UserRepository();

        $users = $userRepository->getAllUsers();

        foreach($users as $user){
            echo
            "
            <tr> 
            <td>$user[id]</td>
            <td>$user[email]</td>
            <td>$user[username]</td>
            <td>$user[password]</td>
            <td>$user[rewritepassword]</td>
            <td>$user[phonenumber]</td>
            <td>$user[role]</td>
            <td><a href='edit.php?id=$user[id]'>EDIT</a></td>
            <td><a href='delete.php?id=$user[id]'>DELETE</a></td>
            </tr>
            ";
        }

        
        
        ?>
    </table>
</body>
</html>