<?php
class Vendedor{
    private string $name;
    private string $email;
    private int $salarioBase;
    private float $porcentagemComissao;
    private int $totalVendido;


    public function __construct($name,$email,$salarioBase,$porcentagemComissao){
        $this->setName($name);
        $this->setEmail($email);
        $this->setSalariobase($salarioBase);
        $this->setPorcentagemComissao($porcentagemComissao);
    }

    public function setName(string $name):void{
        $this->name = $name;
    }
    public function getName():string{
        return $this->name;
    }
    public function setEmail(string $email):void{
        $this->email = $email;
    }
    public function getEmail():string{
        return $this->email;
    }
    public function setSalarioBase(int $salarioBase):void{
        $this->salarioBase = $salarioBase;
    }
    public function getSalarioBase():int{
        return $this-> salarioBase;
    }
    public function setPorcentagemComissao(float $porcentagemComissao):void{
        $this->porcentagemComissao = $porcentagemComissao;
    }
    public function getPorcentagemComissao():float{
        return $this-> porcentagemComissao;
    }
    public function setTotalVendido(float $totalVendido):void{
        $this-> totalVendido = $totalVendido;
    }
    public function getTotalVendido():float{
        return $this-> totalVendido;
    }

    //funções 
    public function fazerVenda($valorVenda){
        if($valorVenda > 0){
            $this->totalVendido = $valorVenda;
            return true;
        }else{
            return false;
        }
    }
    public function salarioTotal(){
        return ($this->totalVendido * $this->porcentagemComissao) / 100;
    }
    public function infos(): void {
        echo "Vendedor: {$this->name}<hr>";
        echo "Email: {$this->email}<hr>";
        echo "Salario Base: {$this->salarioBase}<hr>";
        echo "Porcentagem Comissão: {$this->porcentagemComissao}%<hr>";
        echo "Valor Total Vendido: {$this->totalVendido}<hr>";
        echo "Salario Total: " . $this->salarioTotal() . "<hr>";
    }
}

echo "<h1>Instância 1 </h1>";
$info = new Vendedor("Fern", "fern@gamil.com", 2200, 3);
$info->fazerVenda(100000); 
$info->infos();

echo "<h1>Instância 2 </h1>";
$info2 = new Vendedor("Alexandre", "ale@gamil.com", 1200, 1.5);
$info2->fazerVenda(70000); 
$info2->infos();