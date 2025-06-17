<?php

/**
 *Operadores: + = == 
 *
 * Operador de União +
 * 
 */

$user = [
    "name" => "Gabriel",
    "age" => 20,
];

$workplace = [
    "companyname" => "Senai",
    "role" => "back-end developer"
];

$all = $user + $workplace;

print_r($all);

//igualdade ==
$userOne = [
    "name" => "Mariana",
    "age" => 18,
    "stats" => "namorando"
];

$userTwo = [
    "name" => "Gabo",
    "age" => 20,
    "stats" => "namorando"
];

var_dump( value: $userOne == $userTwo);

//identico ===

$userOne = [
    "name" => "Mariana",
    "age" => 18,
    "stats" => "namorando"
];

$userTwo = [
    "name" => "Gabo",
    "age" => 20,
    "stats" => "namorando"
];

var_dump( value: $userOne === $userTwo);