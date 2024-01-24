<?php
include_once 'databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection();
        $this->connection = $conn->startConnection();
    }

    function insertUsers($user){

        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $roli = $user->getRole();

        $sql = "INSERT INTO user (id,name,surname,email,password,roli) VALUES (?,?,?,?,?,?)";

        $conn->select_db("moon");
        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$surname,$email,$password,$roli]);
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetch_all();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$surname,$email,$password){
        $conn = $this->connection;

        $sql = "UPDATE user SET name=?, surname=?, email=?, password=? WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$name,$surname,$email,$password]);

        echo "<script>alert('Update was Successful);</script>";
    }

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        echo "<script>alert('User has been deleted')</script>";
    }
}


?>