<?php 

class aluno{
    private string $nome;
    private int $ra;
    private string $curso;
    private string $disciplina;
    private float $nota_p1;
    private float $nota_p2;


    public function __construct($nome,$ra,$curso,$disciplina,$nota_p1,$nota_p2){
        $this-> nome = $nome;
        $this-> ra = $ra;
        $this-> curso = $curso; 
        $this-> disciplina = $disciplina;
        $this-> nota_p1 = $nota_p1;
        $this-> nota_p2 = $nota_p2;
    }

    public function setNome(string $name):string{
        $this->nome = $name;
    }
    public function setRa(int $ra):int{
        $this->ra = $ra;
    }
    public function setCurso(string $curso):string{
        $this->curso = $curso;
    }
    public function setDisciplina(string $disciplina):string{
        $this-> disciplina = $disciplina;
    }
    public function setNota_p1(float $nota_p1):float{
        $this->nota_p1 = $nota_p1;
    }
    public function setNota_p2(float $nota_p2):float{
        $this->nota_p2 = $nota_p2;
    }

    public function getNome():string{
        return $this-> nome;
    }
    public function getRa():int{
        return $this-> ra;
    }
    public function getCurso():string{
        return $this-> curso;
    }
    public function getDisciplina():string{
        return $this-> disciplina;
    }
    public function getNota_p1():float{
        return $this-> nota_p1;
    }    
    public function getNota_p2():float{
        return $this-> nota_p2;
    }
}

$info = new Aluno("Fern",2003762,"ADS","matematica",8.5,9.5);
echo $info;