<?php
session_start();
$userID = $_SESSION['id'];
include_once '../databaseConnection.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../stilimet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
</head>
<body>
  
<header>
        <div class="logo">
        <a href="../home.php"><img src="../images/Front/moon.jpg" alt="logo" id="logo"></a>
        </div>
        <?php 
        $hide="";
        $log="";
        
        if(!(isset($_SESSION['email']))){
    header("Location: ../login.php");
    exit();
}
        if(isset($_SESSION['email'])){
            $log="logout";
        if($_SESSION['role'] == "admin"){
          $hide = "";
        }
        else{
          $hide = "hide";
        }
      }
      else{
        $log="";
        $hide = "hide";
      }
        ?>

        <div class="nav">
            <a href="../home.php">Home</a>
            <a href="../AboutUs.php">About Us</a>
            <a href="../ContactUs.php">Contact Us</a>
            <a href="../Dashboard.php" class="<?php echo $hide?>">Dashboard</a>
            <a href="../signUp.php"><img src="../images/Front/user1.png" id="user"></a>
            <a href="../logout.php">Log <?php if ($log == "") {
                echo "In";
            }else{
                echo "Out";
            }?></a>
            <a href="Cart.php" style="cursor: pointer; border-bottom: 3px solid burlywood;"><img src="../images/Front/shoppingbag.jpg" id="bag"></a>
        </div>
    </header>


    <p style="color: rgb(78, 60, 60); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 17px; text-align: center; margin-bottom: 5px;">Mirë se vini në website-in tonë! Moon Store ofron transport falas në Kosovë dhe Shqipëri</p>

    
<main>
<button onclick="goBack()" style="width: 50px; height:50px; margin-left: 15px; background-color: burlywood; border-radius: 40px; color: rgb(67, 53, 53); border: solid  rgb(67, 53, 53) ; text-align: center; padding-right: 2px;"><b>back</b></button>


<?php

$sql = "SELECT * FROM user_product_cart cpr inner join product p on cpr.productID=p.id where cpr.userID=$userID";
$statement = $conn->query($sql);
$products = $statement->fetch_all(MYSQLI_ASSOC);
?>

<div class="products">
<?php

$count=sizeof( $products );
//echo $count;
if (!empty($products)) {
  
    foreach ($products as $row) {
        $productID = $row["id"];
        $cartID = $row['cartId'];
        ?>
        <div class="produkti">
            <div>
                <img src="<?php echo $row["source"]; ?>" alt="<?php echo $row["name"]; ?>" title="<?php echo $row["name"]; ?>">
                <h3><?php echo $row["name"]; ?></h3>
                <p>Price: <?php echo $row["price"]; ?>€</p>
            </div>
            <div class="shop">
            <form method="post" action="removeFromCart.php" style="display: flex; flex-direction: coloumn;">
            <select id="masa" style="cursor: pointer;">
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
                    <input type="hidden" name="userID" value="<?php if(isset($_SESSION["id"])){echo ''.$userID.''; } ?>">
                    <input type="hidden" name="productID" value="<?php echo ''.$productID.''?> ">
                    <input type="hidden" name="cartID" value="<?php echo ''.$cartID.''?> ">
                    <button type="submit" name="removebtn"><img src="trashcan.jpg" style="width: 40px; height: 50px; cursor: pointer;"></button>
            </form>
        </div>
        </div>
        
        <?php
        
    }
} else {
    echo '<h1 style="color:red; margin: auto;">Shporta juaj eshte e zbrazet!</h1>';
}

$conn->close();
?>
        </div>
</main>
<footer>
        <div class="footeri">
            <div class="logo2">
                <a href="../home.php"><img src="../images/Front/moon.jpg" alt="logo" id="logo"></a>
            </div>
            
            <div class="socials">
                <a href="#"><i class="fa-brands fa-facebook" style="color: white;"></i></a>
                <a href="#"><i class="fa-brands fa-instagram" style="color: white;"></i></a>
            </div>
            <div class="about-us">
                <div class="reth-nesh">
                    <h3>About us</h3>
                    <div>
                        <ul class="ul1">
                            <li><a href="../AboutUs.php">About us</a></li>
                            <li><a href="../Policies.php">Policies</a></li>
                        </ul>
                    </div>
                </div>

                <div>
                    <h3>My Account</h3>
                    <div>
                        <ul class="ul1">
                            <li><a href="">Register</a></li>
                            <li><a href="#">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
    </footer>


    <script src="../funksionet.js"></script>
</body>
</html>