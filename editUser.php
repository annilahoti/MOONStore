
<?php session_start();
$editedBy = $_SESSION["name"];
$userId = $_GET['id'];
include_once 'userRepository.php';
include_once 'databaseConnection.php';
include_once 'User.php';
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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


    #formaButton {
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
#formaButton:hover{
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
$userRepository = new UserRepository();
$usersQuery = "SELECT * FROM user where id=$userId";
$usersResult = mysqli_query($conn, $usersQuery);

while($row = mysqli_fetch_assoc($usersResult)){
    $user = new User(
        $row['id'],
        $row['name'],
        $row['surname'],
        $row['email'],
        $row['password'],
        $row['roli'],
        $row['editedBy']
    );
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <div class="cardForma">
    <p style="font-size: 30px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color:rgb(82, 41, 14);"><b>Edit User</b></p>   
    <form action="" method="post" class="forma">
        <p>Id</p>
        <input type="text" name="id"  value="<?=intval($user->getId())?>" readonly> 
        <p>Name</p>
        <input type="text" name="name"  value="<?=$user->getName()?>">
        <p>Surname</p>
        <input type="text" name="surname"  value="<?=$user->getSurname()?>"> 
        <p>Email</p>
        <input type="text" name="email"  value="<?=$user->getEmail()?>">
        <p>Password</p>
        <input type="text" name="password"  value="<?=$user->getPassword()?>"> 
        <br> <br>
        <input type="submit" name="editBtn" value="save" id="formabutton"> <br> <br>
    </form>
    </div>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user->getId();
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
 

    $userRepository->updateUser($id,$name,$surname,$email,$password,$editedBy);
    header("location: Dashboard.php");
}


?>
        </main>
        </body>

        <?php include 'footer.php' ?>
</html>
      