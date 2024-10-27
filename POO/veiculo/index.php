<?php

require_once("Carro.php");
require_once("Moto.php");

$carro = new Carro("Toyota", "Corolla", 2020, 4);
$moto = new Moto("Yamaha", "MT-07", 2021);

$carro->acelerar(50); 
$carro->imprimirVeiculo();
$carro->abrirPorta(1); 
$moto->acelerar(30); 
$moto->imprimirMoto();
$moto->empinar(); 
$carro->frear(20); 
$carro->imprimirVeiculo(true); 
$moto->frear(20);
$moto->imprimirMoto(true); 
