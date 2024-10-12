<?php

require_once(documento.php);
require_once(livros.php);
require_once(email.php);


$documento = new Documento("zé". "2024-10-11");
$documento ->info();

$livro = new Livro("JK". "2024-10-11");
$livro -> info();