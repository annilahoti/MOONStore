<?php  
session_start();
if(isset($_SESSION["id"])){
$userID=$_SESSION['id'];
}
include "../databaseConnection.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woman section</title>
    <link rel="stylesheet" href="../stilimet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <script src="../funksionet.js"></script>
</head>
<body>
<header>
        <div class="logo">
        <a href="../home.php"><img src="../images/Front/moon.jpg" alt="logo" id="logo"></a>
        </div>
        <?php 
        $hide="";
        $log="";
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
            <a href=""><img src="../images/Front/shoppingbag.jpg" id="bag"></a>
        </div>
    </header>


  
    <p style="color: rgb(78, 60, 60); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 17px; text-align: center; margin-bottom: 5px;">Mirë se vini në website-in tonë! Moon Store ofron transport falas në Kosovë dhe Shqipëri</p>


 <div class="woman">
   <a href="woman.php"><h1>WOMAN SECTION</h1></a>
    <div class="opsionet">
    <a href="woman.php" style="background-color: brown; color: white;"><b><i>New arrivals</i></b></a>
    <a href="Tops.php">Tops</a>
    <a href="Dresses.php">Dresses</a>
    <a href="Jeans&Trousers.php">Jeans/Trousers</a>
    <a href="Jackets&Coats.php">Jackets/Coats</a>
</div>
 </div>
 <main>
        <div class="products">
        <?php

$sql = "SELECT * FROM product WHERE new = true AND section = 'Woman'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {?>

<?php
    $cartID =$row['cartId']; 
    $productID = $row['id'];
?>
<div class="produkti">
                <div><img src="<?php echo ''.$row["source"].''?>" alt="<?php echo ''.$row["name"].''?>" title="<?php echo ''.$row["name"].''?>">
                    <h3><?php echo ''. $row["name"].''?></h3>
                    <p>Price: <?php echo ''.$row["price"].'€'?></p>
                </div>
                <div class="shop">
                    <form method="post" action="../addToCart.php">
                    <input type="hidden" name="userID" value="<?php if(isset($_SESSION["id"])){echo ''.$userID.''; } ?>">
                    <input type="hidden" name="productID" value="<?php echo ''.$productID.''?> ">
                    <input type="hidden" name="cartID" value="<?php echo ''.$cartID.''?> ">

                    <?php
       if(isset($_SESSION["id"])){             
$sql = "SELECT * FROM user_product_cart WHERE userID=? AND productID=?";
$statement = $conn->prepare($sql);
$statement->execute([$userID,$productID]);
$result2= $statement->get_result();
       }
?>
                    <button type="submit" name="addbtn"  id="<?php echo ''.$row["cartId"].'' ?>" class="add-to-cart">
                    <?php if($row["quantity"]==0){echo '<h4 style="color:red">OUT OF STOCK</h4>';}else if(isset($_SESSION["id"])){ ?><img src="../images/Front/cart.png" alt="add-to-cart"><?php } else if(isset($_SESSION["id"])){if($result2->num_rows>0){?><img src="../images/Front/fullcart.png" alt="add-to-cart"><?php }}else{?><img src="../images/Front/cart.png" alt="add-to-cart"><?php } ?></button>
                    </form>
                </div>
            </div>


<?php    }
} else {
    echo "Nuk ka produkte në bazën e të dhënave.";
}

$conn->close();
?>

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
    
</body>
</html>