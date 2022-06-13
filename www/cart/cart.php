<?php

    error_reporting(0);
    session_start();

    if(!isset($_SESSION['ilosc'])){
        $_SESSION['ilosc']=0;
        for($i=0 ; $i<=12 ; $i++){
            $_SESSION['identity'][$i]=" ";
        }
    }

    require_once("removing.php");

    if (isset($_GET['name'])) {
        $name=$_GET['name'];
        usun($name);
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
    <link rel="stylesheet" href="cart.css">
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

            <div id="number">
                <p>
                    Ilość elementów :
                    <?php
                        echo $_SESSION['ilosc'];
                    ?>
                    /20
                </p>
            </div>

            <fieldset id="inside">

                <legend>Koszyk</legend>

                <?php
                    require_once("../tabs.php");
                
                    for($i = 0 ; $i<=20 ; $i++){
                        if($_SESSION['identity'][$i]==1){
                            echo "
                            <div class=\"product\">
                                <img src=\"$photos[0]\">
                                <span>$names[0]</span>
                                <span>$prices[0]</span>
                                <a href=\"cart.php?name=1\" id=\"removing\" >Usuń</a>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==2){
                            echo "
                            <div class=\"product\">
                                <img src=\"$photos[1]\">
                                <span>$names[1]</span>
                                <span>$prices[1]</span>
                                <a href=\"cart.php?name=2\" id=\"removing\" >Usuń</a>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==3){
                            echo "
                            <div class=\"product\">
                                <img src=\"$photos[2]\">
                                <span>$names[2]</span>
                                <span>$prices[2]</span>
                                <a href=\"cart.php?name=3\" id=\"removing\" >Usuń</a>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==4){
                            echo "
                            <div class=\"product\">
                                <img src=\"$photos[3]\">
                                <span>$names[3]</span>
                                <span>$prices[3]</span>
                                <a href=\"cart.php?name=4\" id=\"removing\" >Usuń</a>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==5){
                            echo "
                            <div class=\"product\">
                                <img src=\"$photos[4]\">
                                <span>$names[4]</span>
                                <span>$prices[4]</span>
                                <a href=\"cart.php?name=5\" id=\"removing\" >Usuń</a>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==6){
                            echo "
                            <div class=\"product\">
                                <img src=\"$photos[5]\">
                                <span>$names[5]</span>
                                <span>$prices[5]</span>
                                <a href=\"cart.php?name=6\" id=\"removing\" >Usuń</a>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==7){
                            echo "
                            <div class=\"product\">
                                <img src=\"$photos[6]\">
                                <span>$names[6]</span>
                                <span>$prices[6]</span>
                                <a href=\"cart.php?name=7\" id=\"removing\" >Usuń</a>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==8){
                            echo "
                            <div class=\"product\">
                                <img src=\"$photos[7]\">
                                <span>$names[7]</span>
                                <span>$prices[7]</span>
                                <a href=\"cart.php?name=8\" id=\"removing\" >Usuń</a>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==9){
                            echo "
                            <div class=\"product\">
                                <img src=\"$photos[8]\">
                                <span>$names[8]</span>
                                <span>$prices[8]</span>
                                <a href=\"cart.php?name=9\" id=\"removing\" >Usuń</a>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==10){
                            echo "
                            <div class=\"product\">
                                <img src=\"$photos[9]\">
                                <span>$names[9]</span>
                                <span>$prices[9]</span>
                                <a href=\"cart.php?name=10\" id=\"removing\" >Usuń</a>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==11){
                            echo "
                            <div class=\"product\">
                                <img src=\"$photos[10]\">
                                <span>$names[10]</span>
                                <span>$prices[10]</span>
                                <a href=\"cart.php?name=11\" id=\"removing\" >Usuń</a>
                            </div>                          
                            ";
                        }else if($_SESSION['identity'][$i]==12){
                            echo "
                            <div class=\"product\">
                                <img src=\"$photos[11]\">
                                <span>$names[11]</span>
                                <span>$prices[11]</span>
                                <a href=\"cart.php?name=12\" id=\"removing\" >Usuń</a>
                            </div>                          
                            ";
                        }
                    }
                ?>

                <div class="product">

                    <?php
                        if($_SESSION['ilosc']>=20){
                            echo "<p id=\"pls\">Koszyk jest pełny</p>";
                        }else{
                            echo "<p id=\"pls\">Dodaj do koszyka <a href=\"../main/mainP.php\" id=\"plus\"> +</a></p>";
                        }
                    ?>         
                </div>   

            </fieldset>

            <div id="delivery">

                    <p>Zamów zawartość koszyka wartą: 

                    <?php

                    $suma=0;

                    if(isset($_SESSION['suma'])){
                        for($i = 0 ; $i<=$_SESSION['ilosc']-1 ; $i++){
                            if($_SESSION['identity'][$i]==1){
                                $suma+= 1999;
                            }else if($_SESSION['identity'][$i]==2){
                                $suma+=1335;
                            }else if($_SESSION['identity'][$i]==3){
                                $suma+=1966;
                            }else if($_SESSION['identity'][$i]==4){
                                $suma+=2220;
                            }else if($_SESSION['identity'][$i]==5){
                                $suma+=369;
                            }else if($_SESSION['identity'][$i]==6){
                                $suma+=439;
                            }else if($_SESSION['identity'][$i]==7){
                                $suma+=399;
                            }else if($_SESSION['identity'][$i]==8){
                                $suma+=289;
                            }else if($_SESSION['identity'][$i]==9){
                                $suma+=400;
                            }else if($_SESSION['identity'][$i]==10){
                                $suma+=360;
                            }else if($_SESSION['identity'][$i]==11){
                                $suma+=499;
                            }else if($_SESSION['identity'][$i]==12){
                                $suma+=139;
                            }
                        }
                        echo $suma;
                        $_SESSION['suma']=$suma;
                    }else{
                        echo $_SESSION['suma']=$suma;
                    }
                        
                    ?>
                    </p>

                    <a href="../delivery/delivery.php">Zamów</a>

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
                    <li>numer w dzienniku: 7</li>
                </ul>
            </div>

        </div>
    </div>
</body>
</html>