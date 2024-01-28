<?php
session_start();

include_once '../databaseConnection.php';

if (isset($_POST['removebtn'])) {
    $userID = $_POST['userID'];
    $productID = $_POST['productID'];

    $sql = "DELETE FROM user_product_cart WHERE userID = $userID AND productID = $productID";
    if ($conn->query($sql) === TRUE) {
        echo "Product removed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

header("Location: Cart.php");
exit();
?>