<?php 

require_once("documento.php");

class livro extends Documento{
    private $titulo;

    public function info():void{
        echo"isso é um livro<br>";
    }
}