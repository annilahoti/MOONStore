<?php
session_start();
include_once 'databaseConnection.php';
if(!(isset($_SESSION['email']))){
    header("Location: login.php");
    exit();
}
else{
    if(isset($_POST['checkoutbtn'])){
        if($conn){
            $noProducts = $_POST['nrP'];
            $totalP = $_POST['price'];
            $address = $_POST['address'];
            $phoneNumber = $_POST['phoneNumber'];
            $userID = $_POST['userId'];
            
            $sql = "INSERT INTO porosia (numriProdukteve,totali,adresa,numriTelefonit,userID) VALUES (?,?,?,?,?)";
            $statement = $conn->prepare($sql);
            $statement->execute([$noProducts,$totalP,$address,$phoneNumber,$userID]);
       
            $sql = "DELETE FROM user_product_cart WHERE userID=?";
            $statement = $conn->prepare($sql);
            $statement->execute([$userID]);
            
            echo "<script>alert('Porosia eshte realizuar me sukses!');</script>";

            header("Location: cart/Cart.php");
        }
    }
}





?>