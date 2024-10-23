<?php 

require_once 'contabancaria.php';
require_once 'contacorrente.php';
require_once 'contapoupanca.php';

$conta1 = new ContaBancaria("Pedro", 200.2);
$valorParaSacar = 100;
$conta1 ->titular();
$conta1->sacar($valorParaSacar);
$conta1 ->saldo();


