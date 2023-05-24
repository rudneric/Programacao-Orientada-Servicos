<?php

$string = $argv[1];
function calcular($string){
    $num = explode(" ", $string);
    $numF = array_map('floatval', $num);
    $somar = array_sum($numF);
    $quantidade = count($numF);
    $media = $somar/$quantidade;
    
    return $media;
}
$media = calcular($string);
var_dump($media);

?>