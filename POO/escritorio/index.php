<?php

require_once("Item.php");
require_once("Objeto.php");
require_once("Pasta.php");
require_once("Documento.php");
require_once("Gaveta.php");
require_once("Armario.php");
require_once("Escritorio.php");

echo "<hr> <h3> Instancia: Gaveta  </h3><hr>";
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
echo "<br><h2>Depois de remover o item 'Caneta':</h2>";
$gaveta->listarItens(); 

echo "<hr> <h3> Instancia: Armario </h3><hr>";
$documento1 = new Documento("Contrato", "Contrato de prestação de serviços", "2024-01-01");
$objeto1 = new Objeto("Caneta", "Caneta azul", 0.05);
$pasta1 = new Pasta("Pastas de papel", "Pasta para documentos", "Documentos Importantes");

$gaveta1 = new Gaveta();
$gaveta1->adicionarItem($documento1);

$gaveta2 = new Gaveta();
$gaveta2->adicionarItem($objeto1);
$gaveta2->adicionarItem($pasta1);

$armario = new Armario();
$armario->adicionarGaveta($gaveta1);
$armario->adicionarGaveta($gaveta2);
echo "<h2>Itens no Armário:</h2>";
$armario->listarGavetas();

echo "<hr> <h3> Instancia: Escritorio </h3><hr>";
$escritorio = new Escritorio();
$armario1 = new Armario();
$armario2 = new Armario();

$gaveta1->adicionarItem(new Documento("Contrato", "Contrato de trabalho", "2023-05-12"));
$gaveta1->adicionarItem(new Objeto("Caneta", "Caneta azul", 0.02));

$gaveta2->adicionarItem(new Pasta("Documentos", "Pasta de arquivos", "Importante"));

$armario1->adicionarGaveta($gaveta1);
$armario1->adicionarGaveta($gaveta2);

$gaveta3 = new Gaveta();
$gaveta3->adicionarItem(new Documento("Relatório", "Relatório do mês", "2024-01-15"));
$armario2->adicionarGaveta($gaveta3);

$escritorio->adicionarArmario($armario1);
$escritorio->adicionarArmario($armario2);

echo "<h2>Conteúdo do Escritório</h2>";
$escritorio->listarArmarios();
echo "<hr>";

//$escritorio->removerArmario(0); 
echo "<h2>Depois de remover o primeiro armário:</h2>";
$escritorio->listarArmarios();

$escritorio->auditoria();
