<?php

    error_reporting(0);
    session_start();

    if(!isset($_SESSION['ilosc'])){
        $_SESSION['ilosc']=0;
        for($i=0 ; $i<=12 ; $i++){
            $_SESSION['identity'][$i]=" ";
        }
    }
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
    <link rel="stylesheet" href="delivery.css">
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

            <div id="left">

                <div id="head">

                    <span>Twoje zamówienie</span>

                </div>

                <div id="form">

                 <form action="../finished/finished.php" method="post">
                        <div class="input">
                            <label for="miasto">Miasto:</label>
                            <input type="text" name="miasto" required>
                        </div>
                        <div class="input">
                            <label for="ulica">Ulica:</label>
                            <input type="text" name="ulica" required>
                        </div>
                        <div class="input">
                            <label for="nrb">Numer budynku:</label>
                            <input type="text" name="nrb" required>
                        </div>
                        <div class="input">
                            <label for="nrl">Numer lokalu:</label>
                            <input type="text" name="nrl" required>
                        </div>

                        <div class="input">
                            <span>Dostawca: </span>     
                            <div class="option">
                                <input type="radio" name="wysylka" id="inpost" value="inpost" required>
                                <img src="../img/inpost_logo.png" alt="inpost">
                            </div>
                            <div class="option">
                                <input type="radio" name="wysylka" id="dhl" value="dhl" required>
                                <img src="../img/dhl.webp" alt="inpost">
                            </div>
                        </div>

                        <div class="input">
                                <span>Sposób płatności: </span>
                            <div class="option">
                                <input type="radio" name="platnosc" id="blik" value="blik" required>
                                <img src="../img/blik.webp" alt="blik">
                            </div>
                            <div class="option">
                                <input type="radio" name="platnosc" id="przelew" value="przelew" required>
                                <img src="../img/przelew.png" alt="przelew">
                            </div>
                        </div>

                        <div class="input">
                            <button type="submit" id="order">Zamawiam i płace</button>
                        </div>
                 </form>

                </div>

            </div>

            <div id="right">

                <div id="head">
                    <span>Zawartość zamówienia</span>
                </div>

                <div>
                <?php
                    require_once("../tabs.php");
                
                    for($i = 0 ; $i<=20 ; $i++){
                        if($_SESSION['identity'][$i]==1){
                            echo "
                            <div class=\"product\">
                                <span>$i.</span>
                                <span>$names[0] : </span>
                                <span>$prices[0]</span>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==2){
                            echo "
                            <div class=\"product\">
                                <span>$i.</span>
                                <span>$names[1] : </span>
                                <span>$prices[1]</span>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==3){
                            echo "
                            <div class=\"product\">
                                <span>$i.</span>
                                <span>$names[2] : </span>
                                <span>$prices[2]</span>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==4){
                            echo "
                            <div class=\"product\">
                                <span>$i.</span>
                                <span>$names[3] : </span>
                                <span>$prices[3]</span>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==5){
                            echo "
                            <div class=\"product\">
                                <span>$i.</span>
                                <span>$names[4] : </span>
                                <span>$prices[4]</span>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==6){
                            echo "
                            <div class=\"product\">
                                <span>$i.</span>
                                <span>$names[5] : </span>
                                <span>$prices[5]</span>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==7){
                            echo "
                            <div class=\"product\">
                                <span>$i.</span>
                                <span>$names[6] : </span>
                                <span>$prices[6]</span>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==8){
                            echo "
                            <div class=\"product\">
                                <span>$i.</span>
                                <span>$names[7] : </span>
                                <span>$prices[7]</span>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==9){
                            echo "
                            <div class=\"product\">
                                <span>$i.</span>
                                <span>$names[8] : </span>
                                <span>$prices[8]</span>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==10){
                            echo "
                            <div class=\"product\">
                                <span>$i.</span>
                                <span>$names[9] : </span>
                                <span>$prices[9]</span>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==11){
                            echo "
                            <div class=\"product\">
                                <span>$i.</span>
                                <span>$names[10] : </span>
                                <span>$prices[10]</span>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==12){
                            echo "
                            <div class=\"product\">
                                <span>$i.</span>
                                <span>$names[11] : </span>
                                <span>$prices[11]</span>
                            </div>                          
                            ";
                        }
                    }
                ?>
                </div>

                <div id="sum">

                    <span>Razem:</span>

                    <?php
                    
                    echo $_SESSION['suma'];

                    ?>

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