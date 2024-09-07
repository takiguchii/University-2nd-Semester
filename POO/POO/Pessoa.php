<?php 

//O nome da classe deve ser o mesmo que o do arquivo
//sempre começar com letra maiuscula 

//Classe não possui interação 
//Objeto possui interação

class Pessoa{
    public string $nome;
    public int $idade;

    public function apresentar():void{
        echo "ola meu nome é {$this->nome} e tenho {$this->idade} anos"; 
    }
}

$pessoas01 = new Pessoa(); #aqui esta criando um objeto (instancia) a partir da classe pesoa
$pessoas01->nome = "João"; #aqui esta atribuindo um valor ao atributo nome do objeto criado 
$pessoas01->idade = 18; #aqui esta atribuindo um valor ao atributo idade do objeto criado
$pessoas01->apresentar();

echo"<hr>";
$pessoas02 = new Pessoa();
$pessoas02->nome = "anna";
$pessoas02->idade = 21;
$pessoas02->apresentar();