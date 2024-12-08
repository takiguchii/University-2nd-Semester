<?php
// Configurações do banco de dados
$servername = "localhost";
$database = "estacionamento";
$username = "root";
$password = "";

// Criando conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificando a conexão
if (!$conn) {
    // Exibe erros apenas em ambiente de desenvolvimento
    die("Conexão falhou. Erro: " . mysqli_connect_error());
}

// Configurando o charset para evitar problemas de codificação
mysqli_set_charset($conn, "utf8");

// Ativar relatórios de erros para depuração (remova em produção)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

?>
