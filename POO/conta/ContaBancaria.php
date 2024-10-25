<?php 

class ContaBancaria {
    private string $titular;
    private float $saldo;

    public function __construct(string $titular, float $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function setTitular(string $titular){
        $this->titular = $titular;
    }

    public function getTitular(): string {
        return $this->titular;
    }

    public function setSaldo(float $saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function depositar(float $valorDepositado): float {
        $this->saldo += $valorDepositado;
        return $this->saldo;
    }

    public function sacar(float $valorSacar) {
        if ($valorSacar <= $this->saldo) {
            $this->saldo -= $valorSacar;
            echo "Saque efetuado com sucesso...";
            return $valorSacar; 
        } else {
            echo "Saque não efetuado";
            return false;
        }
    }

    public function saldo(){
        echo "Saldo Total: {$this->saldo} <hr>";
    }

    public function titular(){
        echo "<h1>Titular: {$this->titular} </h1> <hr>";
    }
}