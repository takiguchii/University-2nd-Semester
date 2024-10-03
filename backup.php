<?php 

class Aluno { 
    private string $nome;
    private int $ra;
    private string $curso;
    private string $disciplina;
    private float $nota_p1;
    private float $nota_p2;

    public function __construct($nome, $ra,$disciplina) {
        $this->setNome($nome);
        $this->setRa($ra);
        $this->ssetDisciplina($disciplina);
    }


    public function setNome(string $name) {
        $this->nome = $name;
    }
    public function setRa(int $ra) {
        $this->ra = $ra;
    }
    public function setCurso(string $curso) {
        $this->curso = $curso;
    }
    public function setDisciplina(string $disciplina) {
        $this->disciplina = $disciplina;
    }
    public function setNotaP1(float $nota_p1) {
        $this->nota_p1 = $nota_p1;
    }
    public function setNotaP2(float $nota_p2) {
        $this->nota_p2 = $nota_p2;
    }

    public function getNome(): string {
        return $this->nome;
    }
    public function getRa(): int {
        return $this->ra;
    }
    public function getCurso(): string {
        return $this->curso;
    }
    public function getDisciplina(): string {
        return $this->disciplina;
    }
    public function getNotaP1(): float {
        return $this->nota_p1;
    }    
    public function getNotaP2(): float {
        return $this->nota_p2;
    }
}


$info = new Aluno("Fern", 2003762, "Matemática");
echo $info;

