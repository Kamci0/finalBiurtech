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
        dodaj("2");
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

                <p>Fotel biurowy Shine czarny</p><!---->

            </div>

            <div id="product">

                <img src="../../img/changing/chairs/chair2.jpg" alt=""><!---->

            </div>

            <div id="info">

                <div id="action">
                    
                    <span>1 335 PLN</span> 

                    <a href="chair2.php?name=true" id="adding" >Dodaj do koszyka</a>


                    </form>
                </div><!---->

                <br>

                <p>Fotel Shine zosta?? zaprojektowany z my??l?? o osobach, kt??re poza mod?? i stylowym designem zwracaj?? uwage na pochodzenie materia????w. Minimalistyczna, a jednocze??nie bardzo elegancka forma sprawia, ??e fotel biurowy Shine EFG 120BA, idealnie sprawdzi sie w domowym biurze jak i w firmie. Niemieccy projektanci w po????czeniu z w??oskim mechanizmem ??wiartowej klasy sprawil, ??e ko??o fotela Shine nie da si?? przejs?? oboj??tnie.</p><!---->

                <div id="bonus">
                    <p>Wymiary</p>

                    <img src="https://pim.elzap.eu/resource/wymiary-shine-120.png?w=700&amp;fit=crop&quot" alt="wymiary"><!---->
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
                    <li>Kamil G??owczy??ski</li>
                    <li>Oskar Urban</li>
                </ul>
            </div>

        </div>
    </div>
</body>
</html>