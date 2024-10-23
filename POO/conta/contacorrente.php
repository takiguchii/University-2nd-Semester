<?php 

require_once("contabancaria.php");

class livro extends contabancaria{
    private int $limite;

private function setLimite($limite):void{
    $this-> limite = $limite;
}
private function getLimite():int{
    return $this->limite;
}

}