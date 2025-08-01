<?php

$Data = new DateTime();
$Data_->setTimeZone (new DateTimeZone('America/Sao_Paulo'));
echo "O Horario em São Paulo-BR é: " . $Data->format("H:i:s");
?>