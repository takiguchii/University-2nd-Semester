<?php

require_once("Item.php");
require_once("Objeto.php");
require_once("Pasta.php");
require_once("Documento.php");
require_once("Gaveta.php");

class Armario {
    private array $gavetas = [];

    public function getGavetas(): array {
        return $this->gavetas;
    }
    public function adicionarGaveta(Gaveta $gaveta): void {
        $this->gavetas[] = $gaveta;
    }

    public function removerGaveta(int $indice): void {
        if (isset($this->gavetas[$indice])) {
            unset($this->gavetas[$indice]);
            $this->gavetas = array_values($this->gavetas); 
            echo "Gaveta foi removida do armário.<br>";
        } else {
            echo "Gaveta não foi encontrada usando o índice {$indice}.<br>";
        }
    }

    public function listarGavetas(): void {
        if (empty($this->gavetas)) {
            echo "O armário está vazio.<br>";
            return;
        }
        echo "<h3>Conteúdo do Armário:</h3><ul>";

        foreach ($this->gavetas as $indice => $gaveta) {
            echo "<li><b>Gaveta {$indice}:</b><br>";
            $gaveta->listarItens();  
            echo "</li><br>";
        }
        echo "</ul>";
    }
}
