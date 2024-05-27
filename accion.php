<?php
    $A = (int)$_POST['A'];
    $B = (int)$_POST['B'];
    $C = (pow($A,2) + pow($B,2))/ (2*$A);
    if($C > 80){
        echo "Resultado Correcto";
    }
    else{
        echo "Resultado Incorrecto";
    }
?>