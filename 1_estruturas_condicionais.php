<?php

echo "estruturas condicionais <br>";

// Estruturas condicionais que usem operadores e comparadores

// Para atingir resultados difeferentes no prog.
// If else, else if

$idade = 10;

if ( $idade >= 50){
    echo "Fique em casa você é do grupo de risco! <br>";
}
else if ( $idade >= 18) {
    echo "Você é adulto, mas só de idade mesmo! <br>";
}
else if ( $idade >= 16 ) {
    echo "Você é um aborrecente <br>";
}
else if ( $idade > 10 && $idade < 16) {
    echo "Essa geração tá fudi.... <br>";
}
else if ($idade <= 10){
    echo "Vai comer terra vai criança! <br >";
}





$nota = 3;

if ( $nota >= 10){
    echo 'Passou na matéria com perfeição <br>';
}
else if ( $nota >= 5) {
    echo 'Passou na materia com uma nota acima da média <br>';
}
else {
    echo "RE-PRO-VA-DO !!! <br>" ;
}



$velocidade = 500;

if ($velocidade >= 400) {
    echo ".... Vamos checar o pulso dele, tem chance de ainda estar vivo <br> morreu....<br>";
}
else if ($velocidade >= 300) {
    echo "Melhor desacelerar!!! <br>";
}
else if ($velocidade >= 200) {
    echo "Está indo muito rápido!!! <br>";
}
else if ($velocidade == 100) {
    echo 'Está indo rápido <br>';
}
else if ($velocidade <= 50) {
    echo "Está andando tranquilo!";
}





?>


