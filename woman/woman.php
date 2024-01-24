<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woman section</title>
    <link rel="stylesheet" href="../stilimet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <script src="../funksionet.js"></script>
</head>
<body>
<header>
        <div class="logo">
        <a href="../home.php"><img src="../images/Front/moon.jpg" alt="logo" id="logo"></a>
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
            <a href="../home.php">Home</a>
            <a href="../AboutUs.php">About Us</a>
            <a href="../ContactUs.php">Contact Us</a>
            <a href="../Dashboard.php" class="<?php echo $hide?>">Dashboard</a>
            <a href="../signUp.php"><img src="../images/Front/user1.png" id="user"></a>
            <a href="../logout.php">Log <?php if ($log == "") {
                echo "In";
            }else{
                echo "Out";
            }?></a>
            <a href=""><img src="../images/Front/shoppingbag.jpg" id="bag"></a>
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
            <div><img src="../images/Woman/Jackets/darkblueQuiltedJacket.jpg" alt="Dark blue Quilted Jacket" title="Dark Blue Quilted Jacket">
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
                    <button onclick="cart(10.001)" id="10.001" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">            
            <div><img src="../images/Woman/Jackets/ShearlingJacketWithPrint.jpg" alt="Shearling Jacket With Print" title="Shearling Jacket With Print">
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
                    <button onclick="cart(10.004)" id="10.004" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>


            <div class="produkti">
            <div><img src="../images/Woman/Jackets/darkCherryLongTextureCoat.jpg" alt="Dark Cherry Long Coat" title="Dark Cherry Long Coat">
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
                    <button onclick="cart(10.006)" id="10.006" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/Double-facedCoat.jpg" alt="Double-Faced Coat" title="Double-Faced Coat"> 
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
                    <button onclick="cart(10.003)" id="10.003" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/LeatherDouble-FacedJacket.jpg" alt="Leather Double-Faced Coat" title="Leather Double-Faced Coat">
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
                    <button onclick="cart(10.007)" id="10.007" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/LongOversizeTextureCoat.jpg" alt="Long Oversized Coat" title="Long Oversizd Coat">
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
                    <button onclick="cart(10.005)" id="10.005" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

        <div class="produkti">
            <div><img src="../images/Woman/Tops/KnitSweaterWithAMaxiCollar.jpg" alt="Milky Knit Sweater" title="Milky Knit Sweater">
                <h3>Milky Knit Sweater</h3>
                <p>Price: 27.00€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.008)" id="6.008" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>
            

        <div class="produkti">
            <div><img src="../images/Woman/Jackets/fluffyCoat.jpg" alt="fluffyCoat" title="Fluffy Coat">
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
                    <button onclick="cart(10.002)" id="10.002" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>


        <div class="produkti">
            <div><img src="../images/Woman/Tops/CrochetSweater.jpg" alt="Crochet Sweater" title="Crochet Sweater">
                <h3>Crochet Sweater</h3>
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
                <button onclick="cart(6.006)" id="6.006" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
                <button onclick="cart(6.003)" id="6.003" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

        <div class="produkti">
            <div><img src="../images/Woman/Jeans/cargomultipockets.jpg" alt="cargo multi-pockets" title="Cargo Multi-Pockets">
            <h3>Beige Multi-Pockets Cargo</h3>
            <p>Price: 35.50€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.004)" id="8.004" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

        <div class="produkti">
            <div><img src="../images/Woman/Jeans/FlaredLeatherTrousers.jpg" alt="Flared Leather Trousers" title=""Flared Leather Trousers>
            <h3>Flared Leather Trousers</h3>
            <p>Price: 21.99€</p></div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.003)" id="8.003" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>


        <div class="produkti">
            <div><img src="../images/Woman/Jeans/SmartTrousersBlack.jpg" alt="Black Smart Trousers" title="Black Smart Trousers">
                <h3>Black Smart Trousers</h3>
                <p>Price: 25.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                <button onclick="cart(8.013)" id="8.013" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>
            


            <div class="produkti">
            <div><img src="../images/Woman/Jeans/SmartTrousersGrey.jpg" alt="Grey Smart Trousers" title="Grey Smart Trousers">
            <h3>Grey Smart Trousers</h3>
            <p>Price: 25.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.007)" id="8.007" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

        <div class="produkti">
            <div><img src="../images/Woman/Jeans/Wide-leg corduroy trouesers.jpg" alt="Wide-Leg trousers" title="Wide-Leg trouesers">
            <h3>Wide-Leg Corduroy Trousers</h3>
            <p>Price: 17.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.005)" id="8.005" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

        <div class="produkti">
            <div><img src="../images/Woman/Jeans/FlaredHigh-waist jeans.jpg" alt="Flared High-Waist Jeans" title="Flared High-waist Jeans">
                <h3>Flared High-waist Jeans</h3>
                <p>Price: 20.00€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="cart(8.006)" id="8.006" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/BaggyCarpenterJeans.jpg" alt="Baggy Carpenter Jeans" title="Baggy Carpenter Jeans">
            <h3>Baggy Carpenter Jeans</h3>
            <p>Price: 29.90€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.002)" id="8.002" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

        <div class="produkti">
            <div><img src="../images/Woman/Jeans/StraightJeans MidWaist.jpg" alt="Straight Jeans Mid-Waist" title="Straight Jeans Mid-Waist">
            <h3>Straight Jeans Mid-Waist</h3>
            <p>Price: 24.99€</p></div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.001)" id="8.001" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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