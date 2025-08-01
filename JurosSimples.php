<?php

$capital = 500;
$taxa = 10;
$tempo = 12;

echo"O valor da captial é: R$ $capital" . "<br>";
echo "O valor da taxa é: $taxa%" . "<br>";
echo "O tempo da taxa é: $tempo Meses" . "<br>";

function juros ($capital, $taxa, $tempo){
    $juros = ($capital * $taxa * $tempo)/100;
    return $juros;
}
$valor_juros = juros ($capital, $taxa, $tempo);
$montante = ($capital + $valor_juros);

echo "<br>";

echo"O valor com juros é: R$ " . $valor_juros ."<br>";
echo "O valor do montante é: R$ ". $montante ."<br>";
?>