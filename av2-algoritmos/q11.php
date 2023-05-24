<?php

$num = intval($argv[1]);
function calcular($num) {
    if ($num == 1 || $num == 2) {
        return 1;
    } else {
        $nacci = [1, 1];

        for ($i = 2; $i < $num; $i++) {
            $nacci[$i] = $nacci[$i - 1] + $nacci[$i - 2];
        }
        return $nacci[$num - 1];
    }
}

$termo = calcular($num);
var_dump($termo);

?>