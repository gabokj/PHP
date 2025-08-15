<?php

class Frutas {

    public  $frutas;
    public $cor;

    public function valor () {
        return "R$ 5,00 kg ";
    }
}

$MinhaFrutas = new Frutas();
$MinhaFrutas->cor = ("Amarela");
$MinhaFrutas->frutas = ("Banana");

echo "<br> O valor da {$MinhaFrutas->frutas} é {$MinhaFrutas->valor()} da cor {$MinhaFrutas->cor}";
?>