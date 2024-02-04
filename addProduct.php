<?php
include_once 'productRepository.php';
include_once 'databaseConnection.php';
include_once 'Product.php';
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="stilimet.css">
    <style>
        
        .forma{
        display: grid;
        gap: 16px;
        margin: 0 0 36;
        }
        .forma > input,
        .forma > button {
            width: 90%;
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
    margin-top: 15px;
  
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

<body>
    <div class="cardForma">
    <p style="font-size: 30px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color:rgb(82, 41, 14);">
    <b>Add Product</b>
    </p>
    
    <form action="" method="post" class="forma">
        <p><b>Name</b></p>
        <input type="text" name="name" placeholder="Name">
        <p><b>Source</b></p>
        <input type="text" name="source" placeholder="Source">
        <p><b>Price</b></p>
        <input type="text" name="price" placeholder="Price">
        <p><b>Category</b></p>
        <input type="text" name="category" placeholder="Categorty">
        <p><b>Section</b></p>
        <input type="text" name="section" placeholder="Section">
        <p><b>Quantity</b></p>
        <input type="text" name="quantity" placeholder="Quantity">
        <p><b>CartId</b></p>
        <input type="text" name="cartId"  placeholder="CartId">
        <p><b>New</b></p>
        <input type="text" name="new"  placeholder="New">
     
        <input type="submit" name="editBtnP" value="save" id="formaButtonP"> <br> <br>
    </form>
    </div>



<?php

if (isset($_POST['editBtnP'])) {
    $id;
    $name = $_POST["name"];
    $source = $_POST["source"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $section = $_POST["section"];
    $quantity = $_POST["quantity"];
    $cartId = $_POST["cartId"];
    $new = $_POST["new"]; 
    $editedByP;
    $product = new Product($id,$name,$source,$price,$category,$section,$quantity,$cartId,$new,$editedByP);
    $productRepository = new ProductRepository();
    $productRepository->insertProduct($product);
    header("Location: Dashboard.php");
    ob_end_flush();   
}

?>
        </main>
</body>
<?php include 'footer.php'; ?>
</html>