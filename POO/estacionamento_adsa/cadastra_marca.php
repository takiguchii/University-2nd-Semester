<?php
require("conecta.php");

// Validando se o nome da marca foi enviado
if (!isset($_POST["nome_marca"]) || empty(trim($_POST["nome_marca"]))) {
    die("<center><h1>ERRO: Nome da marca não pode estar vazio.</h1>
         <a href='form_marcas_carro.html'><input type='button' value='Voltar'></a></center>");
}

$nome_marca = trim($_POST["nome_marca"]);

// Usando prepared statement para evitar SQL Injection
$sql = $conn->prepare("INSERT INTO marcas_carro (nome_marca) VALUES (?)");
$sql->bind_param("s", $nome_marca);

try {
    // Executa a consulta
    if ($sql->execute()) {
        echo "<center><h1>REGISTRO INSERIDO COM SUCESSO</h1>
              <a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
        throw new Exception("Erro ao inserir registro: " . $conn->error);
    }
} catch (Exception $e) {
    // Em caso de erro, mostra uma mensagem amigável
    echo "<center><h1>OCORREU UM ERRO</h1><p>{$e->getMessage()}</p>
          <a href='form_marcas_carro.html'><input type='button' value='Voltar'></a></center>";
}

// Fechar a conexão após o uso
$sql->close();
$conn->close();
?>
