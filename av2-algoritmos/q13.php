<?php

$string = $argv[1];

function transformer ($string){
    $num = explode(" ", $string);
    $numInt = array_map('intval', $num);
    return $numInt;
}
$num = transformer($string);
var_dump($num);

?>