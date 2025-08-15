<?php

require_once("professor.php");
require_once("aluno.php");

use Escola\professor;
use Alunos\aluno;

$professor = new Professor("Alex", "Back-end");
$aluno = new Aluno("Gabriel","TI");

$professor ->apresentar();
$aluno ->apresentar();
?>