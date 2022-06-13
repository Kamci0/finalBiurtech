<?php
    session_start();
    if(!isset($_SESSION['ilosc'])){
        $_SESSION['ilosc']=0;
        for($i=0 ; $i<=12 ; $i++){
            $_SESSION['identity'][$i]=" ";
        }
    }
    require_once("../adding.php");

    if (isset($_GET['name'])) {
        dodaj("9");
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>BIURTECH</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="icon" href="../../img/logo.jpg">
    <link rel="stylesheet" href="../products.css"/>
    <script src="../../cart/items.js"></script>
</head>
<body>
    
    <div id="container">

        <div id="header">

            <div id="logos">

                <img src="../../img/logo.jpg" alt="logo">

                <span><a href="../../main/mainP.php">BIURTECH</a></span>

                <a href="../../cart/cart.php" id="cart"><img src="../../img/shopping-cart .png" alt="koszyk"><span id="counter">
                    
                    <?php
                    
                        echo ":".$_SESSION['ilosc'];
                    
                    ?>
    
                    </span></a>

            </div>

            <div id="navi">

                <a href="../../desks/desksP.php">Biurka</a>

                <a href="../../chairs/chairsP.php">Fotele</a>

                <a href="../../ele/electronicsP.php">Elektronika</a>

            </div>

        </div>

        <div id="content">

            <div id="name">

                <p>Mysz APPLE Magic Mouse 2 Biała</p><!---->

            </div>

            <div id="product">

                <img src="../../img/changing/elec/elec1.jpg" alt=""><!---->

            </div>

            <div id="info">

                <div id="action">
                    
                    <span>400 PLN</span> 
                    <a href="elec1.php?name=true" id="adding" >Dodaj do koszyka</a>
                </div><!---->

                <br>

                <p>Magic Mouse 2 to bezprzewodowa mysz renomowanej marki Apple. Stworzona została z myślą o użytkownikach komputerów MacBook. Mysz zaprojektowano z dbałością o najmniejszy szczegół i z niebywałą precyzją. Przyciski i kółka rozmieszczono tak, aby użytkownik mógł się cieszyć precyzyjnym sterowaniem i płynnym działaniem.</p><!---->

                <div id="bonus">
                    <p>Wymiary</p>

                    <img style="width: 100%;" src="https://prod-api.mediaexpert.pl/api/images/gallery_500_500/thumbnails/images/93/935780/5.jpg" alt="wymiary"><!---->
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