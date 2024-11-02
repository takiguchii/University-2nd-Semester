<?php

class Documento extends Item{
    private string $dataCriacao;

    public function __construct($nome,$descricao,$dataCriacao){
        $this->setDataCriacao($dataCriacao);
        parent:: __construct($nome,$descricao);
    }

    public function setDataCriacao(){
        $this->dataCriacao = $dataCriacao;
    }

    public function getDatacriacao(){
        return dataCriacao; 
    }
}

