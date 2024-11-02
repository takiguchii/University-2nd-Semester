<?php

class Item{
    private string $nome;
    private string $descricao;

    public function __construct(){
        $this->setNome($nome);
        $this->setDescricao($descricao);
    }

    public function setNome(string $nome):void{
        $this->nome = $nome;

    }
    public function getNome():string{
        return nome;

    }
    public function setDescricao(string $descricao):void{
        $this->descricao = $descricao;
    }
    public function getDescricao():string{
        return getDescricao;
    }
    

}