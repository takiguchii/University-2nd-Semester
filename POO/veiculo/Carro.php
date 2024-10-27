<?php
require_once("Veiculo.php");

class Carro extends Veiculo {
    private int $portas;

    public function __construct(string $marca, string $modelo, int $ano, int $portas) {
        parent::__construct($marca, $modelo, $ano);
        $this->setPortas($portas);
    }

    public function setPortas(int $portas): void {
        $this->portas = $portas;
    }

    public function getPortas(): int {
        return $this->portas;
    }

    public function abrirPorta(int $numeroPorta): void {
        if ($numeroPorta > $this->portas || $numeroPorta <= 0) {
            echo "Porta inválida.<br>";
        } else {
            echo "Porta {$numeroPorta} do carro {$this->marca} {$this->modelo} foi aberta.<br>";
        }
    }
}
