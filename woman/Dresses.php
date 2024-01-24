<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dresses</title>
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
    <h1>WOMAN SECTION</h1>
    <div class="opsionet">
    <a href="woman.php" id="NEW" ><b><i>New arrivals</i></b></a>
    <a href="Tops.php">Tops</a>
    <a href="Dresses.php" style="background-color: brown; color: white;">Dresses</a>
    <a href="Jeans&Trousers.php">Jeans/Trousers</a>
    <a href="Jackets&Coats.php">Jackets/Coats</a>
</div>
 </div>

    <main>
        <div class="products">


            <div class="produkti">            
            <div><img src="../images/Woman/Dresses/AnimalPrintMidiDress.jpg" alt="Animal Print Midi Dress" title="Animal Print Midi Dress">
            <h3>Animal Print Midi Dress</h3>
            <p>Price: 35.99€</p></div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(7.001)" id="7.001" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
            </div>



            <div class="produkti">
            <div><img src="../images/Woman/Dresses/GreyLongKnitDress.jpg" alt="Grey Long Knit Dress">
                <h3>Grey Long Knit Dress</h3>
                <p>Price: 30.00€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="cart(7.002)" id="7.002" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>
    
            <div class="produkti">                
            <div><img src="../images/Woman/Dresses/MinkLongFittedDress.jpg" alt="Mink Long Fitted Dress" title="Mink Long Fitted Dress">
            <h3>Mink Long Fitted Dress</h3>
            <p>Price: 32.95€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(7.003)" id="7.003" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Dresses/BlackLongFittedDress.jpg" alt="Black Long Fitted Dress" title="Black Lomg Fitted Dress">
            <h3>Black Long Fitted Dress</h3>
            <p>Price: 32.95€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(7.004)" id="7.004" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Dresses/GreyLongFittedDress.jpg" alt="Grey Long Fitted Dress" title="Grey long Fitted Dress">
            <h3>Grey Long Fitted Dress</h3>
            <p>Price: 32.95€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(7.005)" id="7.005" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Dresses/BlueLongKnitDress.jpg" alt="Blue Long Knit Dress" title="Blue Long Knit Dress">
                <h3>Blue Long Knit Dress</h3>
                <p>Price: 30.00€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                <button onclick="cart(7.006)" id="7.006" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>
    


            <div class="produkti">
            <div><img src="../images/Woman/Dresses/BeigeShortKnitDress.jpg" alt="Beige Short Knit Dress" title="Beige Short Knit Dress">
            <h3>Beige Short Knit Dress</h3>
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
                <button onclick="cart(7.007)" id="7.007" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Dresses/BlackShortKnitDress.jpg" alt="Black Short Knit Dress" title="Black Short Knit Dress">
            <h3>Black Short Knit Dress</h3>
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
                <button onclick="cart(7.008)" id="7.008" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>



            <div class="produkti">
            <div><img src="../images/Woman/Dresses/PinkShadesTulleDress.jpg" alt="Pink Shades Tulle Dress" title="Pink Shades Tulle Dress">
            <h3>Pink Shades Tulle Dress</h3>
            <p>Price: 22.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(7.009)" id="7.009" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Dresses/GreenShadesTulleDress.jpg" alt="Green Shades Tulle Dress" title="Green Shades Tulle Dress">
            <h3>Green Shades Tulle Dress</h3>
            <p>Price: 22.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(7.011)" id="7.011" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Dresses/PurpleShadesTulleDress.jpg" alt="Purple Shades Tulle Dress" title="Purple Shades Tulle Dress">
            <h3>Purple Shades Tulle Dress</h3>
            <p>Price: 22.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(7.012)" id="7.012" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>



            <div class="produkti">
            <div><img src="../images/Woman/Dresses/MidiDresswithLeopardPrint.jpg" alt="Leopard-Print Midi Dress" title="Leopard-Print Midi Dress">
            <h3>Leopard-Print Midi Dress</h3>
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
                <button onclick="cart(7.013)" id="7.013" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Dresses/SparklyBlackDress.jpg" alt="Sparkly Black Dress" title="Sparkly Black Dress">
            <h3>Sparkly Black Dress</h3>
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
                <button onclick="cart(7.014)" id="7.014" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Dresses/SparklyPurpleDress.jpg" alt="SparklyPurpleDress" title="Sparkly Purple Dress">
            <h3>Sparkly Purple Dress</h3>
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
                <button onclick="cart(7.015)" id="7.015" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Dresses/SparklyGreyDress.jpg" alt="SparklyGreyDress" title="Sparkly Grey Dress">
            <h3>Sparkly Grey Dress</h3>
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
                <button onclick="cart(7.016)" id="7.016" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Dresses/LongAsymmetricDress.jpg" alt="Long Asymmetric Dress" title="Long Asymmetric Dress">
            <h3>Long Asymmetric Dress</h3>
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
                <button onclick="cart(7.017)" id="7.017" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Dresses/LongAsymmetricTulleDress.jpg" alt="Long Asymmetric Tulle Dress" title="Long Asymmetric Tulle Dress">
            <h3>Long Tulle Dress</h3>
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
                <button onclick="cart(7.018)" id="7.018" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Dresses/AsymmetricDenimMidiDress.jpg" alt="Asymmetric Denim Midi Dress" alt="Asymmetric Denim Midi Dress">
            <h3>Denim Midi Dress</h3>
            <p>Price: 32.90€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(7.019)" id="7.019" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Dresses/LilacLongDressWithSlit.jpg" alt="Lilac Long Dress With Slit" title="Lilac Long Dress With Slit">
            <h3>Lilac Long Dress</h3>
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
                <button onclick="cart(7.021)" id="7.021" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>


            <div class="produkti">
            <div><img src="../images/Woman/Dresses/Off-The-Shoulder Midi Dress.jpg" alt="Off-The-Shoulder Midi Dress" title="Off-The-Shoulder Midi Dress">
            <h3>Off-The-Shoulder Dress</h3>
            <p>Price: 25.90€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="cart(7.022)" id="7.006" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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