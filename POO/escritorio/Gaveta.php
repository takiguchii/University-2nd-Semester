<?php

require_once("Item.php");

class Gaveta {
    private array $itens = [];

    public function adicionarItem(Item $item) {
        array_push($this->itens, $item); 
    }
    public function getItens(): array {
        return $this->itens;
    }
    public function removerItem(string $nome) {
        for ($i = 0; $i < count($this->itens); $i++) {
            if ($this->itens[$i]->getNome() === $nome) { 
                unset($this->itens[$i]);
                $this->itens = array_values($this->itens); 
                echo "Item ( {$nome} ) foi removido com sucesso.<br>";
                return; 
            }
        }
        echo "Item ( {$nome} ) não foi encontrado.<br>";
    }
    public function listarItens(): void {
        if (empty($this->itens)) {
            echo "A gaveta está vazia.<br>";
            return;
        }
        echo "<h2>Itens na gaveta:</h2><ul>";
        foreach ($this->itens as $item) {
            echo "<li><b>Nome:</b> {$item->getNome()} <br>"; 
            echo "<b>Descrição:</b> {$item->getDescricao()} <br>"; 

            $tipo = get_class($item);
            if ($tipo == "Documento") {
                echo "<b>Data de Criação:</b> {$item->getDataCriacao()} <br>"; 
            } elseif ($tipo == "Objeto") {
                echo "<b>Peso:</b> {$item->getPeso()} kg<br>"; 
            } elseif ($tipo == "Pasta") {
                echo "<b>Categoria:</b> {$item->getCategoria()} <br>"; 
            }
            echo "</li><br>"; 
        }
        echo "</ul>";
    }
}
