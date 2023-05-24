<?php

$num = intval($argv[1]);
function calculo($num){
    $somar = array_sum($num);
    $quantidade = count($num);
    $media = $somar/$quantidade;
    return $media;
}
$num = array_slice($argv, 1);
$numF = array_map('floatval', $num);

$media = calculo($numF);
var_dump($media);

?>