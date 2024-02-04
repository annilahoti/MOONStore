<?php session_start();
ob_start();
$editedByP = $_SESSION['name'];
$productId = $_GET['id'];
include_once 'productRepository.php';
include_once 'databaseConnection.php';
include_once 'Product.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="stilimet.css">
    <style>
        .forma{
        display: grid;
        gap: 16px;
        margin: 0 0 36;
        }
        .forma > input,
        .forma > button {
            width: 100%;
            height: 56px;
            border-radius: 28px ;
        }
        .forma > input {
         border: 2px solid #aaa9a9;
         font-family: inherit;
         font-size: 16px;
         padding: 0 24px;
         color: #11274c;
         margin-top: -14px;
        }
       .forma > input::placeholder{
            color: #aaa9a9;
        }
        .forma > p{
            style="font-size: 20px; 
            font-weight: bold;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color:rgb(82, 41, 14);"
        }


    #formaButtonP {
    cursor: pointer;
    width: 100%;
    height: 56px;
    padding: 0 16px;
    background:rgb(82, 41, 14);
    color: #f9f9f9;
    border: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 1rem;
    font-weight: 600;
    text-align: center;
    letter-spacing: 2px;
  
}
#formaButtonP:hover{
    background-color: #f9f9f9;
    color: rgb(82, 41, 14);
    border: solid rgb(82, 41, 14);
}

.cardForma{
    display: flexbox;
    overflow: hidden;
    justify-content: center;
    width: 40%;
    padding: 70px 30px 54px;
    border-radius: 1.25rem;
    background: #fff;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 40px;
    margin-bottom: 40px;
    border: solid rgb(82, 41, 14);
     box-shadow: 0 0 10px rgb(87, 51, 3);
}
    </style>
</head>
<body>

<header>
        <div class="logo">
        <a href="home.php"><img src="images/Front/moon.jpg" alt="logo" id="logo"></a>
        </div>
        <?php 
        $hide="";
        $log="";
        if(!isset($_SESSION['email'])){
            $log="";
      }
      else{
        $log="logout";
       
      }
        ?>

<div class="nav">
            <a href="home.php">Home</a>
            <a href="AboutUs.php">About Us</a>
            <a href="ContactUs.php">Contact Us</a>
            <a href="Dashboard.php" style="cursor: pointer; border-bottom: 3px solid burlywood;">Dashboard</a>
            <a href="signUp.php"><img src="images/Front/user1.png" id="user"></a>
            <a href="logout.php">Log <?php if ($log == "") {
                echo "In";
            }else{
                echo "Out";
            }?></a>
            <a href="cart/Cart.php"><img src="images/Front/shoppingbag.jpg" id="bag"></a>
        </div>
    </header>

    <div style="background-color: burlywood; text-align: center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin-top: 10px;
    padding-top: 10px;
    padding-bottom: 10px;">
        <a href="Dashboard.php" style="text-decoration: none;
    color: black;"><h1>Dashboard</h1></a>
    </div>






        <main>

<?php
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
        $row['new'],
        $row['editedByP']
    );
}
?>


    <div class="cardForma">
    <p style="font-size: 30px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color:rgb(82, 41, 14);"><b>Edit Product</b></p> 

    <form action="" method="post" class="forma">
        <p><b>Id</b></p>
        <input type="text" name="id"  value="<?=intval($product->getId())?>" readonly>
        <p><b>Name</b></p>
        <input type="text" name="name"  value="<?=$product->getName()?>">
        <p><b>Source</b></p>
        <input type="text" name="source"  value="<?=$product->getSource()?>">
        <p><b>Price</b></p>
        <input type="text" name="price"  value="<?=$product->getPrice()?>">
        <p><b>Category</b></p>
        <input type="text" name="category"  value="<?=$product->getCategory()?>">
        <p><b>Section</b></p>
        <input type="text" name="section"  value="<?=$product->getSection()?>">
        <p><b>Quantity</b></p>
        <input type="text" name="quantity"  value="<?=$product->getQuantity()?>">
        <p><b>CartId</b></p>
        <input type="text" name="cartId"  value="<?=$product->getCartId()?>">
        <p><b>New</b></p>
        <input type="text" name="new"  value="<?=$product->getNew()?>">
         <br> <br>
        <input type="submit" name="editBtnP" value="save" id="formaButtonP"> <br> <br>
    </form>
    </div>



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

    $productRepository->updateProduct($id,$name,$source,$price,$category,$section,$quantity,$cartId,$new,$editedByP);
    header("location: Dashboard.php");
    ob_end_flush();   
}
?>

        </main>
        </body>

        <?php include 'footer.php' ?>
</html>