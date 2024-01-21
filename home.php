<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilimet.css">

    <title>Front page</title>
</head>
<body>
 
 
<?php include 'header.php'; ?>

    <main>
       
        <div class="search">
            <div>
            <input type="text" placeholder="Search" id="search">
            <button class="butoni_bg"><img src="images/Front/search.png" alt="butoni_bg"></button>
            </div>
        </div>

        <div class="WomanMan">
            <a href="woman/woman.php" style="text-decoration: none;"> <fieldset>
                <legend>WOMAN</legend>
                <img name="slideW" id="slideshowW"/>
            </fieldset></a>
           
          <a href="man/man.php"style="text-decoration: none;">  <fieldset>
                <legend>MAN</legend>
                <img name="slideshow" id="slideshowM"/>
            </fieldset></a>
        </div>
    </main>
    
    <?php include 'footer.php'; ?>
</body>


    <script src="funksionet.js"></script>
  
</body>
</html>