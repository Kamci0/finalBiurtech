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
        dodaj("8");
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

                <p>136x66x18 Model 0 Czarny Low</p><!---->

            </div>

            <div id="product">

                <img src="../../img/changing/desks/desk4.webp" alt=""><!---->

            </div>

            <div id="info">

                <div id="action">
                    
                    <span>289 PLN</span> 
                    <a href="desk4.php?name=true" id="adding" >Dodaj do koszyka</a>
                </div><!---->

                <br>

                <p>Biurka GAMINGOWE DAMING seria LOW są stworzone z myślą o graczach, youtuberach, a także wymagających użytkownikach, którzy cenią sobie jakość i desing. Nasze biurka GAMINGOWE nie dość że mają wyjątkowy wygląd są solidne i trwałe. Każde biurko robione jest przez doświadczonego stolarza a nie hurtowo, przez co biurka są najwyższej jakości. Posiada gruby wytrzymały blat, regulowane nogi,  taśmę led.</p><!---->

                <div id="bonus">
                    <p>Wymiary</p>

                    <img style="width: 110%;" src="https://www.merkurymarket.pl/gfx/merkurymarket/_thumbs/sklep_oferta/95659/biurko_gamingowe_136x66x18_model_0_czarny_low_3,a4p0v5ebqFTw4Yiqmplna6lpiXV_lZql-jpg.webp" alt="wymiary"><!---->
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