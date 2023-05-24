<?php

$X1 = intval($argv[1]);
$X2 = intval($argv[2]);
$Y1 = intval($argv[3]);
$Y2 = intval($argv[4]);

$diferencaX = $X2 - $X1;
$diferencaY = $Y2 - $Y1;

$dist =sqrt(($diferencaX ** 2) + ($diferencaY ** 2));
var_dump($dist);

?>