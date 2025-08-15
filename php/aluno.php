<?php
namespace Alunos;

class Aluno {
    public $nome;
    public $Curso;

    public function __construct($nome, $Curso) {
        $this->nome = $nome;
        $this->Curso = $Curso;
    }

    public function apresentar() {
        echo "Olá, meu nome é {$this->nome} e estudo {$this->Curso}.<br>";
    }
}
?>

