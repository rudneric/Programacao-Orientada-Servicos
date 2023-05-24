<?php
//I=inicio; F=FIM

$I1 = intval($argv[1]);
$F1 = intval($argv[2]);
$I2 = intval($argv[3]);
$F2 = intval($argv[4]);

function verificar($I1, $F1, $I2, $F2){
    if ($I1 < $F2 && $I2 < $F1) {
        return false;
    }else{
        return true;
    }
}

$conflitante = verificar($I1, $F1, $I2, $F2);
var_dump($conflitante);

?>