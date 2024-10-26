<?php

require_once("Veiculo.php");

$veiculo1 = new Veiculo("Honda","Civic",1998);
$quantidade = 100;
$veiculo1->acelerar($quantidade);
$veiculo1->acelerar();