<?php

class Conta{
    private string $banco;
    private string $agencia;
    private string $numeroConta;
    private float $saldo;

    public function __contruct($banco,$agencia,$numeroConta,$saldo){
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
    public function setNumeroConta(string $agencia):void{
        $this->numeroConta =$numeroConta;
    }
    public function getNumeroConta():string{
        return $this->numeroConta;
    }
    public function setSaldo(float $saldo):void{
        if($saldo <= 0){
            $this->saldo = 0;
        }else{
            $salario = $this->salario;
        }
    }
    public function getSaldo():float{
        return $this->saldo;
    }

    
    //funções 
    public function deposito($deposito){
        if($deposito > 0 ){
            return true;
        }else{
            return false;
        }
    }

    public function infoUsuario(){

    }
}