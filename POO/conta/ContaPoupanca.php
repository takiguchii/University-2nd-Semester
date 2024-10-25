<?php 

require_once("ContaBancaria.php");

class ContaPoupanca extends ContaBancaria {
    
    private float $juros;

    public function __construct(string $titular, float $saldo, float $juros = 5.0) {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->juros = $juros;
    }
    
    public function setJuros(float $juros): void {
        $this->juros = $juros;
    }

    public function getJuros(): float {
        return $this->juros;
    }

    public function renderJuros(): void {
        echo "Saldo: {$this->saldo}$ <br>";
        $jurosAdicionados = $this->saldo * ($this->juros / 100); 
        $this->saldo += $jurosAdicionados; 
        echo "O saldo com juros de: {$this->juros}% é {$this->saldo} <hr>";
    }
}
