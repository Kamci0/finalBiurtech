<?php
    session_start();
    if(!isset($_SESSION['ilosc'])){
        $_SESSION['ilosc']=0;
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>BIURTECH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../shared.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/logo.jpg">
    <script src="../switchingPhotos.js"></script>
</head>
<body>
    
    <div id="container">

        <div id="header">

            <div id="logos">

                <img src="../img/logo.jpg" alt="logo">

                <span><a href="../main/mainP.php">BIURTECH</a></span>

                <a href="../cart/cart.php" id="cart"><img src="../img/shopping-cart .png" alt="koszyk"><span id="counter">
                    
                    <?php
                    
                        echo ":".$_SESSION['ilosc'];
                    
                    ?>
    
                    </span></a>

            </div>

            <div id="navi">

                <a href="../chairs/chairsP.php">Fotele</a>

                <a href="../ele/electronicsP.php">Elektronika</a>

            </div>

            <div id="name">
                <h3>Biurka</h3>
            </div>

        </div>

        <div id="content">

            <fieldset  id="upper">

                <legend>Promocje</legend>

                <div id="text">

                    <h1 id="headeU"></h1>

                    <p id="contentU">

                    </p>

                    <p id="price">
                        
                    </p>

                </div>

                <div id="product">

                    <button onclick="zamienPop()"><</button>

                    <a href="#" id="sudoP"><img id="photoSwap" src="#" alt="produk" value="abc"></a>

                    <button onclick="zamienNast()">></button>

                </div>

            </fieldset>

            <div id="lower">

                <div class="row">

                    <div class="photo">
                     <a href="../products/desks/desk1.php" class="linkP">
                          <img src="../img/changing/desks/desk1.webp" alt="produk" class="photoP">
                          <p class="nameP">Biurko Mati grafit</p>
                     </a>
                    </div>

                    <div class="photo">
                        <a href="../products/desks/desk2.php" class="linkP">
                             <img src="../img/changing/desks/desk2.webp" alt="produk" class="photoP">
                             <p class="nameP">Biurko Lofter LO9</p>
                        </a>
                       </div>

                       <div class="photo">
                        <a href="../products/desks/desk3.php" class="linkP">
                             <img src="../img/changing/desks/desk3.webp" alt="produk" class="photoP">
                             <p class="nameP">Biurko Berg 6 crem/dąb złoty</p>
                        </a>
                       </div>

                       <div class="photo">
                        <a href="../products/desks/desk4.php" class="linkP">
                             <img src="../img/changing/desks/desk4.webp" alt="produk" class="photoP">
                             <p class="nameP">136x66x18 Model 0 Czarny Low</p>
                        </a>
                       </div>

                </div>

                </div>

            </div>

        </div>

        <div id="footer">

            <div id="info">
                <ul>
                    <li>Dane kontaktowe:</li>
                    <li>e-mail: biurtech.kontakt@firma.com</li>
                    <li>numer telefonu: +48 987 765 453</li>
                    <li>fax: +420 224312850</li>
                </ul>
            </div>

            <div id="author">
                <ul>
                    <li>Kamil Głowczyński</li>
                    <li>Oskar Urban</li>
                </ul>
            </div>

        </div>

    </div>

</body>
</html>