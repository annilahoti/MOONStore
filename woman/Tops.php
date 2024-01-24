<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tops</title>
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
        <a href="Tops.php" style="background-color: brown; color: white; ">Tops</a>
        <a href="Dresses.php">Dresses</a>
        <a href="Jeans&Trousers.php">Jeans/Trousers</a>
        <a href="Jackets&Coats.php">Jackets/Coats</a>
    </div>
    </div>
    <main>
        <div class="products">


            <div class="produkti">
            <div><img src="../images/Woman/Tops/CherryAsymmetricLongSleeveTop.jpg" alt="Cherry Asymmetric Long Sleeve Top" title="Cherry Asymmetric Long Sleeve Top">
                <h3>Cherry Asymmetric Top</h3>
                <p>Price: 15.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.001)" id="6.01" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>
        
            <div class="produkti">
            <div><img src="../images/Woman/Tops/GreyLongSleeveAsymmetricTshirt.jpg" alt="Grey Asymmetric Long Sleeve Top" title="Grey Asymmetric Long Sleeve Top">
                <h3>Grey Asymmetric Top</h3>
                <p>Price: 15.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.002)" id="6.02" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Tops/BardotKnitJumper.jpg" alt="Bardot Knit Jumper" title="Bardot Knit Jumper">
                <h3>Bardot Knit Jumper</h3>
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
                <button onclick="cart(6.003)" id="6.003" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Tops/BurgundyLongSleeveTopWithButtons.jpg" alt="Burgundy Long Sleeve Top With Buttons" title="Burgundy Long Sleeve Top With Buttons">
                <h3>Burgundy Long Sleeve Top</h3>
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
                <button onclick="cart(6.004)" id="6.004" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Tops/BlackLongSleeveTulleCropTop.jpg" alt="Black Long Sleeve Tulle Crop Top" title="BlackLong Sleeve Tulle Crop Top">
                <h3>Black Tulle Crop Top</h3>
                <p>Price: 22.90€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.005)" id="6.005" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
            <div><img src="../images/Woman/Tops/orangeOmbreKnitJumper.jpg" alt="orange Ombre Knit Jumper" title="Orange Ombre Knit Jumper">
                <h3>Orange Ombre Knit Jumper</h3>
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
                <button onclick="cart(6.007)" id="6.007" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
            <div><img src="../images/Woman/Tops/GreyLongSleeveTulleCropTop.jpg" alt="Grey Long Sleeve Tulle Crop Top" title="Grey Long Sleeve Tulle Crop Top">
                <h3>Grey Long Sleeve Tulle Top</h3>
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
                <button onclick="cart(6.009)" id="6.009" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Tops/KnitJacquardJumper.jpg" alt="Knit Jacquard Jumper" title="Knit Jacquard Jumper">
                <h3>Knit Jacquard Jumper</h3>
                <p>Price: 18.95€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.011)" id="6.011" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Tops/OchreLongSleeveTop.jpg" alt="Ochre Long Sleeve Top" title="Ochre Long Sleeve Top">
                <h3>Ochre Long Sleeve Top</h3>
                <p>Price: 12.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.012)" id="6.012" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Tops/BlueLongSleeveTop.jpg" alt="Blue Long Sleeve Top" title="Blue Long Sleeve Top">
                <h3>Blue Long Sleeve Top</h3>
                <p>Price: 12.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.013)" id="6.013" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Tops/KnitJumperWithButtons.jpg" alt="Knit Jumper With Buttons" title="Knit Jumper With Buttons">
                <h3>Knit Jumper With Buttons</h3>
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
                <button onclick="cart(6.014)" id="6.014" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Tops/MauveLongSleeveLaceTop.jpg" alt="Mauve Long Sleeve Lace Top" title="Mauve Long Sleeve Lace Top">
                <h3>Mauve Long Sleeve Lace Top</h3>
                <p>Price: 15.90€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.015)" id="6.015" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>
            

            <div class="produkti">
            <div><img src="../images/Woman/Tops/OmbreKnitJumper.jpg" alt="Blue Ombre Knit Jumper" title="Blue Ombre Knit Jumper">
                <h3>Blue Ombre Knit Jumper</h3>
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
                <button onclick="cart(0.016)" id="6.016" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Tops/AssymetricLongSleeveTopBlack.jpg" alt="Assymetric Long Sleeve Top Black" title="Black Assymetric Long Sleeve Top">
                <h3>Black Assymetric Top</h3>
                <p>Price: 11.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.017)" id="6.017" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Tops/BrownishTieDyeAsymmetricTop.jpg" alt="Brownish Tie Dye Asymmetric Top" title="Brownish Tie Dye Asymmetric Top">
                <h3>Brownish Tie-Dye Top</h3>
                <p>Price: 15.00€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.018)" id="6.018" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Tops/PackOf3BasicTankTops.jpg" alt="Pack of 3 Basic Tank Tops" title="Pack Of 3 Basic Tank Tops">
                <h3>Pack of 3 Basic Tank Tops</h3>
                <p>Price: 14.95€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.019)" id="6.019" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Tops/GreySparklyAsymmetricTop.jpg" alt="Grey Sparkly Asymmetric Top" title="Grey Sparkly Asymmetric Top">
                <h3>Grey Sparkly Asymmetric Top</h3>
                <p>Price: 23.55€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.021)" id="6.021" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

        <div class="produkti">
            <div><img src="../images/Woman/Tops/PrintTulleTopWithGathering.jpg" alt="Print Tulle Top" title="Print Tulle Top">
                <h3>Print Tulle Top</h3>
                <p>Price: 10.90€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(6.022)" id="6.022" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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