<?php 

class ContaBancaria{
    private string $titular;
    private float $saldo;

    public function __construct($titular, $saldo ){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar(){

    }
    public function sacar(){

    }
    public function getsaldo(){
        
    }
}