<?php  session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeans</title>
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
   <a href="man.php"><h1>MAN SECTION</h1></a>
    <div class="opsionet">
    <a href="man.php"><b><i>New arrivals</i></b></a>
    <a href="Jackets.php">Jacket</a>
    <a href="Jeans.php" style="background-color: brown; color: white;">Jeans</a>
    <a href="T-shirts.php">T-shirts</a>
    <a href="Joggers.php">Joggers</a>
   

</div>
 </div>

 <main>
        <div class="products">

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
                <button onclick="cart(2.001)" id="2.001" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
                        <button onclick="cart(2.002)" id="2.002" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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
                        <button onclick="cart(2.003)" id="2.003" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                    </div>
                </div>
            
            <div class="produkti">
                <div><img src="../images/Man/Jeans/Baggy-skater-cargo-jeans.jpg" alt="Baggy Skater Cargo Jeans" title="Baggy Skater Cargo Jeans">
                    <h2>Skater Cargo Jeans</h2>
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
                    <button onclick="cart(2.004)" id="2.004" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jeans/Basic-slim-jeans-1.jpg" alt="Basic Slim Jeans" title="Basic Slim Jeans">
                    <h2>Basic Slim Jeans</h2>
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
                    <button onclick="cart(2.005)" id="2.005" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jeans/Carpenter-jeans-1.jpg" alt="Carpenter Jeans" title="Ligh Blue Carpenter Jeans">
                    <h2>Carpenter Jeans</h2>
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
                    <button onclick="cart(2.006)" id="2.006" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jeans/Carpenter-jeans-2.jpg" alt="Carpenter Jeans" title="Dark Blue Carpenter Jeans">
                    <h2>Carpenter Jeans</h2>
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
                    <button onclick="cart(2.007)" id="2.007" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jeans/Carpenter-jeans-3.jpg" alt="Carpenter Jeans" title="Blue Carpenter Jeans">
                    <h2>Carpenter Jeans</h2>
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
                    <button onclick="cart(2.008)" id="2.008" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jeans/Carpenter-jeans-4.jpg" alt="Carpenter Jeans" title="Black Carpenter Jeans">
                    <h2>Carpenter Jeans</h2>
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
                    <button onclick="cart(2.009)" id="2.009" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jeans/Dark-blue-standard-jeans.jpg" alt="Dark Blue Standard Jeans" title="Dark Blue Standard Jeans">
                    <h2>Dark Blue Standard Jeans</h2>
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
                    <button onclick="cart(2.011)" id="2.011" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jeans/Jogger-jeans-1.jpg" alt="Jogger Jeans" title="Blue Jogger Jeans">
                    <h2>Jogger Jeans</h2>
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
                    <button onclick="cart(2.012)" id="2.012" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jeans/Jogger-jeans-2.jpg" alt="Jogger Jeans" title="Light Blue Jogger Jeans">
                    <h2>Jogger Jeans</h2>
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
                    <button onclick="cart(2.013)" id="2.013" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jeans/Relaxed-fit-jeans.jpg" alt="Relaxed Fit Jeans" title="Relaxed Fit Jeans">
                    <h2>Relaxed Fit Jeans</h2>
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
                    <button onclick="cart(2.014)" id="2.014" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            <div class="produkti">
                <div><img src="../images/Man/Jeans/Ripped-jogger-jeans.jpg" alt="Ripped Jogger Jeans" title="Ripped Jogger Jeans">
                    <h2>Ripped Jogger Jeans</h2>
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
                    <button onclick="cart(2.015)" id="2.015" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Jeans/Standard-cargo-jeans-2.jpg" alt="Standard Cargo Jeans" title="Black Standard Cargo Jeans">
                    <h2>Standard Cargo Jeans</h2>
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
                    <button onclick="cart(2.016)" id="2.016" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Jeans/Standard-cargo-jeans.jpg" alt="Standard Cargo Jeans" title="Blue Standard Cargo Jeans">
                    <h2>Standard Cargo Jeans</h2>
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
                    <button onclick="cart(2.017)" id="2.017" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Jeans/Standard-jeans-1.jpg" alt="Standard Jeans" title="Blue Standard Jeans">
                    <h2>Standard Jeans</h2>
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
                    <button onclick="cart(2.018)" id="2.018" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Jeans/Standard-jeans-2.jpg" alt="Standard Jeans" title="Black Standard Jeans">
                    <h2>Standard Jeans</h2>
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
                    <button onclick="cart(2.019)" id="2.019" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
                </div>
            </div>

            
            <div class="produkti">
                <div><img src="../images/Man/Jeans/Standard-jeans-3.jpg" alt="Standard Jeans" title="Pale Blue Standard Jeans">
                    <h2>Standard Jeans</h2>
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
                    <button onclick="cart(2.021)" id="2.021" class="add-to-cart"><img src="../images/Front/cart.png" alt="add-to-cart"></button>
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