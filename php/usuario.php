<?php
class Usuario {
    private $nomeUsuario;
    private $email;
    private $senhaHash;
    private $estaAtivo;
    private $dataCriacao;

    public function __construct($nomeUsuario, $email, $senha) {
        $this->nomeUsuario = $nomeUsuario;
        $this->email = $email;
        $this->senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $this->estaAtivo = true;
        $this->dataCriacao = date("Y-m-d H:i:s");
    }

    public function exibirPerfil() {
        echo "Usuário: $this->nomeUsuario<br>";
        echo "Email: $this->email<br>";
        echo "Data de Criação: $this->dataCriacao<br>";
        echo "Status: " . ($this->estaAtivo ? "Ativo" : "Desativado") . "<br>";
    }

    public function alterarSenha($senhaAntiga, $senhaNova) {
        if (password_verify($senhaAntiga, $this->senhaHash)) {
            if (strlen($senhaNova) >= 8) {
                $this->senhaHash = password_hash($senhaNova, PASSWORD_DEFAULT);
                echo "Senha alterada com sucesso.<br>";
            } else {
                echo "A nova senha precisa ter no mínimo 8 caracteres.<br>";
            }
        } else {
            echo "Senha antiga incorreta.<br>";
        }
    }
    public function desativarConta() {
        $this->estaAtivo = false;
    }
    public function reativarConta() {
        $this->estaAtivo = true;
    }
}
$usuario = new Usuario("Gabo", "gabriel@email.com", "senai123");
$usuario->exibirPerfil();
$usuario->alterarSenha("senai120", "Senai456");
$usuario->desativarConta();
$usuario->exibirPerfil();
$usuario->reativarConta();
$usuario->exibirPerfil();
?>
