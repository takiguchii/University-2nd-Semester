<?php
class Veiculo {
    private string $marca;
    private string $modelo;
    private int $ano;
    private float $velocidadeAtual;   
    
    public function __construct(string $marca, string $modelo, int $ano) {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);
        $this->velocidadeAtual = 0; 
    }

    public function setMarca(string $marca): void {
        $this->marca = $marca;
    }

    public function getMarca(): string {
        return $this->marca;
    }

    public function setModelo(string $modelo): void {
        $this->modelo = $modelo;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function setAno(int $ano): void {
        $this->ano = $ano;
    }

    public function getAno(): int {
        return $this->ano;
    }

    public function setVelocidadeAtual(float $velocidadeAtual): void {
        $this->velocidadeAtual = $velocidadeAtual;
    }

    public function getVelocidadeAtual(): float {
        return $this->velocidadeAtual;
    }

    public function acelerar(float $quantidade): void {
        $this->velocidadeAtual += $quantidade;
    }

    public function frear(float $quantidade): void {
        $this->velocidadeAtual -= $quantidade; 
        if ($this->velocidadeAtual < 0) {
            $this->velocidadeAtual = 0;
        }
    }

    public function imprimirVeiculo(): void {
        echo "Velocidade do carro {$this->marca} {$this->modelo}: {$this->velocidadeAtual} km/h.<br>";
    }
}
