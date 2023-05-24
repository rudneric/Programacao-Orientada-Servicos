<?php

function conversor_tempo($time){
    $hour = intdiv($time, 3600);
    $minute = intdiv($time % 3600, 60);
    $second = $time % 60;

    return "{$hour}h{$minute}m{$second}";
}

$hora_segundos = intval($argv[1]);
$duracao = conversor_tempo($hora_segundos);
var_dump($duracao);
?>