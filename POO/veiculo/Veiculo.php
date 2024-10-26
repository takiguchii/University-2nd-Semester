<?php 

class Veiculo{
    private string $marca;
    private string $modelo;
    private int $ano;
    private float $VelocidadeAtual;   
    
    public function __construct($marca, $modelo, $ano){
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);
    }

    public function setMarca():void{
        $this->marca = $marca;

    }
    public function getMarca():string{
        return $this-> marca;
    }
    public function setModelo():void{
        $this->modelo = $modelo;
    }
    public function getModelo():string{
        return $this-> modelo;
    }
    public function setAno():void{
        $this->ano = $ano;
    }
    public function getAno():int{
        return $this-> ano;
    }
    public function setVelocidadeAtual():void{
        $this->velocidadeAtual = $velocidadeAtual;
    }
    public function getVelocidadeAtual():float{
        return $this-> velocidadeAtual;
    }

    // separando esse trem 
    public function acelerar($quantidade):void{
        //$this->velocidadeAtual = $this->velocidadeAtual + $quantidade;
        echo "A velocidade atual é: {$this->velocidadeAtual}";
    }

    public function frear(){

    }
}