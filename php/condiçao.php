<?php

$name = "Mariana";
$employed = true;
$age = 20;

if($name == "Gabriel") {
    echo "acesse o Linkedin de Gabriel" . PHP_EOL;
} else if($name == "Mariana"){
    echo "Mariana namora com o Gabriel" . PHP_EOL;
} else{
    echo "Você ainda não contratou ele?" . PHP_EOL;
}

if (($age <= 18) || $employed){
    echo "Você é maior de idade, acesso liberado!" ;
} else{
    echo "Você é menor de idade, acesso negado!" ;
}