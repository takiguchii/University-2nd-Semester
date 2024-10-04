<?php

class Conta{
    private string $banco;
    private string $agencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct($banco,$agencia,$numeroConta,$saldo){
        $this->setBanco($banco);
        $this->setAgencia($agencia);
        $this->setNumeroConta($numeroConta);
        $this->setSaldo($saldo);
    }
    public function setBanco(string $banco):void{
        $this->banco = $banco;
    }
    public function getBanco():string{
        return $this->banco;
    }
    public function setAgencia(string $agencia):void{
        $this->agencia = $agencia;
    }
    public function getAgencia():string{
        return $this->agencia;
    }
    public function setNumeroConta(string $numeroConta):void{
        $this->numeroConta =$numeroConta;
    }
    public function getNumeroConta():string{
        return $this->numeroConta;
    }
    public function setSaldo(float $saldo):void{
        if($saldo <= 0){
            $this->saldo = 0;
        }else{
            $this->saldo = $saldo;
        }
    }
    public function getSaldo():float{
        return $this->saldo;
    }
    public function deposito($deposito){
        if($deposito > 0 ){
            $this->saldo += $deposito;
            return true;
        }else{
            return false;
        }
    }
    public function saque($saque){
        if($saque <= $this->saldo){
            $this->saldo -= $saque;
            return true;
        }else{
            return false;
        }
    }
    public function infoUsuario(){
        echo"<h1> Usuario </h1>";
        echo"Banco:", $this->getBanco(),"<hr>";
        echo"Agencia: ", $this->getAgencia(),"<hr>";;
        echo"Conta: ", $this->getNumeroConta(),"<hr>";;
        echo"Saldo: ",$this->getSaldo(),"<hr>";;
    }
}

$info = new Conta("Nubank","002","0232344",2000);
$info->deposito($deposito = 2000);
$info->saque($saque = 500);
echo $info->infoUsuario();

$info = new Conta("Bradesco","001","0111244",0);
$info->deposito($deposito = 2000);
$info->saque($saque = 500);
echo $info->infoUsuario();