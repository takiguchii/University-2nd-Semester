<?php

// Classe Produto
class Produto {
    private string $nome;
    private float $preco;
    private string $setor;

    public function __construct(string $nome, float $preco, string $setor) {
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setSetor($setor);
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        if (empty($nome)) {
            $this->nome = "Sem nome";
        } else {
            $this->nome = $nome;
        }
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function setPreco(float $preco): void {
        if ($preco < 0) {
            $this->preco = 0;
        } else {
            $this->preco = $preco;
        }
    }

    public function getSetor(): string {
        return $this->setor;
    }

    public function setSetor($setor): void {
        if (empty($setor)) {
            $this->setor = "Sem setor";
        } else {
            $this->setor = $setor;
        }
    }
}
