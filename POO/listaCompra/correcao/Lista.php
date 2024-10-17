<?php

require_once('Produto.php');

class Lista {
    private array $produtos = []; 
    private string $mercado;
    private string $dataCompra;

    public function __construct($mercado, $dataCompra) {
        $this->mercado = $mercado;
        $this->dataCompra = $dataCompra;
        $this->produtos = [];
    }

    public function getMercado(): string {
        return $this->mercado;
    }

    public function setMercado($mercado): void {
        if (empty($mercado)) {
            $this->mercado = "Sem nome";
        } else {
            $this->mercado = $mercado;
        }
    }

    public function getDataCompra(): string {
        return $this->dataCompra;
    }
 
    public function setDataCompra($dataCompra): void{
        if (empty($dataCompra)) {
            $this->dataCompra = "Sem data";
        } else {
            $this->dataCompra = $dataCompra;
        }
    }

    public function getProdutos(): array {
        return $this->produtos;
    }

    public function setProdutos($produtos): void {
        if (empty($produtos)) {
            $this->produtos = [];
        } else {
            $this->produtos = $produtos;
        }
    }

    public function adicionar(Produto $produto, int $quantidade) {
        if ($quantidade > 0) {
            $item = [
                'produto' => $produto, 
                'quantidade' => $quantidade
            ];

            array_push($this->produtos, $item);
            return true;
        }

        return false;
    }

    public function mostrarListaCompleta() {
        echo "<h2>Lista de compras do mercado {$this->mercado}</h2>";
        echo "<p>Data da compra: {$this->dataCompra}</p>";
        echo "<table border='1'>";
        echo "<tr><th>Nome</th><th>Setor</th><th>Quantidade</th><th>Preço Total</th></tr>";

        foreach ($this->produtos as $item) {
            $produto = $item['produto'];
            $quantidade = $item['quantidade'];
            $precoTotal = $produto->getPreco() * $quantidade;
            echo "<tr>
                    <td>{$produto->getNome()}</td>
                    <td>{$produto->getSetor()}</td>
                    <td>{$quantidade}</td>
                    <td>R$ " . number_format($precoTotal, 2, ',', '.') . "</td>
                  </tr>";
        }

        echo "</table>";
    }

    public function total() {
        $precoTotal = 0;
        foreach ($this->produtos as $item) {
            $produto = $item['produto'];
            $quantidade = $item['quantidade'];
            $precoTotal += $produto->getPreco() * $quantidade;
        }
        return $precoTotal;
    }
}