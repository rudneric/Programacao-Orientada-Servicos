<?php

$caminho = $argv[1];

function exibir($caminho){
    $conteudo = file_get_contents($caminho);
    return $conteudo;
}
var_dump(exibir($caminho));

?>