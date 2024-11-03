<?php

require_once ("Item.php");
require_once ("Objeto.php");
require_once ("Pasta.php");
require_once ("Documento.php");
require_once ("Gaveta.php");

$documento1 = new Documento("Contrato", "Contrato de prestação de serviços", "2024-01-01");
$objeto1 = new Objeto("Caneta", "Caneta azul", 0.05);
$pasta1 = new Pasta("Pastas de papel", "Pasta para documentos", "Documentos Importantes");

echo"<hr> <h3> Separação </h3><hr>";

