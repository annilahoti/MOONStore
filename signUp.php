<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="stilimet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
 

</head>
<body>
<header>
        <div class="logo">
            <img src="images/Front/moon.jpg">
        </div>
        <?php 
        
      $hide="";
      if($_SESSION['role'] == "admin")
        $hide = "";
      else
        $hide = "hide";
        ?>

        <div class="nav">
            <a href="home.php">Home</a>
            <a href="AboutUs.php">About Us</a>
            <a href="ContactUs.php">Contact Us</a>
            <a href="Dashboard.php" class="<?php echo $hide?>">Dashboard</a>
            <a href="signUp.php"><img src="images/Front/user1.png" id="user"></a>
            <a href="logout.php">Log Out</a>
            <a href=""><img src="images/Front/favorites.jpg" id="fav"></a>
            <a href=""><img src="images/Front/shoppingbag.jpg" id="bag"></a>
        </div>
    </header>



    <main>
        <div class="maini">
        <div class="card">
            <i class="fa-solid fa-user" style="color: #ffffff; width: 100px; height: 100px;"></i>
            <h1>Create Account</h1>
            <form class="form" onsubmit="return validateForm()">
                <input type="text" id="name" placeholder="Name" required/>
                <input type="text" id="surname" placeholder="Surname" required/>
                <input type="email" id="email" placeholder="Email" required/>
                <input type="password" id="password" placeholder="Password" required/>
                <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
                <button type="submit" id="signup">SIGN UP</button>
            </form>
            <footer>Existing users, sign in <a href="logIn.php">here</a></footer>
        </div>
    </div>
    </main>

    <?php include 'footer.php'; ?>




    
    <script>
        function validateForm(){
            var name = document.getElementById('name').value;
            var surname = document.getElementById('surname').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;
            
            var nameRegex = /^[a-zA-Z\s]+$/;

            if(!nameRegex.test(name)){
                alert('Please enter a valid name.');
                return false;
            }
            var surnameRegex =  /^[a-zA-Z\s]+$/;

            if(!surnameRegex.test(surname)){
                alert('Please enter a valid surname.');
                return false;
            }


            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,4}$/;
            if(!emailRegex.test(email)){
                alert('Please enter a valid email address.');
                return false;
            }

            if(password.length < 6){
                alert('Password must be at least 6 charachter.');
                return false;
            }

            if(password !== confirmPassword){
                alert('Passwords do not match.');
                return false;
            }
            return true;
        
        }

    </script>
</body>
</html>