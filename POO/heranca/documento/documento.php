<?php
class Documento{
    private $autor;
    private $data;

    public function __construct($autor, $data){
        $this->autor = $autor;
        $this->data = $data;
    }
    public function info():void{
        echo"isso é um documento<br>";
    }
}