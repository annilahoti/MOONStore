<?php
session_start();
include_once '../databaseConnection.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../stilimet.css">
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
<?php
$userID = $_SESSION['id'];
$sql = "SELECT * FROM user_product_cart cpr inner join products p on cpr.productID=p.id where cpr.userID=$userID";
$statement = $conn->query($sql);
$products = $statement->fetch_all(MYSQLI_ASSOC);
?>

<div class="products">
<?php
    $count=0;
    $shuma=0;
// Kontrollo nëse ka produkte në shportën e përdoruesit
if (!empty($products)) {
    // Për çdo produkt në listën e produkteve
    foreach ($products as $row) {
        $count++;
        $shuma += $row['price'];
        ?>
        <div class="produkti">
            <div>
                <img src="<?php echo $row["source"]; ?>" alt="<?php echo $row["name"]; ?>" title="<?php echo $row["name"]; ?>">
                <h3><?php echo $row["name"]; ?></h3>
                <p>Price: <?php echo $row["price"]; ?>€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                    </button>
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
</body>
</html>