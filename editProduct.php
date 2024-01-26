<?php

$productId = $_GET['id'];
include_once 'productRepository.php';
include_once 'databaseConnection.php';
include_once 'Product.php';

$productRepository = new ProductRepository();
$productQuery = "SELECT * FROM product WHERE id=$productId";
$productResult = mysqli_query($conn, $productQuery);

while ($row = mysqli_fetch_assoc($productResult)) {
    $product = new Product(
        $row['id'],
        $row['name'],
        $row['source'],
        $row['price'],
        $row['category'],
        $row['section'],
        $row['quantity'],
        $row['cartId'],
        $row['new']
    );
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit Product</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=intval($product->getId())?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?=$product->getName()?>"> <br> <br>
        <input type="text" name="source"  value="<?=$product->getSource()?>"> <br> <br>
        <input type="text" name="price"  value="<?=$product->getPrice()?>"> <br> <br>
        <input type="text" name="category"  value="<?=$product->getCategory()?>"> <br> <br>
        <input type="text" name="section"  value="<?=$product->getSection()?>"> <br> <br>
        <input type="text" name="quantity"  value="<?=$product->getQuantity()?>"> <br> <br>
        <input type="text" name="cartId"  value="<?=$product->getCartId()?>"> <br> <br>
        <input type="text" name="new"  value="<?=$product->getNew()?>"> <br> <br>

        <input type="submit" name="editBtnP" value="save"> <br> <br>
    </form>
</body>
</html>

<?php

if (isset($_POST['editBtnP'])) {
    $id = $product->getId();
    $name = $_POST["name"];
    $source = $_POST["source"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $section = $_POST["section"];
    $quantity = $_POST["quantity"];
    $cartId = $_POST["cartId"];
    $new = $_POST["new"];

    $productRepository->updateProduct($id,$name,$source,$price,$category,$section,$quantity,$cartId,$new);
    header("Location: Dashboard.php");
}


?>