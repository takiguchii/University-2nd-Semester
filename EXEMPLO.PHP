<?php 
class Item {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

class Mochila {
    private $itens = [];

    
    public function adicionarItem(Item $item) {
        array_push($this->itens, $item);
    }

    // Método para listar os itens
    public function listarItens() {
        foreach ($this->itens as $item) {
            echo $item->getNome() . "\n"; 
        }
    }
}

$mochila = new Mochila();
$item1 = new Item("Livro");
$item2 = new Item("Caderno");

// Adicionando itens à mochila
$mochila->adicionarItem($item1);
$mochila->adicionarItem($item2);

// Listando itens
$mochila->listarItens();  
?>


<b> </b>