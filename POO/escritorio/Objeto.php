<?php

class Objeto extends Iten{
    private float $peso;

    public function __construct($nome,$descricao,$peso){
        $this->setPeso($peso);
        parent:: __construct($nome,$descricao);
    }
    public function setPeso(float $peso):void{
        $this->peso = $peso;
    }
    public function getPeso():float{
        return peso; 
    }
    
}   