<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <table border ="2">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
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
                 <td>$user[Name]</td>
                 <td>$user[Surname]</td>
                 <td>$user[Email]</td>
                 <td>$user[Username]</td>
                 <td>$user[Password]</td>
                 <td><a href='edit.php?id=$user[Id]'>Edit</a></td>
                 <td><a href='delete.php?id=$user[Id]'>Delete</a></td>

            </tr>
            ";
        }

        
        
        ?>
    </table>
</body>
</html>