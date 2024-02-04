<?php
session_start();
$userID = $_SESSION["id"];
include_once '../databaseConnection.php';
$totalPrice = 0;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../stilimet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <style>

        .checkbox:hover{
                box-shadow: 0 0 0px 0px burlywood;
                cursor: auto;
        }
        .checkbox{
    border:solid;
    color: rgb(67, 53, 53) ;
    text-align: center;
    font-size: 50px;
    width: 90%;
    font-weight: bold;
    padding: 20px;
    margin:auto;
    margin-bottom: 20px;
}
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
         border: 2px solid rgb(82, 41, 14);
         font-family: inherit;
         font-size: 16px;
         padding: 0 24px;
         color: #11274c;
         margin-top: 3px;
        }
       .forma > input::placeholder{
            color: rgb(82, 41, 14);
        }
        .forma > p{
            font-size: 20px; 
            font-weight: bold;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color:rgb(82, 41, 14);
        }


    #check {
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
#check:hover{
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

    text-align: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 40px;
    margin-bottom: 40px;
}

.products2{
    margin: 10px ;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    padding-left: 20px;
    padding-right: 20px;
   background-color: antiquewhite;


}
.products2 img{
   
   margin: 20px;
    width: 200px;
    height: 300px;
}
.products2 div{
    background-color: white;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 0px;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
.produkti2 {
    border: solid;
    background-color: white;
}
.produkti2>h3{
    margin-top: 5px;
}

#masa{
    margin:auto;
}
#backbutton{
    width: 50px; 
    height:50px; 
    margin-left: 15px; 
    background-color: burlywood; 
    border-radius: 40px; 
    color: rgb(67, 53, 53); 
    border: solid  rgb(67, 53, 53) ; 
    text-align: center; 
    padding-right: 2px;
}
#backbutton:hover{
    cursor: pointer;
}
@media (max-width: 1300px) {
    .products2{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    }
    .produkti2{
        margin: auto;
        
    }
    .checkbox{
        width: auto;
    }
}


    </style>
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
    <div>
<button id="backbutton" onclick="goBack()"><b>back</b></button>
        </div>

<main>


<?php

$sql = "SELECT * FROM user_product_cart cpr inner join product p on cpr.productID=p.id where cpr.userID=$userID";
$statement = $conn->query($sql);
$products = $statement->fetch_all(MYSQLI_ASSOC);
?>

<div class="products2">
<?php

$count=sizeof( $products );

if (!empty($products)) {
  
    foreach ($products as $row) {
        $productID = $row["id"];
        $cartID = $row["cartId"];
        ?>
        <div class="produkti2">
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
        $totalPrice += $row['price'];
        
    }
    ?>
    </div>
    
    <fieldset class="checkbox">
        <legend>Checkout</legend>
    <div class="checkoutbox">
        <div class="cardForma">
    <form action="../porosia.php" class="forma" method="post" onsubmit="return validatePhone()">
        <input type="text" name="address" placeholder="Address">
        <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" required>
        <p>Total Products: <?php echo $count; ?></p>
        <p>Total Price: <?php echo $totalPrice;?>€</p>
        <input type="hidden" name="nrP" value="<?php echo $count?>">
        <input type="hidden" name="price" value="<?php echo $totalPrice?>">
        <input type="hidden" name="userId" value="<?php  if(isset($_SESSION["id"])){echo ''.$userID.''; } ?>">
        <button type="submit" name="checkoutbtn" id="check">Checkout</button>
        
    </form>
    </div>
</div>
    </fieldset>
<?php
} else {
    echo '<h1 style="color:red; margin: auto;">Shporta juaj eshte e zbrazet!</h1>';
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
                            <li><a href="../signUp.php">Register</a></li>
                            <li><a href="#">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
    </footer>


    <script src="../funksionet.js"></script>

    <script>
    function validatePhone(){
        var phone =document.getElementById('phoneNumber').value;

        var phoneRegex = /^04\d{7}$/;

        if (!phoneRegex.test(phone)) {
            alert('Please enter a valid phone');
            return false;
        }
        return true;
    }

    </script>
</body>
</html>