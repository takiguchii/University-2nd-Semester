<?php 

require_once("produto.php");

class Lista {
    private array $produtos; 
    private string $mercado;
    private string $dataCompra;

    public function __construct(string $mercado, string $dataCompra){
        $this->produtos = []; 
        $this->setMercado($mercado);
        $this->setDataCompra($dataCompra);
    }

    public function setProdutos(array $produtos): void {
        $this->produtos = $produtos;
    }

    public function getProdutos(): array {
        return $this->produtos; 
    }

    public function setMercado(string $mercado): void {
        $this->mercado = $mercado;
    }

    public function getMercado(): string {
        return $this->mercado;
    }

    public function setDataCompra(string $dataCompra): void {
        $this->dataCompra = $dataCompra;
    }

    public function getDataCompra(): string {
        return $this->dataCompra; 
    }

    public function adicionarProduto(Produto $produto, int $quantidade): bool {
        if ($quantidade > 0) {
            $this->produtos[] = ['produto' => $produto, 'quantidade' => $quantidade];
            return true;
        }else{
            return false;
        }
    }     
    public function mostrarLista(): void {
        echo "<ul>";
        foreach ($this->produtos as $item) {
            echo "<li>";
            echo "Nome: " . $item['produto']->getNome() . " | ";
            echo "Setor: " . $item['produto']->getSetor() . " | ";
            echo "Quantidade: " . $item['quantidade'] . " | ";
            echo "Preço Total: " . ($item['produto']->getPreco() * $item['quantidade']);
            echo "</li>";
        }
        echo "</ul>";
    }
}
$produto1 = new Produto("Coca-cola", 4.00, "Refrigerantes");
$produto2 = new Produto("Pão", 0.50, "Alimentos");

$lista = new Lista("Supermercado campante", "03/10/24");
$lista->adicionarProduto($produto1, 2);
$lista->adicionarProduto($produto2, 5);
echo $lista->mostrarLista();

