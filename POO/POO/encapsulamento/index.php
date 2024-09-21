<?php 

//O nome da classe deve ser o mesmo que o do arquivo
//sempre começar com letra maiuscula 

//Classe não possui interação 
//Objeto possui interação

class pessoa{
    //tipos de acesso 
    // public --> qualquer elemento fora da classe pode acessar 
    //private --> apenas elementos dentro da classe pode acessar

    private string $nome;
    private int $idade;

    //modificadores de acesso
    //getter --> retorna informação do objeto
    //setter --> alterna informações do objeto  
    public function getnome(): string{
        return $this ->nome;
    } 

    public function setnome(string $nome):void{
        if(empty($nome)){
            $this->nome = "informa um nome valido";
        }
        else{
            $this->nome =$nome;
        }
    }
    public function getIdade(int $idade):int{
            return $this->idade;
        }
    public function setIdade(int $idade):void{
        if($idade < 0){
            $this->idade =0;
        }
        else{
            $this->idade = $idade;
        }
    }
    public function apresentar():void{
        echo "ola meu nome é {$this->nome} e tenho {$this->idade} anos"; 
    }
}

$pessoas01 = new Pessoa(); #aqui esta criando um objeto (instancia) a partir da classe pesoa
$pessoas01->setnome("João"); #aqui esta atribuindo um valor ao atributo nome do objeto criado 
$pessoas01->setidade(18); #aqui esta atribuindo um valor ao atributo idade do objeto criado
$pessoas01->apresentar();
