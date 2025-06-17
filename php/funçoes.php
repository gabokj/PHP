<?php
echo "[" . date( format: "Y-M-m-d H:i:s ") . "] Gabriel " . strtoupper( string: " Salve rapaziada! ") . PHP_EOL;
echo "[" . date( format: "Y-M-m-d H:i:s ") . "] Mariana " . strtoupper( string: " Oii amor! ") . PHP_EOL;
echo "[" . date( format: "Y-M-m-d H:i:s ") . "] Guilherme " . strtoupper( string: " chupetinha! ") . PHP_EOL;

function sendMessage(string $nickname, string $message) : string
{
    return "[" . date( format: "Y-M-m-d H:i:s ") . "] $nickname: " . strtoupper( $message ) . PHP_EOL;
}
$result = sendMessage( nickname: "Gabriel", message: " Salve raapziada!");

sendMessage( nickname: "Gabriel", message: " Salve raapziada!");
sendMessage( nickname: "Mariana", message: " Oii amor!!");
sendMessage( nickname: "Gabriel", message: " chupetinha!");


function calculoBaseX(float $x, int $y) {

}
function sendMessageTerminal( string $user, string $message) {

}
