<?php 

class Mochila{
    private string $capacidadeMaxima;
    private array $itens;

    public function __construct($capacidadeMaxima){
        $this->setCapacidadeMaxima($capacidadeMaxima);
    }

    public function setCapacidadeMaxima():void{
        $this->capacidadeMaxima = $capacidadeMaxima;
    }
    public function getCapacidadeMaxima(float $capacidadeMaxima):float{
        return $this-> capacidadeMaxima;
    }

    public function adicionarItem(Item $item,$peso):void{
        foreach()

    }
}