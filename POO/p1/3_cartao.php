<?php

class Cartao{
    private string $banco;
    private string $bandeira;
    private float $limite;
    private float $fatura;

    public function __construct($banco, $bandeira, $limite){
        $this->setBanco($banco);
        $this->setBandeira($bandeira);
        $this->setLimite($limite);
    }

    public function setBanco(string $banco):void{
        $this-> banco = $banco;
    }
    public function getBanco():string{
        return $this->banco; 
    }
    public function setBandeira(string $bandeira):void{
        $this-> bandeira = $bandeira;
    }
    public function getBandeira():string{
        return $this->bandeira;
    }
    public function setLimite(int $limite):void{
        $this-> limite = $limite;
    }
    public function getLimite():int{
        return $this->limite;
    }
    public function setFatura(float $fatura):void{
        $this-> fatura = $fatura; 
    }
    public function getFatura():float{
        return $this->fatura; 
    }

    public function fazerCompra(float $valorCompra) {
        if($valorCompra > $this->limite) {
            $valorCompra = False;
        } else {
            $this->fatura = $valorCompra;
            $valorCompra = True;
        }
    }
    public function totalFature($valorCompra) {
        if ($valorCompra > $this->limite) {
            return 0; 
        }
        return $valorCompra; 
    }
}   

echo"<h1>Instancia 1 </h1>";
$dados = new Cartao("nubank", "Elo", 1500);
echo "Banco: " . $dados->getBanco() . "<hr>";
echo "Bandeira: " . $dados->getBandeira() . "<hr>";
echo "Limite: " . $dados->getLimite() . "<hr>";
$dados->fazerCompra($valorCompra = 400); 
echo "Total da Fatura: " . $dados->totalFature($valorCompra) . "<hr>";
    
echo"<h1>Instancia 2 </h1>";
$dados = new Cartao("Bradesco", "Elo", 4500);
echo "Banco: " . $dados->getBanco() . "<hr>";
echo "Bandeira: " . $dados->getBandeira() . "<hr>";
echo "Limite: " . $dados->getLimite() . "<hr>";
$dados->fazerCompra($valorCompra = 40000); 
echo "Total da Fatura: " . $dados->totalFature($valorCompra) . "<hr>";
