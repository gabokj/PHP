<?php

$user = [
    [
        "name" => "Gabriel",
        "Age" => 20,
        "emplopyed" => "Estudante"
    ],
    [
        "name" => "Mariana",
        "Age" => 18,
        "emplopyed" => "Estudante"
    ],
    [
        "name" => "Guilherme",
        "Age" => 5,
        "emplopyed" => "Estudante"
    ],
    [
        "name" => "Cauã",
        "Age" => 18,
    "emplopyed" => "Sim"
    ]
];

foreach ($user as $key => $value) {
    echo $key . "  " . $value["name"] . PHP_EOL;
}

$user = new StdClass;
$user ->name = "Gabriel";
$user ->age = 20;
foreach ($user as $key => $value){
    echo $key . "  " . $value . PHP_EOL;
}

$names = ["Gabriel", "Mariana", "Guilherme", "Cauã"];

foreach ($names as $key => $name) {
    echo $key . "  " . $name . PHP_EOL;
}
