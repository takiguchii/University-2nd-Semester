<?php

require_once("Item.php");
require_once("Objeto.php");
require_once("Pasta.php");
require_once("Documento.php");
require_once("Gaveta.php");
require_once("Armario.php");

class Escritorio {
    private array $armarios = []; 

    public function adicionarArmario(Armario $armario): void {
        $this->armarios[] = $armario;
        echo "Armário foi adicionado ao escritório.<br>";
    }

    public function removerArmario(int $indice): void {
        if (isset($this->armarios[$indice])) { 
            unset($this->armarios[$indice]);
            $this->armarios = array_values($this->armarios);
            echo "Armário foi removido com sucesso.<br>";
        } else {
            echo "Índice está inválido. O Armário não está sendo encontrado.<br>";
        }
    }

    public function listarArmarios(): void {
        if (empty($this->armarios)) {
            echo "Não tem armários neste escritório.<br>";
            return;
        }
        foreach ($this->armarios as $index => $armario) {
            echo "<li>Armário {$index}:<br>";
            $armario->listarGavetas(); 
            echo "</li><br>";
        }
    }

    public function auditoria(): void {
        if (count($this->armarios) === 0) {
            echo "O escritório está vazio. <br>";
            return;
        }
        echo "<hr>";
        echo "<h2>Auditoria:</h2>";
        foreach ($this->armarios as $armarioIndex => $armario) {

            echo "<ul>";
            echo "<li>Armário ",($armarioIndex + 1),":</li>";
            $gavetas = $armario->getGavetas();
        
            if (count($gavetas) === 0) {
                echo "<li>Sem gavetas.</li>";
            } else {
                echo "<ul>";
                foreach ($gavetas as $gavetaIndex => $gaveta) {
                    echo "<li>Gaveta ",($gavetaIndex + 1),":</li>";
                    $itens = $gaveta->getItens();
        
                    if (count($itens) === 0) {
                        echo "<li>Sem itens.</li>";
                    } else {
                        echo "<ul>";
                        foreach ($itens as $item) {
                            echo "<li>Nome: {$item->getNome()}</li>";
                            echo "<li>Descrição: {$item->getDescricao()}</li>";
        
                            if ($item instanceof Documento) {
                                echo "<li>Data de Criação: {$item->getDataCriacao()}</li>";
                            } elseif ($item instanceof Objeto) {
                                echo "<li>Peso: {$item->getPeso()} kg</li>";
                            } elseif ($item instanceof Pasta) {
                                echo "<li>Categoria: {$item->getCategoria()}</li>";
                            }
                        }
                        echo "</ul>";
                    }
                }
                echo "</ul>";
            }
            echo "</ul>";
        }
        
    }
    
    
}
