<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackets&Coats</title>
    <link rel="stylesheet" href="../stilimet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">

        <script src="../funksionet.js"></script>
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


  
    <p style="color: rgb(78, 60, 60); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 17px; text-align: center; margin-bottom: 5px;">Mirë se vini në website-in tonë! Moon Store ofron transport falas në Kosovë dhe Shqipëri</p>

 <div class="woman">
    <a href="woman.php"><h1>WOMAN SECTION</h1></a>
    <div class="opsionet">
    <a href="woman.php" id="NEW" ><b><i>New arrivals</i></b></a>
    <a href="Tops.php">Tops</a>
    <a href="Dresses.php">Dresses</a>
    <a href="Jeans&Trousers.php">Jeans/Trousers</a>
    <a href="Jackets&Coats.php" style="background-color: brown; color: white;">Jackets/Coats</a>
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
                    <button onclick="fav(10.1)" id="10.1" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(10.001)" id="10.001" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
                    <button onclick="fav(10.2)" id="10.2" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(10.002)" id="10.002" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
                    <button onclick="fav(10.3)" id="10.3" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(10.003)" id="10.003" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
                    <button onclick="fav(10.4)" id="10.4" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(10.004)" id="10.004" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
                    <button onclick="fav(10.5)" id="10.5" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(10.005)" id="10.005" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
                    <button onclick="fav(10.6)" id="10.6" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(10.006)" id="10.006" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
                    <button onclick="fav(10.7)" id="10.7" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(10.007)" id="10.007" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>
    
            <div class="produkti">            
            <div><img src="../images/Woman/Jackets/Jacket with faux Shearling interior.jpg" alt="Jacket with faux shearling interior" title="Jacket With Faux Shealing Interior">
                <h3>Beige Jacket</h3>
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
                    <button onclick="fav(10.8)" id="10.8" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(10.008)" id="10.008" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/GreenQuiltedJacked.jpg" alt="Green Quilted Jacket" title="Green Quilted Jacket">
                <h3>Green Quilted Jacked</h3>
                <p>Price: 45.95€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(10.9)" id="10.9" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(10.009)" id="10.009" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>
    

            <div class="produkti">
             <div><img src="../images/Woman/Jackets/MaroonLeatherTrenchCoat.jpg" alt="Maroon Leather Trench Coat" title="Maroon Leather Trench Coat">
                <h3>Maroon Leather Trench Coat</h3>
                <p>Price: 67.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="fav(10.11)" id="10.11" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                <button onclick="cart(10.011)" id="10.011" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">            
            <div><img src="../images/Woman/Jackets/FauxLeatherTrenchCoat.jpg" alt="Black Leather Trench Coat" title="Black Leather Trench Coat">
                <h3>Black Leather Trench Coat</h3>
                <p>Price: 67.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="fav(10.12)" id="10.12" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                <button onclick="cart(10.012)" id="10.012" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/Longpufferjacket with hood.jpg" alt="Black Long Puffer Jacket">
            <h3>Black Long Puffer Jacket</h3>
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
                <button onclick="fav(10.13)" id="10.13" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                <button onclick="cart(10.013)" id="10.013" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/whitelongpufferjacketwith hood.jpg" alt="White long puffer jacket" title="White Long Puffer Jacket">
                <h3>Black Long Puffer Jacket</h3>
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
                <button onclick="fav(10.14)" id="10.14" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(10.014)" id="10.014" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/GreyLeather Trenchcoat.jpg" alt="Grey Leather Trench coat" title="Grey Leather Trench Coat">
            <h3>Grey Leather Trench Coat</h3>
            <p>Price: 67.99€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="fav(10.15)" id="10.15" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                <button onclick="cart(10.015)" id="10.015" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/KhakiBeltedTrenchCoat.jpg" alt="Khaki Belted Trench Coat" title="Khaki Belted Trench Coat">
            <h3>Khaki Belted Trench Coat</h3>
            <p>Price: 35.55€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="fav(10.16)" id="10.16" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                <button onclick="cart(10.016)" id="10.016" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">    
            <div><img src="../images/Woman/Jackets/longnavyblueraincoat.jpg" alt="Long Navy Blue RainCoat" title="Long Navy Blue Rain Coat">
                <h3>Long Navy Blue Rain Coat</h3>
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
                    <button onclick="fav(10.17)" id="10.17" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                <button onclick="cart(10.017)" id="10.017" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>
    
    
                
            <div class="produkti">
            <div><img src="../images/Woman/Jackets/SandBeltedTrenchCoat.jpg" alt="Sand Belted Trench Coat" title="Sand Belted Trench Coat">
            <h3>Sand Belted Trench Coat</h3>
            <p>Price: 35.55€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="fav(10.18)" id="10.18" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                <button onclick="cart(10.018)" id="10.018" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/OversizedRaincoat.jpg" alt="Oversized Rain Coat" title="Oversizd Rain Coat">
            <h3>Oversizd Rain Coat</h3>
            <p>Price: 23.99€</p></div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="fav(10.19)" id="10.19" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                <button onclick="cart(10.019)" id="10.019" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/longdenimtrenchcoat.jpg" alt="Long Denim Trench Coat" title="Long Denim Trench Coat">
            <h3>Long Denim Trench Coat</h3>
            <p>Price: 42.50€</p>
            </div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="fav(10.21)" id="10.21" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                <button onclick="cart(10.021)" id="10.021" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
            </div>
        </div>

            <div class="produkti">
            <div><img src="../images/Woman/Jackets/longpuffergilet.jpg" alt="Long Puffer Gilet" title="Long Puffer Gilet">
            <h3>Long Puffer Gilet</h3>
            <p>Price: 39.99€</p></div>
            <div class="shop">
                <select id="masa">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
                <button onclick="fav(10.22)" id="10.22" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                <button onclick="cart(10.022)" id="10.022" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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