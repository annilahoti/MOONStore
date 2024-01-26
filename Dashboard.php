<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="stilimet.css">
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
            <a href=""><img src="images/Front/shoppingbag.jpg" id="bag"></a>
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
    <table border="3" style="width: 50%; margin: auto; border: solid rgb(87, 51, 3); " >
        <tr>
            <th colspan="7" style="color: red;">USER TABLE</th>
        </tr>

        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>Edit</th>
            <th>Delete</th>
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
                    
                </tr>    
                ";
            }
    
        ?>
    </table>
    <br><br>
    <br>

    <table border="3" style="width: 50%; margin: auto; border: solid rgb(87, 51, 3); " >

    <tr>
            <th colspan="11" style="color: red;">PRODUCT TABLE</th>
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
                    
                </tr>    
                ";
            }
    
        ?>
    </table>
        </main>       
</body>
<?php include 'footer.php'; ?>
</html>

