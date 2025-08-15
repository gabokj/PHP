<?php
namespace Loja;

class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function mostrar() {
        echo "Produto da Loja: {$this->nome}, Preço: R$ {$this->preco}<br>";
    }
}

$produto1 = new Produto('Iphone 15', 1500);
$produto1->mostrar();

$produto2 = new Produto('Iphone 15 Pro Max', 3000);
$produto2->mostrar();
?>