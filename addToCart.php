<?php
session_start();
include_once 'databaseConnection.php';


if(!(isset($_SESSION['email']))){
    header("Location: login.php");
    exit();
}
else{
if(isset($_POST['addbtn'])){
    if($conn){
    $userID = $_POST['userID'];
    $cartID = $_POST['cartID'];
    $productID = $_POST['productID'];
 
$sql = "SELECT * FROM user_product_cart WHERE userID=? AND productID=?";
$statement = $conn->prepare($sql);
$statement->execute([$userID,$productID]);
$result= $statement->get_result();

if($result->num_rows>0) {
        $sql = "DELETE FROM user_product_cart WHERE userID=? AND productID=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$userID,$productID]);
}
else{
    $sql = "INSERT INTO user_product_cart (userID,productID,cartID) VALUES (?,?,?)";
    $statement = $conn->prepare($sql);
    $statement->execute([$userID,$productID,$cartID]);
}
        $previousPage = $_SERVER['HTTP_REFERER'];
        header("Location: $previousPage");
        exit();
    }
    else{
        echo "Problem ne lidhjen me databaze";
    }
}
}

?>