<?php 

class ContaBancaria {
    private string $titular;
    private float $saldo;

    public function __construct(string $titular, float $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }


    public function setTitular(){
        $this->titular = $titular;
    }

    public function getTitular(){
        return $this-> titular;
    }

    public function setSaldo(){
        $this-> saldo = $saldo;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }
    
    public function depositar(float $valorDepositado): float {
        $this->saldo += $valorDepositado;
        return $this->saldo;
    }
    public function sacar(float $valorParaSacar): void {
        if ($valorParaSacar <= $this->saldo) {
            $this->saldo -= $valorParaSacar;
            echo "Saque realizado com sucesso... <br> Valor do saque: {$valorParaSacar}$ <hr>";
        } else {
            echo "Saque inválido. Saldo insuficiente. <hr>";
        }
    }
    public function saldo(){
        echo"Saldo Total: {$this->saldo} <hr>";
    }
    public function titular(){
        echo "<h1>","Titular: {$this->titular} </h1> <hr>";
    }


}
