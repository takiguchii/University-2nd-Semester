<?php 


class ContaCorrente extends ContaBancaria {
    private int $limite;

    public function __construct(string $titular, float $saldo, int $limite) {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->limite = $limite;
    }

    public function setLimite(int $limite): void {
        $this->limite = $limite;
    }

    public function getLimite(): int {
        return $this->limite;
    }

    public function sacar(float $valorParaSacar): void {
        if ($valorParaSacar <= $this->saldo + $this->limite) {
            $this->saldo -= $valorParaSacar;
            echo "Saque realizado com sucesso... <br> Valor do saque: {$valorParaSacar}$ <hr>";
        } else {
            echo "Saque inválido.. Valor excede o saldo e o limite. <hr>";
        }
    }
}
