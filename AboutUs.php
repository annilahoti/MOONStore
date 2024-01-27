<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
            <a href="AboutUs.php" style="cursor: pointer; border-bottom: 3px solid burlywood;">About Us</a>
            <a href="ContactUs.php">Contact Us</a>
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

     <div class="about-us2">
        <a href="AboutUs.php"><h1>ABOUT US</h1></a>
    </div>
        
   


    <main class="aboutus">
        <div class="store"> 
       
        <p>Moon Clothing Store is the place to go if you are looking for the best quality, unique and suitable clothes.
            <br><br>
            <i>If you try us once, you will never replace us again.</i>
            <br>
            <br>
           <b><i>Moon Clothing Store, the place where quality meets the beauty and the uniqueness.</i></b>
            <br>
            <br>
            Our store offers solutions for your clothes, whether they are formal, everyday clothes, for parties or just to go out with friends, but above all,
             it offers the most comfortable and suitable clothes for you.
             <br>
             Which also come with affordable prices.
            <br><br><br>
            Moon Clothing Store was founded in 2015 by the famous designer Hana Musaj, who now with a large experience and baggage of skills and creativity 
            offers you the most delicate and unique models to fulfill your requests and adding beauty to the collections for MEN and WOMEN.
            <br>
            <br>
            We bring you the newest trends in women's and men's clothing, which you can find in the heart of our country, in Pristina.
            <br>
            We are located in the center of Prishtina in the neighborhood "Deshmoret e Kombit".

            <br><br>
            But you can follow our new arrivals and offers through our website.
             Where you can also place orders here and your orders will be delivered to your door after 24 hours and shipping is FREE!
            DON'T MISS YOUR CHANCES!!
            </p>
            <br><br><br>
            <img src="../MOONStore/images/Front/store2.jpg">
       
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>