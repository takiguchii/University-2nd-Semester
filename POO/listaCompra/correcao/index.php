<?php

require_once('Produto.php');
require_once('Lista.php');

$produto1 = new Produto("Arroz", 5.99, "Alimentos");
$produto2 = new Produto("Shampoo", 15.50, "Higiene");
$produto3 = new Produto("Leite", 3.49, "Bebidas");

$listaCompras = new Lista("Mercado Bom Preço", "07/10/2024");

$listaCompras->adicionar($produto1, 2); // 2 unidades de Arroz
$listaCompras->adicionar($produto2, 1); // 1 unidade de Shampoo
$listaCompras->adicionar($produto3, 5); // 5 unidades de Leite

$listaCompras->mostrarListaCompleta();

echo "<p>Preço total da lista: R$ " . number_format($listaCompras->total(), 2, ',', '.') . "</p>";

?>