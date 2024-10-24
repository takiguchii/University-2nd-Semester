<?php 

require_once ("ContaBancaria.php");

class ContaPoupanca extends ContaBancaria{
    
    private float $juros;

    public function __construct(float $juros){
        $this-> juros = $juros;
    }

    public function renderJuros():void{
        $juros_final = $this->juros * $this->saldo;
        echo "O valor do juros é {$juros_final}";
    }
}