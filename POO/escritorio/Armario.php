<?php 

class Armario {
    private array $gavetas;

    public function adicionarGaveta(Gaveta $gavetas){
        array_push($this->gavetas, $gavetas); 
    }

    public function removerGaveta($indece){
        for($i = 0; $i <count($this->gavetas);$i++){

        }

    }
    public function listarGaveta(){

    }

}