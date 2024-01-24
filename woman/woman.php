<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woman section</title>
    <link rel="stylesheet" href="../stilimet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">

</head>
<body><header>
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


  
    <p style="color: rgb(78, 60, 60); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 17px; text-align: center; margin-bottom: 5px;">Mirë se vini në website-in tonë! Moon Store ofron transport falas në Kosovë dhe Shqipëri</p>


 <div class="woman">
   <a href="woman.php"><h1>WOMAN SECTION</h1></a>
    <div class="opsionet">
    <a href="woman.php" style="background-color: brown; color: white;"><b><i>New arrivals</i></b></a>
    <a href="Tops.php">Tops</a>
    <a href="Dresses.php">Dresses</a>
    <a href="Jeans&Trousers.php">Jeans/Trousers</a>
    <a href="Jackets&Coats.php">Jackets/Coats</a>
</div>
 </div>

 <main>
        <div class="products">

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/darkblueQuiltedJacket.jpg" alt="Dark blue Quilted Jacket">
            <h3>Dark Blue Quilted Jacket</h3>
            <p>Price: 59.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/ShearlingJacketWithPrint.jpg" alt="Shealing Jacket With Print">
            <h3>Shearling Jacket With Print</h3>
            <p>Price:49.59€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Jackets/darkCherryLongTextureCoat.jpg" alt="Dark Cherry Long Coat">
            <h3>Dark-Cherry Long Coat</h3>
            <p>Price: 70.00€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/Double-facedCoat.jpg" alt="Double-Faced Coat">
            <h3>Double-Faced Coat</h3>
            <p>Price: 49.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/LeatherDouble-FacedJacket.jpg" alt="Leather Double-Faced Coat">
            <h3>Leather Double-Faced Jacket</h3>
            <p>Price: 35.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/LongOversizeTextureCoat.jpg" alt="Long Oversized Coat">
            <h3>Long Oversized Coat</h3>
            <p>Price: 65.00€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Tops/KnitSweaterWithAMaxiCollar.jpg" alt="Knit Sweater with a Maxi Collar">
            <h3>Knit Sweater</h3>
            <p>Price: 29.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Knitwears/StripedKnitJumper.jpg" alt="Striped Knit Jumper">
            <h3>Striped Knit Jumper</h3>
            <p>Price: 18.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>
            

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/fluffyCoat.jpg" alt="fluffyCoat">
            <h3>Fluffy White Coat</h3>
            <p>Price: 29.95€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Tops/CrochetSweater.jpg" alt="Crochet Sweater">
            <h3>Crochet Sweater</h3>
            <p>Price: 19.59€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>
            
            <div class="produkti">
            <div><img src="../images/Woman/Tops/BardotKnitJumper.jpg" alt="Bardot Knit Jumper">
            <h3>Bardot Knit Jumper</h3>
            <p>Price: 23.95€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/cargomultipockets.jpg" alt="Cargo Trousers with MultiPockets">
            <h3>MultiPockets Cargo Trousers</h3>
            <p>Price: 39.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/FlaredLeatherTrousers.jpg" alt="Flared Leather Trousers">
            <h3>Flared Leather Trousers</h3>
            <p>Price: 25.95€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Jeans/SmartTrousersBlack.jpg" alt="Black Smart Trousers">
            <h3>Black Smart Trousers</h3>
            <p>Price: 19.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>
            


            <div class="produkti">
            <div><img src="../images/Woman/Jeans/SmartTrousersGrey.jpg" alt="Grey Smart Trousers">
            <h3>Grey Smart Trousers</h3>
            <p>Price: 19.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/Wide-leg corduroy trouesers.jpg" alt="Wide-leg Trousers">
            <h3>Wide-Leg trouesers</h3>
            <p>Price: 15.95€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/FlaredHigh-waist jeans.jpg" alt="Flared High-waist Jeans">
            <h3>Flared High-Waist Jeans</h3>
            <p>Price: 17.65€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/BaggyCarpenterJeans.jpg" alt="Baggy Carpenter Jeans">
            <h3>Baggy Carpenter Jeans</h3>
            <p>Price: 25.00€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/StraightJeans MidWaist.jpg" alt="Straight Mid-waist jeans">
            <h3>Straight Mid-Waist Jeans</h3>
            <p>Price: 28.65€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button><img src="../images/Front/favorite.png" class="shop"></button>
                <button><img src="../images/Front/Shop.png" class="shop"></button>
            </div>
        </div>
        </div>
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
                            <li><a href="">Register</a></li>
                            <li><a href="#">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
    </footer>
    
</body>
</html>