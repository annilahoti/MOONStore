<?php session_start();
include 'databaseConnection.php'; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="stilimet.css">
    <style>
        html, body{
            width: 100%;
        }
   
    @media (max-width: 1300px) {
        .table{
            margin:auto;
        }
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
        <br><br>
    <table border="3" style="width: 95%; margin: auto; border: solid rgb(87, 51, 3); " class="table">
        <tr>
            <th colspan="8" style="color: red;">USERS TABLE</th>
        </tr>

        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Edited By</th>
        </tr>
        
        <?php
            include_once 'userRepository.php';

            $userRepository = new UserRepository();

            $users = $userRepository->getAllUsers();

            foreach($users as $user){
                echo
                "
                <tr>
                    <td>$user[id]</td>
                    <td>$user[name]</td>
                    <td>$user[surname]</td>
                    <td>$user[email]</td>
                    <td>$user[password]</td>
                    <td><a href='editUser.php?id=$user[id]'>Edit</a></td>
                    <td><a href='deleteUser.php?id=$user[id]'>Delete</a></td>
                    <td>$user[editedBy]</td>
                </tr>    
                ";
            }
    
        ?>
    </table>
    <br><br>
    <br>
            <button style="width: 100px; height:50px; background-color: burlywood; border-radius: 40px; border: solid  rgb(67, 53, 53) ; text-align: center; padding-right: 2px; align-self: center;"><a href="addProduct.php" style="text-decoration: none; color: rgb(67, 53, 53);">Add New Product</a></button>
            <br>


    <table border="3" style="width: 95%; margin: auto; border: solid rgb(87, 51, 3); " class="table">

    <tr>
            <th colspan="13" style="color: red;">PRODUCTS TABLE</th>
        </tr>

        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SOURCE</th>
            <th>PRICE</th>
            <th>CATEGORY</th>
            <th>SECTION</th>
            <th>QUANTITY</th>
            <th>CARTID</th>
            <th>NEW</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Edited By</th>
        
        </tr>
        
        <?php
            include_once 'productRepository.php';



            $productRepository = new ProductRepository();

            $products = $productRepository->getAllProducts();

            foreach($products as $product){
                echo
                "
                <tr>
                    <td>$product[id]</td>
                    <td>$product[name]</td>
                    <td>$product[source]</td>
                    <td>$product[price]</td>
                    <td>$product[category]</td>
                    <td>$product[section]</td>
                    <td>$product[quantity]</td>
                    <td>$product[cartId]</td>
                    <td>$product[new]</td>
                    <td><a href='editProduct.php?id=$product[id]'>Edit</a></td>
                    <td><a href='deleteProduct.php?id=$product[id]'>Delete</a></td>
                    <td>$product[editedByP]</td>
                </tr>    
               ";
            }
           
        ?>
    </table>
    <br><br>


    
    <table border="3" style="width: 95%; margin: auto; border: solid rgb(87, 51, 3); " class="table">

    <tr>
            <th colspan="13" style="color: red;">ORDERS TABLE</th>
        </tr>

        <tr>
            <th>ID</th>
            <th>Products</th>
            <th>Total Price</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>User ID</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Edited By</th>        
        </tr>
        
        <?php
          if($conn){
    
          $sql = "SELECT * FROM porosia";
  
          $statement = $conn->query($sql);
          $orders = $statement->fetch_all(MYSQLI_ASSOC);
          }
            foreach($orders as $order){
                echo
                "
                <tr>
                    <td>$order[id]</td>
                    <td>$order[numriProdukteve]</td>
                    <td>$order[totali]</td>
                    <td>$order[adresa]</td>
                    <td>$order[numriTelefonit]</td>
                    <td>$order[userID]</td>
                    <td><a href='editOrder.php?id=$order[id]'>Edit</a></td>
                    <td><a href='deleteOrder.php?id=$order[id]'>Delete</a></td>
                    <td>$order[editedByPo]</td>
                    </tr>    
                    ";
                 }
             ?>
         </table>
         <br><br>
     
        </main>       
</body>
<?php include 'footer.php'; ?>
</html>

