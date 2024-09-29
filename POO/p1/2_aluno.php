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
        $this->setDisciplina($disciplina);
    }
    public function setNome(string $name):void{
        $this->nome = $name;
    }
    public function getNome(): string {
        return $this->nome;
    }
    public function setRa(int $ra):void{
        $this->ra = $ra;
    }
    public function getRa(): int {
        return $this->ra;
    }
    public function setCurso(string $curso):void{
        $this->curso = $curso;
    }
    public function getCurso(): string {
        return $this->curso;
    }
    public function setDisciplina(string $disciplina):void {
        $this->disciplina = $disciplina;
    }
    public function getDisciplina(): string {
        return $this->disciplina;
    }
    public function setNotaP1(float $nota_p1):void{
        $this->nota_p1 = $nota_p1;
    }
    public function getNotaP1(): float {
        return $this->nota_p1;
    }    
    public function setNotaP2(float $nota_p2):void{
        $this->nota_p2 = $nota_p2;
    }
    public function getNotaP2(): float {
        return $this->nota_p2;
    }
    public function calcularMedia(){
        return($this->nota_p1 + $this->nota_p2) / 2;
    }
    public function situacao(){
        $situacao = "";
        $media = ($this->nota_p1 + $this->nota_p2) / 2;
        if($media >= 7 ){
            $situacao = "aprovado";
        }elseif($media >=5 and $media < 7){
            $situação = "exame";
        }else{
            $situacao = "reprovado";
        }
        return $situacao;
    }
    public function infos(): void {
        echo "Nome: " . $this->getNome() . "<hr>";
        echo "RA: " . $this->getRa() . "<hr>";
        echo "Disciplina: " . $this->getDisciplina() . "<hr>";
        echo "Curso: " . $this->getCurso() . "<hr>";
        echo "Média: " . $this->calcularMedia() . "<hr>";
        echo "Situação: " . $this->situacao() . "<hr>";
    }
}

echo "<h1>Instância 1</h1>";
$info1 = new Aluno("Fern", 2003711, "Matemática");
$info1->setCurso("Medicina");
$info1->setNotap1(10);
$info1->setNotap2(9.5);
$info1->infos();

echo "<h1>Instância 2</h1>";
$info2 = new Aluno("Alexandre", 2003762, "Poo");
$info2->setCurso("Análise e Desenvolvimento de Sistemas");
$info2->setNotap1(8);
$info2->setNotap2(7);
$info2->infos();