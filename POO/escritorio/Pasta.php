<?php

class Pasta extends Item{
    private string $categoria;

    public function __construct($nome,$descricao,$categoria){
        $this->setCategoria($categoria);
        parent:: __construct($nome,$descricao,$categoria);
    }
    public function setCategoria():void{
        $this->categoria = $categoria;
    }
    public function getCategoria():string{
        return categoria;
    }
}