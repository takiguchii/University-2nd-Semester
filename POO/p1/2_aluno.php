<?php 

class Aluno { 
    private string $nome;
    private int $ra;
    private string $curso;
    private string $disciplina;
    private float $nota_p1;
    private float $nota_p2;


    // construct 
    public function __construct($nome, $ra,$disciplina) {
        $this->setNome($nome);
        $this->setRa($ra);
        $this->setDisciplina($disciplina);
    }

    //sets e gets 
    public function setNome(string $name) {
        $this->nome = $name;
    }
    public function getNome(): string {
        return $this->nome;
    }
    public function setRa(int $ra) {
        $this->ra = $ra;
    }
    public function getRa(): int {
        return $this->ra;
    }
    public function setCurso(string $curso) {
        $this->curso = $curso;
    }
    public function getCurso(): string {
        return $this->curso;
    }
    public function setDisciplina(string $disciplina) {
        $this->disciplina = $disciplina;
    }
    public function getDisciplina(): string {
        return $this->disciplina;
    }
    public function setNotaP1(float $nota_p1) {
        $this->nota_p1 = $nota_p1;
    }
    public function getNotaP1(): float {
        return $this->nota_p1;
    }    
    public function setNotaP2(float $nota_p2) {
        $this->nota_p2 = $nota_p2;
    }
    public function getNotaP2(): float {
        return $this->nota_p2;
    }
    //funcoes
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

}

echo "<h1> Instância 1 </h1>";

$info = new Aluno("Fern", 2003711, "Matemática");
$info->setCurso("Medicina");
$info->setNotap1(10);
$info->setNotap2(9.5);

echo "Nome: " . $info->getNome() . "<hr>";
echo "RA: " . $info->getRa() . "<hr>";
echo "Disciplina: " . $info->getDisciplina() . "<hr>";
echo "Curso: ", $info->getCurso(), "<hr>";
echo "Media: ", $info->calcularMedia (), "<hr>";
echo "situação: ", $info->situacao(), "<hr>";

echo "<h1> Instância 2 <br> </h1>";

$info = new Aluno("Alexandre", 2003762, "Poo");
$info->setCurso("Analise e Desenvolvimento de Sistemas");
$info->setNotap1(8);
$info->setNotap2(7);

echo "Nome: " . $info->getNome() . "<hr>";
echo "RA: " . $info->getRa() . "<hr>";
echo "Curso: ", $info->getCurso(), "<hr>";
echo "Disciplina: " . $info->getDisciplina() . "<hr>";
echo "Media: ", $info->calcularMedia (), "<hr>";
echo "situação: ", $info->situacao(), "<hr>";