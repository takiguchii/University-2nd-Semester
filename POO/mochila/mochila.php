<?php 

require_once("item.php");

class Mochila {
    private array $itens;
    private string $capacidadeMaxima;

    public function __construct($capacidadeMaxima) {
        $this->setCapacidadeMaxima($capacidadeMaxima);
        $this->itens = [];
    }

    public function setCapacidadeMaxima($capacidadeMaxima): void {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function getCapacidadeMaxima(): float {
        return $this->capacidadeMaxima;
    }

    public function adicionarItem(Item $itens): void {
        if($this->capacidadeMaxima < $item->getPeso() ){
            array_push($this->itens, $itens); 
            return;
        }
        echo"Deu ruim lek"; 
        
    }

    public function esvaziar(): void {
    }

    public function listarItens(): void {
        foreach ($this->itens as $item) {
            echo "Nome: " . $item->getNome() . ", Peso: " . $item->getPeso() . "\n";
        }
    }

    public function pesoAtual() {
     
    }
}

$mochila = new Mochila(10); 
$item1 = new Item("Bola", 11);
$mochila->adicionarItem($item1);
$mochila->listarItens();
