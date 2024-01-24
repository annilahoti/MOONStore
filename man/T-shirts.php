<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-shirts</title>
    <link rel="stylesheet" href="../stilimet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <script src="../funksionet.js"></script>
</head>
<body><header>
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

 <div class="woman">
   <a href="man.php"><h1>MAN SECTION</h1></a>
    <div class="opsionet">
    <a href="man.php"><b><i>New arrivals</i></b></a>
    <a href="Jackets.php">Jacket</a>
    <a href="Jeans.php">Jeans</a>
    <a href="T-shirts.php" style="background-color: brown; color: white;">T-shirts</a>
    <a href="Joggers.php">Joggers</a>
   

</div>
 </div>

 <main>
        <div class="products">

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Basic-fit-T-shirt-1.jpg" alt="Basic Fit T-shirt" title="New Arrival:
Basic Fit T-shirt">
                    <h3>Basic Fit T-shirt</h3>
                    <p>Price: 7.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(3.1)" id="3.1" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.001)" id="3.001" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Basic-fit-T-shirt-2.jpg" alt="Basic Fit T-shirt"title="New Arrival:
Basic Fit T-shirt">
                    <h3>Basic Fit T-shirt</h3>
                    <p>Price: 7.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(3.2)" id="3.2" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.002)" id="3.002" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Basic-fit-T-shirt-3.jpg" alt="Basic Fit T-shirt" title="New Arrival:
Basic Fit T-shirt">
                    <h3>Basic Fit T-shirt</h3>
                    <p>Price: 7.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(3.3)" id="3.3" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.003)" id="3.003" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Heavy-weight-T-shir-1.jpg" alt="Heavy Weight T-Shirt">
                    <h3>Heavy Weight T-Shirt</h3>
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
                    <button onclick="fav(3.4)" id="3.4" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.004)" id="3.004" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>
            
            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Heavy-weight-T-shirt-2.jpg" alt="Heavy Weight T-Shirt">
                    <h3>Heavy Weight T-Shirt</h3>
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
                    <button onclick="fav(3.5)" id="3.5" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.005)" id="3.005" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Ottoman-long-sleeve-T-shirt-1.jpg" alt="Ottoman Long Sleeve T-Shirt" title="Ottoman Long Sleeve T-Shirt">
                    <h3>Ottoman Long Sleeve T-Shirt</h3>
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
                    <button onclick="fav(3.6)" id="3.6" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.006)" id="3.006" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Ottoman-long-sleeve-T-shirt-2.jpg" alt="Ottoman Long Sleeve T-Shirt">
                    <h3>Ottoman Long Sleeve T-Shirt</h3>
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
                    <button onclick="fav(3.7)" id="3.7" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.007)" id="3.007" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Ottoman-long-sleeve-T-shirt-3.jpg" alt="Ottoman Long Sleeve T-Shirt">
                    <h3>Ottoman Long Sleeve T-Shirt</h3>
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
                    <button onclick="fav(3.8)" id="3.8" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.008)" id="3.008" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>


            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Oversized-short-sleeve-T-shirt-1.jpg" alt="Oversize T-Shirt">
                    <h3>Oversize T-Shirt</h3>
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
                    <button onclick="fav(3.9)" id="3.9" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.009)" id="3.009" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Oversized-short-sleeve-T-shirt-2.jpg" alt="Oversize T-Shirt">
                    <h3>Oversize T-Shirt</h3>
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
                    <button onclick="fav(3.11)" id="3.11" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.011)" id="3.011" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Oversized-short-sleeve-T-shirt-3.jpg" alt="Oversize T-Shirt">
                    <h3>Oversize T-Shirt</h3>
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
                    <button onclick="fav(3.12)" id="3.12" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.012)" id="3.012" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Oversized-short-sleeve-T-shirt-4.jpg" alt="Oversize T-Shirt">
                    <h3>Oversize T-Shirt</h3>
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
                    <button onclick="fav(3.13)" id="3.13" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.013)" id="3.013" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/Short-sleeve-octopus-T-shirt.jpg" alt="Octopus T-shirt">
                    <h3>Octopus T-Shirt</h3>
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
                    <button onclick="fav(3.14)" id="3.14" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.014)" id="3.014" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/T-shirt-1.jpg" alt="STDW-T-shirt">
                    <h3>STWD T-Shirt</h3>
                    <p>Price: 14.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(3.15)" id="3.15" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.015)" id="3.015" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/T-shirt-2.jpg" alt="STDW-T-shirt">
                    <h3>STWD T-Shirt</h3>
                    <p>Price: 14.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(3.16)" id="3.16" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.016)" id="3.016" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/T-shirt-3.jpg" alt="STDW-T-shirt">
                    <h3>STWD T-Shirt</h3>
                    <p>Price: 14.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(3.17)" id="3.17" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.017)" id="3.017" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/T-shirt-4.jpg" alt="STDW-T-shirt">
                    <h3>STWD T-Shirt</h3>
                    <p>Price: 14.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(3.18)" id="3.18" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.018)" id="3.018" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/T-shirt-5.jpg" alt="STDW-T-shirt">
                    <h3>STWD T-Shirt</h3>
                    <p>Price: 14.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(3.19)" id="3.19" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.019)" id="3.019" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/T-shirts/T-shirt-6.jpg" alt="STDW-T-shirt">
                    <h3>STWD T-Shirt</h3>
                    <p>Price: 14.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(3.21)" id="3.21" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(3.021)" id="3.021" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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