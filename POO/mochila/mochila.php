<?php 

require_once("item.php");

class Mochila {
    private array $itens = []; 
    private float $capacidadeMaxima;

    public function __construct(float $capacidadeMaxima) {
        $this->setCapacidadeMaxima($capacidadeMaxima);
    }

    public function setCapacidadeMaxima(float $capacidadeMaxima): void {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function getCapacidadeMaxima(): float {
        return $this->capacidadeMaxima;
    }

    public function adicionarItem(Item $itens): void {
        $pesoAtual = $this->calcPesoAtual(); 
        if ($pesoAtual + $itens->getPeso() <= $this->capacidadeMaxima) { 
            array_push($this->itens, $itens); 
            echo "<li>O item ( {$itens->getNome()} ) foi adicionado com sucesso </li>";
        } else {
            echo "<li> O item ( {$itens->getNome()} ) ultrapassou o peso máximo </li>";
        }
    }

    private function calcPesoAtual(): float {
        $pesoTotal = 0;
        foreach ($this->itens as $item) {
            $pesoTotal += $item->getPeso(); 
        }
        return $pesoTotal; 
    }

    public function esvaziar(): void { 
        $this->itens = [];
        echo "<hr>";
        echo "<b> Mochila Esvaziada com sucesso... </b>"; 
        echo "<hr>";
    }

    public function listarItens(): void {
        echo "<h3>Itens na mochila</h3>";
        foreach ($this->itens as $item) {
            echo "<ul>";
            echo "<li> -" . $item->getNome() . ": Peso: " . $item->getPeso() . "</li>";
            echo "</ul>";
        }
    }
}

// primeira instancia 
$mochila = new Mochila(10); 
$item1 = new Item("Bola", 2);
$mochila->adicionarItem($item1);
$item2 = new Item("Coquinha 2L", 5);
$mochila->adicionarItem($item2);
$item3 = new Item("Doritos", 2);
$mochila->adicionarItem($item3);
$mochila->listarItens(); 
$mochila->esvaziar();

// segunda instancia 
$mochila = new Mochila(5); 
$item1 = new Item("Caderno", 1);
$mochila->adicionarItem($item1);
$item2 = new Item("Estojo", 0.5);
$mochila->adicionarItem($item2);
$item3 = new Item("Apostilas", 3);
$mochila->adicionarItem($item3);
$item4 = new Item("Fone de ouvido", 0.2);
$mochila->adicionarItem($item4);
$item5 = new Item("Blusa de frio", 3);
$mochila->adicionarItem($item5);
$mochila->listarItens(); 
