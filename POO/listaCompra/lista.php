<?php 

require_once("produto.php");

class lista {
    private array $Produto;
    private string $mercado;
    private string $dataCompra;

    public function __construct($produtos,$mercado,$dataCompra){
        $this->setProdutos($produtos);
        $this->setMercado($mercado);
        $this->setDataCompra($dataCompra);
    }

    public function setProdutos():void{

    }
    public function getProdutos(){

    }
    public function setMercado():void{

    }
    public function getMercado(){

    }
    public function setDataCompra():void{

    }
    public function getDataCompra(){

    }
}
