<?php
require_once("Veiculo.php");

class Moto extends Veiculo {
    public function __construct(string $marca, string $modelo, int $ano) {
        parent::__construct($marca, $modelo, $ano);
    }

    public function imprimirMoto(): void {
        echo "Velocidade da moto {$this->getMarca()} {$this->getModelo()}: {$this->getVelocidadeAtual()} km/h.<br>";
    }

    public function empinar(): void {
        if ($this->getVelocidadeAtual() > 20) {
            echo "A moto {$this->getMarca()} {$this->getModelo()} está empinando!<br>";
        }
    }
}
