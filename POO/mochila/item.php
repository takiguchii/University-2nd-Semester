<?php

class Item{
    private string $nome;
    private float $peso;

    public function __contruct($nome,$peso){
        $this->setNome($nome);
        $this->setPeso($peso);
    }

    public function setNome():void{
        $this->nome = $nome;
    }
    public function getNome(string $nome):string{
        return $this-> nome;
    }
    public function setPeso():void{
        $this->nome = $nome;
    }
    public function getPeso(string $peso):string{
        return $this-> peso;
    }
}


