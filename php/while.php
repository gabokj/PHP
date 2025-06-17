<?php

$pontodeVida = 100;
$maximodeVida = 100;

$ataqueinimigo = 25;

while ( $pontodeVida > 0) {
    echo "HP $pontodeVida/$maximodeVida" . PHP_EOL;
    echo "Personagem atacado! -$ataqueinimigo de HP!" . PHP_EOL;

    $pontodeVida -= $ataqueinimigo;

    if ($pontodeVida <= 0) {
        echo "HP $pontodeVida/$maximodeVida" . PHP_EOL;
        echo "Personagem morreu infelizmente" . PHP_EOL;
    }
}