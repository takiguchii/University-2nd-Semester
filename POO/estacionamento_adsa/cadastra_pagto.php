<?php
require("conecta.php");

// Validando os dados enviados
if (!isset($_POST["nome_pagamento"]) || empty(trim($_POST["nome_pagamento"]))) {
    die("<center><h1>ERRO: Nome do pagamento não pode estar vazio.</h1>
         <a href='form_tipo_pagto.html'><input type='button' value='Voltar'></a></center>");
}

$nome_pagto = trim($_POST["nome_pagamento"]);

// Usando prepared statement para maior segurança
$sql = $conn->prepare("INSERT INTO tipos_pagamento (nome_tipo_pagto) VALUES (?)");
$sql->bind_param("s", $nome_pagto);

try {
    if ($sql->execute()) {
        echo "<center><h1>REGISTRO INSERIDO COM SUCESSO</h1>
              <a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
        throw new Exception("Erro ao inserir registro: " . $conn->error);
    }
} catch (Exception $e) {
    echo "<center><h1>OCORREU UM ERRO</h1><p>{$e->getMessage()}</p>
          <a href='form_tipo_pagto.html'><input type='button' value='Voltar'></a></center>";
}

// Fechar a conexão (boa prática)
$sql->close();
$conn->close();
?>
