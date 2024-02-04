<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilimet.css">
    <title>Contact Us</title>
    <style>
        @media (max-width: 1300px) {
         .maincontact{
        margin:auto;
        width: 60%;
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
            <a href="ContactUs.php" style="cursor: pointer; border-bottom: 3px solid burlywood;">Contact Us</a>
            <a href="Dashboard.php" class="<?php echo $hide?>">Dashboard</a>
            <a href="signUp.php"><img src="images/Front/user1.png" id="user"></a>
            <a href="logout.php">Log <?php if ($log == "") {
                echo "In";
            }else{
                echo "Out";
            }?></a>
            <a href="cart/Cart.php"><img src="images/Front/shoppingbag.jpg" id="bag"></a>
        </div>
    </header>

    <p style="color: rgb(78, 60, 60); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 17px; text-align: center; margin-bottom: 5px;">Mirë se vini në website-in tonë! Moon Store ofron transport falas në Kosovë dhe Shqipëri</p>


<main>    
<div class="maincontact">
   <div class="cardcontact">  
         <p style="font-size: 30px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color:rgb(82, 41, 14);"><b>Contact Us</b></p>   
   <form class="contact" onsubmit="return validateContact()">
   <input type="text" id="contact.name" placeholder="Name" required/>
        <input type="email" id="contact.email" placeholder="Email" required/>
        <input type="phone" placeholder="Phone Number" >
        <textarea name="comment" id="contact.comment" cols="30" rows="4" placeholder="COMMENT" required></textarea>
        <button type="submit">Send Message</button>

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