<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$database = "teste";

// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificando se a conexão foi bem-sucedida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Verificando se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Inserindo os dados na tabela 'clientes'
    $sql = "INSERT INTO clientes (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

    if (mysqli_query($conn, $sql)) {
        echo "<center><h1>Cliente cadastrado com sucesso!</h1>";
        echo "<a href='#'><input type='button' value='Voltar'></a></center>";
    } else {
        echo "<center><h3>Erro ao cadastrar cliente: " . mysqli_error($conn) . "</h3></center>";
    }
}

// Fechar a conexão
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <center>
        <h1>Cadastro de Cliente</h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><input type="text" name="telefone" required></td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </center>
</body>
</html>
