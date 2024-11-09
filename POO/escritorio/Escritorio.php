<?php

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
            echo "Índice esta inválido.O Armário não esta sendo encontrado.<br>";
        }
    }


    public function listarArmarios(): void {
        if (empty($this->armarios)) {
            echo "Não tem armários nestee escritório.<br>";
            return;
        }
        foreach ($this->armarios as $index => $armario) {
            echo "<li>Armário {$index}:<br>";
            $armario->listarGavetas(); 
            echo "</li><br>";
        }
    }
}

