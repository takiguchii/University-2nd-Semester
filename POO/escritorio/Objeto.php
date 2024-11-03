<?php

require_once ("Item.php");

class Objeto extends Item {
    private float $peso;

    public function __construct(string $nome, string $descricao, float $peso) {
        parent::__construct($nome, $descricao);
        $this->setPeso($peso);
    }

    public function setPeso(float $peso): void {
        $this->peso = $peso;
    }

    public function getPeso(): float {
        echo "Peso: {$this->peso} <br>";
        return $this->peso;
    }
}
