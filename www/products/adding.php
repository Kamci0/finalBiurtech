<?php

function dodaj($name){

    if($_SESSION['ilosc']<20){
    $_SESSION['identity'][$_SESSION['ilosc']]=$name;
    $_SESSION['ilosc'] = $_SESSION['ilosc']+1;
    if($name==1){
        header("Location: chair1.php");
    }else if($name==2){
        header("Location: chair2.php");
    }else if($name==3){
        header("Location: chair3.php");
    }else if($name==4){
        header("Location: chair4.php");
    }else if($name==5){
        header("Location: desk1.php");
    }else if($name==6){
        header("Location: desk2.php");
    }else if($name==7){
        header("Location: desk3.php");
    }else if($name==8){
        header("Location: desk4.php");
    }else if($name==9){
        header("Location: elec1.php");
    }else if($name==10){
        header("Location: elec2.php");
    }else if($name==11){
        header("Location: elec3.php");
    }else if($name==12){
        header("Location: elec4.php");
    }
    }else{
        echo "<script type='text/javascript'>
            alert('Nie można więcej dodać');
        </script>";
    }

}
?>