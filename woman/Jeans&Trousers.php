<?php  session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeans&Trousers</title>
    <link rel="stylesheet" href="../stilimet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <script src="../funksionet.js">

    </script>
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
    <a href="woman.php"><b><i>New arrivals</i></b></a>
    <a href="Tops.php">Tops</a>
    <a href="Dresses.php">Dresses</a>
    <a href="Jeans&Trousers.php"  style="background-color: brown; color: white;">Jeans/Trousers</a>
    <a href="Jackets&Coats.php">Jackets/Coats</a>
</div>
 </div>

    <main>
        <div class="products">

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
            <div><img src="../images/Woman/Jeans/KhakiParachuteTrousers.jpg" alt="Khaki Parachute Trousers" title="Khaki Parachute Trousers">
            <h3>Khaki Parachute Trousers</h3>
            <p>Price: 21.95€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.008)" id="8.008" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/StoneParachuteTrousers.jpg" alt="Stone Parachute Trousers" title="Stone Parachute Trousers">
            <h3>Stone Parachute Trousers</h3>
            <p>Price: 21.95€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.009)" id="8.009" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/BlueCargoMulti-Pockets.jpg" alt="Blue Multi-Pockets Cargo" title="Blue Multi-Pockets Cargo">
            <h3>Blue Multi-Pockets Cargo</h3>
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
                <button onclick="cart(8.011)" id="8.011" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/oversizedStraightLegJeans.jpg" alt="Oversized Straight-Leg Jeans" title="Oversizd Straight-Leg Jeans">
            <h3>Oversized Straight-Leg Jeans</h3>
            <p>Price: 20.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.012)" id="8.012" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
            <div><img src="../images/Woman/Jeans/BlackOversizeSkaterJeans.jpg" alt="Black Oversize Skater Jeans" title="Black Oversized Skater Jeans">
            <h3>Black Oversize Skater Jeans</h3>
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
                <button onclick="cart(8.014)" id="8.014" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/BlueOversizeSkaterJeans.jpg" alt="Blue Oversize Skater Jeans" title="Blue Oversizd Skater Jeans">
            <h3>Blue Oversize Skater Jeans</h3>
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
                <button onclick="cart(8.015)" id="8.015" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/Pink metalic trousers.jpg" alt="Pink Metalic Trousers" title="Pink Metalic Trousers">
                <h3>Pink Metalic Trousers</h3>
                <p>Price: 35.00€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="cart(8.016)" id="8.016" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/LowWaist wideleg baggy jeans.jpg" alt="Low-Waist baggy Jeans" title="Low-Waist Baggy Jeans">
            <h3>Low-Waist Baggy Jeans</h3>
            <p>Price: 22.50€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.017)" id="8.017" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/GreyLowwaist bagy jeans.jpg" alt="Grey Low-Waist baggy Jeans" title="Grey Low-Waist Baggy Jeans">
            <h3>Grey Low-Waist Baggy Jeans</h3>
            <p>Price: 22.50€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.018)" id="8.018" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>
            
            <div class="produkti">
            <div><img src="../images/Woman/Jeans/BurgundyLeatherTrousers.jpg" alt="BurgundyLeatherTrousers" title="Burgundy Leather Trousers">
            <h3>Burgundy Leather Trousers</h3>
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
                <button onclick="cart(8.019)" id="8.019" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jeans/BluePinstripeTrousers.jpg" alt="Blue Pinstripe Trousers" title="Blue Pinstripe Trousers">
            <h3>Blue Pinstripe Trousers</h3>
            <p>Price: 20.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.021)" id="8.021" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti"> 
            <div><img src="../images/Woman/Jeans/GreyPinstripeTrousers.jpg" alt="Grey Pinstripe Trousers" title="Grey Pinstripe Trousers">
            <h3>Grey Pinstripe Trousers</h3>
            <p>Price: 20.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(8.022)" id="8.022" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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