<?php 

class Mochila{
    private array $itens;
    private string $capacidadeMaxima;

    public function __construct($capacidadeMaxima){
        $this->setCapacidadeMaxima($capacidadeMaxima);
    }

    public function setCapacidadeMaxima():void{
        $this->capacidadeMaxima = $capacidadeMaxima;
    }
    public function getCapacidadeMaxima(float $capacidadeMaxima):float{
        return $this-> capacidadeMaxima;
    }

    public function adicionarItem(Item $nome,$peso):void{
        array_push($this->itens, Item);

    }
}