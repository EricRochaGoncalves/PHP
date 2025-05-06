<?php

// funções são blocos de códigos que serão reutilizados

function boasVindas(){
  
}
boasVindas( );



function boasVindas2( $nome ){
    echo "seja bem vindo $nome";
}
boasVindas2( "Eric <br>" );

function soma($a, $b) {
    return $a + $b;

}
$resultado = soma(4, 7);

    echo "O resultado é $resultado <br>";

    // funções da linguagem

    $tamanho = strlen("Esse é o meu texto");

    echo "O tamanho desse texto é $tamanho";

?>