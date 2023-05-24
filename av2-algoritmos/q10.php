<?php

$num = intval($argv[1]);
function calculando_fatorial($num){
    if ($num == 0 || $num == 1) {
        return 1;
    } else {
        $fatorial = 1;
        for ($i = 2; $i <= $num; $i++){
            $fatorial *= $i;
        }
        return $fatorial;
    }
    
}

$fatorial = calculando_fatorial($num);

var_dump($fatorial);

?>