<?php

require_once("Item.php");
require_once("Objeto.php");
require_once("Pasta.php");
require_once("Documento.php");
require_once("Gaveta.php");

$documento1 = new Documento("Contrato", "Contrato de prestação de serviços", "2024-01-01");
$objeto1 = new Objeto("Caneta", "Caneta azul", 0.05);
$pasta1 = new Pasta("Pastas de papel", "Pasta para documentos", "Documentos Importantes");

$gaveta = new Gaveta();

$gaveta->adicionarItem($documento1);
$gaveta->adicionarItem($objeto1);
$gaveta->adicionarItem($pasta1);

echo "<h2>Itens adicionados à gaveta:</h2>";
$gaveta->listarItens(); 

$gaveta->removerItem("Caneta");

echo "<br><h2>Após remover o item 'Caneta':</h2>";
$gaveta->listarItens(); 

echo "<hr> <h3> Separação </h3><hr>";
