<?php 

class Produto{
    private string $nome;
    private float $preco;
    private string $setor;

    public function __construct(string $nome, float $preco, string $setor){
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setSetor($setor);
    }

    public function setNome(string $nome):void{
        $this->nome = $nome;
    }
    
    public function getNome():string{
        return $this->nome;
    }
    
    public function setPreco(float $preco):void{
        $this->preco = $preco;
    }
    
    public function getPreco():float{
        return $this->preco;
    }
    
    public function setSetor(string $setor):void{
        $this->setor = $setor;
    }
    
    public function getSetor():string{
        return $this->setor;
    }
}
