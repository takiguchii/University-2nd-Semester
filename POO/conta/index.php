<?php
require_once 'ContaBancaria.php';
require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';

$conta1 = new ContaCorrente("Pedro", 500, 100);
$conta2 = new ContaPoupanca(0.05);
$valorParaSacar = 600;

$conta1->titular();
$conta1->sacar($valorParaSacar);
$conta1->saldo();
$conta2->renderJuros();
