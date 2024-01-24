<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joggers</title>
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

 <div class="woman">
   <a href="man.php"><h1>MAN SECTION</h1></a>
    <div class="opsionet">
    <a href="man.php"><b><i>New arrivals</i></b></a>
    <a href="Jackets.php">Jacket</a>
    <a href="Jeans.php">Jeans</a>
    <a href="T-shirts.php">T-shirts</a>
    <a href="Joggers.php" style="background-color: brown; color: white;">Joggers</a>
   

</div>
 </div>

 <main>
        <div class="products">


            <div class="produkti">
                <div><img src="../images/Man/Joggers/Basic-cargo-joggers-1.jpg" alt="Basic Cargo Joggers" title="Basic Dark-Gray Cargo Joggers">
                    <h3>Basic Cargo Joggers</h3>
                    <p>Price: 27.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(4.1)" id="4.1" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.001)" id="4.001" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Joggers/Basic-cargo-joggers-2.jpg" alt="Basic Cargo Joggers" title="Basic Black Cargo Joggers">
                    <h3>Basic Cargo Joggers</h3>
                    <p>Price: 27.99€</p>
                </div>
    
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(4.2)" id="4.2" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.002)" id="4.002" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Basic-cargo-joggers-3.jpg" alt="Basic Cargo Joggers" title="Basic Brown Cargo Joggers">
                    <h3>Basic Cargo Joggers</h3>
                    <p>Price: 27.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(4.3)" id="4.3" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.003)" id="4.003" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Basic-cargo-joggers-4.jpg" alt="Basic Cargo Joggers" title="Basic White Cargo Jeans">
                    <h3>Basic Cargo Joggers</h3>
                    <p>Price: 27.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(4.4)" id="4.4" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.004)" id="4.004" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Basic-hoodie-tracksuit-1.jpg" alt="Basic Hoodie Tracksuit" title="New Arrival:
Basic Black Hoodie Tracksuit">
                    <h3>Basic Hoodie Tracksuit</h3>
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
                    <button onclick="fav(4.5)" id="4.5" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.005)" id="4.005" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>


            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Basic-hoodie-tracksuit-2.jpg" alt="Basic Hoodie Tracksuit" title="New Arrival:
Basic Gray Hoodie Tracksuit">
                    <h3>Basic Hoodie Tracksuit</h3>
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
                    <button onclick="fav(4.6)" id="4.6" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.006)" id="4.006" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Basic-hoodie-tracksuit-3.jpg" alt="Basic Hoodie Tracksuit" title="Basic Brown Hoodie Tracksuit">
                    <h3>Basic Hoodie Tracksuit</h3>
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
                    <button onclick="fav(4.7)" id="4.7" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.007)" id="4.007" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Basic-hoodie-tracksuit-4.jpg" alt="Basic Hoodie Tracksuit" title="Basic Hoodie Tracksuit">
                    <h3>Basic Hoodie Tracksuit</h3>
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
                    <button onclick="fav(4.8)" id="4.8" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.008)" id="4.008" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Basic-zip-up-hoodie-tracksuit-1.jpg" alt="Zip Up Hoodie Tracksuit" title="White Zip Up Hoodie Tracksuit">
                    <h3>Zip Up Hoodie Tracksuit</h3>
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
                    <button onclick="fav(4.9)" id="4.9" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.009)" id="4.009" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Basic-zip-up-hoodie-tracksuit-2.jpg" alt="Zip Up Hoodie Tracksuit" title="Black Zip Up Hoodie Tracksuit">
                    <h3>Zip Up Hoodie Tracksuit</h3>
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
                    <button onclick="fav(4.11)" id="4.11" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.011)" id="4.011" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Pack-of-2joggers-1.jpg" alt="Pack Of Two Joggers" title="Pack Of Two Joggers">
                    <h3>Pack Of Two Joggers</h3>
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
                    <button onclick="fav(4.12)" id="4.12" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.012)" id="4.012" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Pack-of-2joggers-2.jpg" alt="Pack Of Two Joggers" title="Pack of Two Joggers">
                    <h3>Pack Of Two Joggers</h3>
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
                    <button onclick="fav(4.13)" id="4.13" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.013)" id="4.013" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Ripped-jogger-jeans-1.jpg" alt="Ripped Jogger Jeans" title="New Arrival:
Ripped Jogger Jeans">
                    <h3>Ripped Jogger Jeans</h3>
                    <p>Price: 24.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(4.14)" id="4.14" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.014)" id="4.014" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Ripped-jogger-jeans-2.jpg" alt="Ripped Jogger Jeans" title="New Arrival:
Ripped Jogger Jeans">
                    <h3>Ripped Jogger Jeans</h3>
                    <p>Price: 24.99€</p>
                </div>
                <div class="shop">
                    <select id="masa">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                    <button onclick="fav(4.15)" id="4.15" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.015)" id="4.015" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Joggers/Wide-leg-corduroy-joggers.jpg" alt="Wide Leg Joggers" title="Wide Leg Corduroy Joggers">
                    <h3>Wide Leg Joggers</h3>
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
                    <button onclick="fav(4.16)" id="4.16" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(4.016)" id="4.016" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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