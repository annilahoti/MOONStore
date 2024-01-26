<?php  session_start();
include_once "../databaseConnection.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackets</title>
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
   <a href="man.php"><h1>MAN SECTION</h1></a>
    <div class="opsionet">
    <a href="man.php"><b><i>New arrivals</i></b></a>
    <a href="Jackets.php" style="background-color: brown; color: white;">Jackets</a>
    <a href="Jeans.php">Jeans</a>
    <a href="T-shirts.php">T-shirts</a>
    <a href="Joggers.php">Joggers</a>
   

</div>
 </div>

 <main>
        <div class="products">


        <?php


$sql = "SELECT * FROM product WHERE category = 'Jackets' AND section = 'Man'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {?>


<div class="produkti">
                <div><img src="<?php echo ''.$row["source"].''?>" alt="<?php echo''.$row["name"].'' ?>" title="<?php if ($row["new"]==1) {
                    echo 'New Arrival:
'.$row["name"].'';
                }else{
                    echo ''.$row["name"].'';
                } ?>">
                    <h3><?php echo ''. $row["name"].''?></h3>
                    <p>Price: <?php echo ''.$row["price"].''?>€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <?php if ($row["quantity"]==0) {
                        echo '<h4 style="color:red">OUT OF STOCK</h4>';
                    }else{?>
                    <button onclick="cart(<?php echo ''.$row['cartId'].'' ?>)" id="<?php echo ''.$row["cartId"].'' ?>" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                    <?php }?>
                </div>
            </div>

<?php    }
} else {
    echo "Nuk ka produkte në bazën e të dhënave.";
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
 
</body>
</html>