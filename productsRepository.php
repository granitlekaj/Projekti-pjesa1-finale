<?php
include_once 'databaseConnection.php';
include_once 'user.php';

   class ProductsRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){

        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $price = $user->getPrice();
        $image = $user->getImage();


        $sql = "INSERT INTO products (id, name, price, image) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$price,$image,]);

        echo "<script> alert('User has been inserted seccessfuly!'); </script>";

    }
    
    function getAllUsers(){
        $conn = $this->connection;
    
        $sql = "SELECT * FROM products";
    
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();
    
        return $users;
    }


    function getUserById($id){
        $conn = $this->connection;
    
        $sql = "SELECT * FROM products WHERE id='$id'";
    
        $statement = $conn->query($sql);
        $user = $statement->fetch();
    
        return $user;
    }


    function updateUser($id,$name,$price,$image,){
     $conn = $this->connection;

     $sql = "UPDATE products SET name=?, price=?, image=?  WHERE id=?";

     $statement = $conn->prepare($sql);

     $statement->execute([$name,$price,$image,$id]);

     echo "<script> alert('update was successful'); </script>";
    }


    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM products WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful');</script>";
    }
}




//$userRepo = new UserRepository;

//$userRepo->insertUser();

?>