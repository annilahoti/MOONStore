<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilimet.css">

    <title>Front page</title>
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
       
        <div class="search">
            <div>
            <input type="text" placeholder="Search" id="search">
            <button class="butoni_bg"><img src="images/Front/search.png" alt="butoni_bg"></button>
            </div>
        </div>

        <div class="WomanMan">
            <a href="woman/woman.php" style="text-decoration: none;"> <fieldset>
                <legend>WOMAN</legend>
                <img name="slideW" id="slideshowW"/>
            </fieldset></a>
           
          <a href="man/man.php"style="text-decoration: none;">  <fieldset>
                <legend>MAN</legend>
                <img name="slideshow" id="slideshowM"/>
            </fieldset></a>
        </div>
    </main>
    
    <?php include 'footer.php'; ?>
</body>
</div>

    <script src="funksionet.js"></script>
  
</body>
</html>