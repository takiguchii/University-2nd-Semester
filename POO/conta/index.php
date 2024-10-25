<?php
require_once('ContaBancaria.php');
require_once('ContaCorrente.php');
require_once('ContaPoupanca.php'); 

$conta1 = new ContaBancaria("Pedro", 0.00); 
$conta1->depositar(500.00); 
$conta1->titular();
$conta1->saldo(); 

$conta1->sacar(1000); 

echo "<h1>Conta Corrente</h1>";
$conta2 = new ContaCorrente("Maria", 500.00, 100);
$conta2->sacar(200); 

echo "<h1>Conta Poupança</h1>";
$conta3 = new ContaPoupanca("Ana", 1000.00); 
$conta3->renderJuros(); 