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
        dodaj("6");
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

                <p>Biurko Lofter LO9</p><!---->

            </div>

            <div id="product">

                <img src="../../img/changing/desks/desk2.webp" alt=""><!---->

            </div>

            <div id="info">

                <div id="action">
                    
                    <span>469 PLN</span> 
                    <a href="desk2.php?name=true" id="adding" >Dodaj do koszyka</a>
                </div><!---->

                <br>

                <p>Meble LOFTER to świetna propozycja do pokoju młodzieżowego jak i salonu. System składa się z 12 brył dzięki czemu każdy może dopasować zestaw według własnych potrzeb. Dzięki połączeniu betonu millenium z dębem wotan spełnią oczekiwania nawet najbardziej wymagających klientów.</p><!---->

                <div id="bonus">
                    <p>Wymiary</p>

                    <img style="width: 110%;" src="https://www.merkurymarket.pl/gfx/merkurymarket/_thumbs/sklep_oferta/87685/biurko_lofter_lo9_2,a4p0v5ebqFTw4YiqmplnarJphXd-kZ2p-jpg.webp" alt="wymiary"><!---->
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