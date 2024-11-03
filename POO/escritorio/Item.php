<?php 
class Item {
    private string $nome;
    private string $descricao;

    public function __construct(string $nome, string $descricao) {
        $this->setNome($nome);
        $this->setDescricao($descricao);
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }
}
