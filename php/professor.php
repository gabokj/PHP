<?php
namespace Escola;

class Professor {
    public $nome;
    public $disciplina;

    public function __construct($nome, $disciplina) {
        $this->nome = $nome;
        $this->disciplina = $disciplina;
    }

    public function apresentar() {
        echo "Olá, meu nome é {$this->nome} e ensino {$this->disciplina}.<br>";
    }
}
?>