<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Man section</title>
    <link rel="stylesheet" href="../stilimet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <script src="../funksionet.js"></script>
</head>
<body>
<header>
        <div class="logo">
            <img src="../images/Front/moon.jpg">
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
            <a href="signUp.php"><img src="../images/Front/user1.png" id="user"></a>
            <a href="logout.php">Log Out</a>
            <a href=""><img src="../images/Front/favorites.jpg" id="fav"></a>
            <a href=""><img src="../images/Front/shoppingbag.jpg" id="bag"></a>
        </div>
    </header>

    
 <div class="woman">
   <a href="man.php"><h1>MAN SECTION</h1></a>
    <div class="opsionet">
    <a href="man.php" style="background-color: brown; color: white;"><b><i>New arrivals</i></b></a>
    <a href="Jackets.php">Jackets</a>
    <a href="Jeans.php">Jeans</a>
    <a href="T-shirts.php">T-shirts</a>
    <a href="Joggers.php">Joggers</a>
   

</div>
 </div>

 <main>
        <div class="products">

            <div class="produkti">
                <div><img src="../images/Man/Jacket/Jacket-05.jpg" alt="Faux Shearling Jacket" title="New Arrival:
Faux Shearling Jacket">
                    <h3>Faux Shearling Jacket</h3>
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
                    <button onclick="fav(1.5)" id="1.5" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(1.005)" id="1.005" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jacket/Jacket-03.jpg" alt="Lightweight Quilted Jacket" title="New Arrival:
 Lightweight Quilted Jacket">
                    <h3>Lightweight Quilted Jacket</h3>
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
                    <button onclick="fav(1.3)" id="1.3" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(1.003)" id="1.003" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jacket/Jacket-11.jpg" alt="Denim Jacket Fur Collar" title="New Arrival:
Denim Jacket Fur Collar">
                    <h3>Denim Jacket Fur Collar</h3>
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
                    <button onclick="fav(1.12)" id="1.12" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(1.012)" id="1.012" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jacket/Jacket-07.jpg" alt="Double Faced Black Jackett" title="New Arrival:
Double Faced Black Jackett">
                    <h3>Double Faced Black Jacket</h3>
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
                    <button onclick="fav(1.7)" id="1.7" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(1.007)" id="1.007" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jacket/Jacket-01.jpg" alt="Lightweight Quilted Jacket" title="New Arrival:
Mint Lightweight Quilted Jacket">
                    <h3>Lightweight Quilted Jacket</h3>
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
                    <button onclick="fav(1.1)" id="1.1" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(1.001)" id="1.001" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
                <div>
                    <img src="../images/Man/Jeans/Baggy-jeans-1.jpg" alt="Baggy Jeans" title="New Arrival:
Baggy Jeans">
                <h2>Baggy Jeans</h2>
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
                <button onclick="fav(2.1)" id="2.1" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                <button onclick="cart(2.001)" id="2.001" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jeans/Baggy-jeans-3.jpg" alt="Baggy Jeans" title="New Arrival:
Baggy Jeans">
                    <h2>Baggy Jeans</h2>
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
                    <button onclick="fav(2.3)" id="2.3" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                    <button onclick="cart(2.003)" id="2.003" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jeans/Baggy-jeans-2.jpg" alt="Baggy Jeans" title="New Arrival:
Baggy Jeans">
                    <h2>Baggy Jeans</h2>
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
                        <button onclick="fav(2.2)" id="2.2" class="favorite-button"><img src="../images/Front/favorite.png" alt="favorite"></button>
                        <button onclick="cart(2.002)" id="2.002" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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