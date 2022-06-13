<?php

function usun($co){
    
    for($i = 0 ; $i<=20 ; $i++){
        if($_SESSION['identity'][$i]==$co){
            $_SESSION['ilosc'] = $_SESSION['ilosc']-1;
            unset($_SESSION['identity'][$i]);
            break;
        }
    }            
        header("Location: ./cart.php");
}

?>