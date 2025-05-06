<?php
 echo "Laços/ estruturas de repetição";

 //while, do while, for

for($i = 0; $i <= 10; $i++) {
    echo "Número $i <br>";

    if ($i > 5 ){
        echo "opa!!!!! <br>" ;
    }


}
// while
$contador = 1;

while ($contador <= 10){
    echo "Número $contador <br>";

    $contador++;
     
}
// Loop infinito


// for each

$frutas = ["Maçã", "uva", "Banana", "Laranja"];

foreach($frutas as $frutas){
    echo "Fruta $frutas <br> "; 

}
$pessoas = [
    "Matheus" => 3000,
    "Maria" => 4000,
    "Joana" => 6000,
    "Cleber" => 9000,
];

echo '->' . $pessoas ['Matheus'];
foreach($pessoas as $pessoas => $salario){
    echo 'Dados: $pessoa ganha $salario <br>';
}


?>