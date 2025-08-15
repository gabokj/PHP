<?php
class Carro {
    public $cor;
    public $modelo;


    public function andar(){
        echo "O Carro esta andando! <br>";
    }
}

$meuCarro = new Carro();
$meuCarro->cor = "vermelho";
$meuCarro->modelo = "sedan";
$meuCarro->andar();

echo "<br> O carro da cor {$meuCarro->cor}, do estilo {$meuCarro->modelo}, está em movimento.";
?>