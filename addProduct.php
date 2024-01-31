<?php
include_once 'productRepository.php';
include_once 'databaseConnection.php';
include_once 'Product.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h3>Add Product</h3>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name"><br> <br>
        <input type="text" name="source" placeholder="Source"> <br> <br>
        <input type="text" name="price" placeholder="Price"> <br> <br>
        <input type="text" name="category" placeholder="Categorty"> <br> <br>
        <input type="text" name="section" placeholder="Section"> <br> <br>
        <input type="text" name="quantity" placeholder="Quantity"> <br> <br>
        <input type="text" name="cartId"  placeholder="CartId"> <br> <br>
        <input type="text" name="new"  placeholder="New"> <br> <br>
     
        <input type="submit" name="editBtnP" value="save"> <br> <br>
    </form>
</body>
</html>

<?php

if (isset($_POST['editBtnP'])) {
    $id=rand(1,9000);
    $name = $_POST["name"];
    $source = $_POST["source"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $section = $_POST["section"];
    $quantity = $_POST["quantity"];
    $cartId = $_POST["cartId"];
    $new = $_POST["new"]; 
 
    $product = new Product($id,$name,$source,$price,$category,$section,$quantity,$cartId,$new);
    $productRepository = new ProductRepository();
    $productRepository->insertProduct($product);
    header("Location: Dashboard.php");
}
