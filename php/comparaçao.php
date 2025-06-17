<?php

//Operador de igualdade ==

var_dump( value: 1 == 1);
var_dump( value: 2 == 1);
$password = "Secret";
var_dump( value: $password == "Secret123");

//Operador diferente !=

var_dump( value: 1 != 2);
$password = "lalala";
var_dump( value: $password != "Secret123");

//Operador identico ===

var_dump (value: 1 === "1");
var_dump (value: 1 === 1);

//Operador de maior >

$number = 6;
var_dump ( value: 6 > 7);
var_dump ( value: $number > 5);
var_dump ( value: $number >= 6);

//Operador menor <

$number = 6;
var_dump ( value: 6 < 7);
var_dump ( value: $number < 5);
var_dump ( value: $number >= 6);