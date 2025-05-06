<?php

echo 'variaveis e tipos de dados <br>';
echo 'Teste <br>';

// comentario
/*
 Comentántário de multiplas linhas

*/
$nome = 'Erick';
$idade = 19; 
 echo "Olá meu nome é $nome ";

 $sobrenome = "Gonçalves";

 echo "Meu nome completo é $nome  $sobrenome e tenho $idade anos" ;

 $somaIdade = $idade + 5;

 echo " mais 5 anos eu terei $somaIdade <br> ";

 // Bolean verdadeiro ou falso

 $podeDirijir = 'false';

 echo "$podeDirijir <br>";

 // Arrays - Listas

 $frutas = ["maça", "bananas", "uva"];

 echo "Primeira fruta => $frutas[0] <br>";



 $frutas [] = "Abacaxi";

 echo "$frutas[3] <br>"  ;

 // operadores 

  echo "Soma: " . (10 + 15) . "<br>";

  // copmparadores

  $number1 = 10;
  $number2 = 30;

  // = -> atribuição
  // == comparação
  // === -> identica
  echo "igualdade: " . ( $number1 == $number2 ? 'verdadeiro' : "falsa") . "<br>";

  // operadores lógicos 
  // && -> end
 // ! -> NOT

 $idadePessoa = "20";
 $habilitadoParaDirijir = false;
 
 echo "é maior de idade?" . (($idade >= 18 || $habilitadoParaDirijir) ? " Sim" : "Não" . "<br>");

 // Opereadores de atribuiçãõ 

 



?>