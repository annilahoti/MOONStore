<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilimet.css">
    <title>Contact Us</title>
</head>

<body>
<header>
        <div class="logo">
            <img src="images/Front/moon.jpg">
        </div>
        <?php 
        $hide="";
        if(!isset($_SESSION['email'])){
        header("location:login.php");
        }
      else{
        if($_SESSION['role'] == "admin")
          $hide = "";
        else
          $hide = "hide";
      }
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
<div class="maincontact">
   <div class="cardcontact">  
         <p style="font-size: 30px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color:rgb(82, 41, 14);"><b>Contact Us</b></p>   
   <form class="contact" onsubmit="return validateContact()">
   <input type="text" id="contact.name" placeholder="Name" required/>
        <input type="email" id="contact.email" placeholder="Email" required/>
        <input type="phone" placeholder="Phone Number" >
        <textarea name="comment" id="contact.comment" cols="30" rows="4" placeholder="KOMENT" required></textarea>
        <button type="submit">Dergo Mesazh</button>

   </form>
    
    </div>  
</div>
</main>
    <?php include 'footer.php'; ?>
      <script>
        function validateContact(){
            var email = document.getElementById('contact.email').value;
            var name = document.getElementById('contact.name').value;
            var comment = document.getElementById('contact.comment').value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,4}$/;
            if(!emailRegex.test(email)){
                alert('Please enter a valid email address.');
                return false;
            }
            if(name.length<=0){
                alert('Please enter your name!');
                return false;
            }
            if(comment.length<2){
                alert('Please enter the comment you want to send!');
                return false;
            }
        }

      </script>
</body>
</html>