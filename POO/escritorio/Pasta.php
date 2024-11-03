<?php

require_once ("Item.php");

class Pasta extends Item {
    private string $categoria;

    public function __construct(string $nome, string $descricao, string $categoria) {
        parent::__construct($nome, $descricao);
        $this->setCategoria($categoria);
    }

    public function setCategoria(string $categoria): void {
        $this->categoria = $categoria;
    }

    public function getCategoria(): string {
        return $this->categoria;
    }
}
