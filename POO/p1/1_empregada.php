<?php

class Empregado{
    private string $name;
    private string $sobrenome;
    private string $setor;
    private int $salario;


    public function setName(string $name):void{
        $this->name = $name;
    }
    public function setSobrenome(string $sobrenome):void{
        $this->sobrenome = $sobrenome;
    }
    public function setSetor(string $setor):void{
        $this->setor = $setor;
    }
    public function setSalario(int $salario):void{
        if($salario < 0){
            $this->salario = 0;
        }
        else{
            $this->salario = $salario;
        }
    }

    public function getName():string{
        return $this->name;
    }
    public function getSobrenome():string{
        return $this->sobrenome;
    }
    public function getSetor():string{
        return $this->setor;
    }
    public function getSalario():int{
        return $this->salario;
    }

    public function salarioanual():int{
        return $this->salario*12;
    }

    public function Infos():void{
        echo"Empregado: {$this-> name} {$this->sobrenome}<hr>";
        echo"Setor: {$this->setor}<hr>";
        echo"Salario: {$this->salario}<hr>";
        echo"Salario Anual: {$this->salarioanual()}<hr>";
}
}

$empregado = new Empregado();
$empregado->setName("Fern");
$empregado->setSobrenome("Takiguchi");
$empregado->setSetor("RH");
$empregado->setSalario("3500");
$empregado->Infos();
