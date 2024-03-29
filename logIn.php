<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link rel="stylesheet" href="stilimet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
</head>
<body>

<header>
        <div class="logo">
        <a href="home.php"><img src="images/Front/moon.jpg" alt="logo" id="logo"></a>
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
            <a href="home.php">Home</a>
            <a href="AboutUs.php">About Us</a>
            <a href="ContactUs.php">Contact Us</a>
            <a href="Dashboard.php" class="<?php echo $hide?>">Dashboard</a>
            <a href="signUp.php"><img src="images/Front/user1.png" id="user"></a>
            <a href="logout.php" style="cursor: pointer; border-bottom: 3px solid burlywood;">Log <?php if ($log == "") {
                echo "In";
            }else{
                echo "Out";
            }?></a>
            <a href="cart/Cart.php"><img src="images/Front/shoppingbag.jpg" id="bag"></a>
        </div>
    </header>

    <p style="color: rgb(78, 60, 60); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 17px; text-align: center; margin-bottom: 5px;">Mirë se vini në website-in tonë! Moon Store ofron transport falas në Kosovë dhe Shqipëri</p>


    <main>
        <div class="maini">
        <div class="card">
            <i class="fa-solid fa-user" style="color: #ffffff; width: 100px; height: 100px;"></i>
            <h1>Welcome Back</h1>
            <p>Enter your email address and password to log in.</p>
            <form class="form" onsubmit="return validateForm1()" method="POST" action="loginController.php">
                <input type="email" id="login.email" name="email" placeholder="Email" required/>
                <input type="password" id="login.password" name="password" placeholder="Password" required/>
                <button type="submit" id="login" name="loginbtn" value="Login">LOG IN</button>
            </form>
            <footer>If you dont have an account, sign up <a href="signUp.php">here</a></footer>
        </div>
    </div>
    </main>

    

    <?php include 'footer.php'; ?>

    <script>

        function validateForm1(){
            var email = document.getElementById('login.email').value;
            var password = document.getElementById('login.password').value;

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,4}$/;
            if(!emailRegex.test(email)){
                alert('Please enter a valid email address.');
                return false;
            }

            if(password.length < 6){
                alert('Password must be at least 6 characters.');
                return false;
            }
        }
    </script>
    
</body>
</html>