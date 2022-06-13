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
        dodaj("7");
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

                <p>Biurko Berg 6 crem/dąb złoty</p><!---->

            </div>

            <div id="product">

                <img src="../../img/changing/desks/desk3.webp" alt=""><!---->

            </div>

            <div id="info">

                <div id="action">
                    
                    <span>399 PLN</span> 
                    <a href="desk3.php?name=true" id="adding" >Dodaj do koszyka</a>
                </div><!---->

                <br>

                <p>Kolekcja Berg idealni spełni się w aranżacji salonu czy pokoju dziennego. Ciekawie połączenie jasnego cremu z ciepłym kolorem dąb złoty sprawia, że wnętrze nabierze niezwykłego wyglądu. Ryflowane obrzeża oraz małe, zgrabne uchwyty nadają meblom elegancji. Głównym atutem systemu Berg jest funkcjonalność, pakowność oraz minimalistyczna stylistyka. Materiały i solidne wykonanie świadczą o wysokiej jakości mebli Berg.</p><!---->

                <div id="bonus">
                    <p>Wymiary</p>

                    <img style="width: 110%;" src="https://www.merkurymarket.pl/gfx/merkurymarket/_thumbs/sklep_oferta/26609/biurko_berg_6_cremdab_zloty,a4p0v5ebqFTw4Yiqmplna6lnhXt7mpqp-jpg.webp" alt="wymiary"><!---->
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