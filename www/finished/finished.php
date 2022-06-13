<?php

    error_reporting(0);
    session_start();

    if(!isset($_SESSION['ilosc'])){
        $_SESSION['ilosc']=0;
        for($i=0 ; $i<=12 ; $i++){
            $_SESSION['identity'][$i]=" ";
        }
    }

    $miasto = $_POST['miasto'];
    $ulica = $_POST['ulica']; 
    $nrb = $_POST['nrb'];
    $nrl = $_POST['nrl'];
    $wysylka = $_POST['wysylka'];
    $platnosc = $_POST['platnosc'];

    $info = fopen("../info.txt", "w");
    $complete ="Miasto: ".$miasto."\nUlica: ".$ulica."\nNumer budynku:".$nrb."\nNumer lokalu: ".$nrl."\nFima wysyłkowa: ".$wysylka."\nPłaność: ".$platnosc;
    fwrite($info, $complete);


?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/logo.jpg">
    <title>BIURTECH</title>
    <link rel="stylesheet" href="finished.css">
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

                <a href="../desks/desksP.php">Biurka</a>

                <a href="../chairs/chairsP.php">Fotele</a>

                <a href="../ele/electronicsP.php">Elektronika</a>

            </div>

        </div>

        <div id="content">

            <div id="info">

                    <span id="head">Informacje</span>
                    <?php
                    
                    echo "
                        <span class=\"element\";>Miasto $miasto</span>
                        <span class=\"element\">Ulica $ulica</span>
                        <span class=\"element\">Numer budynku $nrb</span>
                        <span class=\"element\">Numer Lokalu $nrl</span>
                        <span class=\"element\">Fima wysylkowa $wysylka</span>
                        <span class=\"element\">Płatność $platnosc</span>
                    ";

                    ?>

                    <a href="../info.txt" download class="element">Pobierz informacje</a>
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