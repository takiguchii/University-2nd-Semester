<?php
require("conecta.php");

// Validando os campos recebidos
$placa_carro = isset($_POST['placa_carro']) ? trim($_POST['placa_carro']) : '';
$km = isset($_POST['km_carro']) ? trim($_POST['km_carro']) : '';
$ano = isset($_POST['ano_carro']) ? trim($_POST['ano_carro']) : '';
$cor = isset($_POST['cor_carro']) ? trim($_POST['cor_carro']) : '';
$descricao = isset($_POST['descricao_carro']) ? trim($_POST['descricao_carro']) : '';
$preco = isset($_POST['preco_carro']) ? trim($_POST['preco_carro']) : '';
$modelo = isset($_POST['modelo_carro']) ? trim($_POST['modelo_carro']) : '';
$marca = isset($_POST['marca_carro']) ? trim($_POST['marca_carro']) : '';

// Verificar se campos obrigatórios não estão vazios
if (empty($placa_carro) || empty($km) || empty($ano) || empty($cor) || empty($descricao) || empty($preco) || empty($modelo) || empty($marca)) {
    die("<center><h1>ERRO: Todos os campos são obrigatórios!</h1>
         <a href='form_carro.php'><input type='button' value='Voltar'></a></center>");
}

// Usando prepared statement para evitar SQL Injection
$sql = $conn->prepare("INSERT INTO carro (placa, marca, km, ano, cor, descricao, modelo, valor) 
                       VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

// Vinculando os parâmetros com seus respectivos tipos
$sql->bind_param("ssissssi", $placa_carro, $marca, $km, $ano, $cor, $descricao, $modelo, $preco);

try {
    // Executando a consulta
    if ($sql->execute()) {
        echo "<center><h1>REGISTRO INSERIDO COM SUCESSO</h1>
              <a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
        throw new Exception("Erro ao inserir registro: " . $conn->error);
    }
} catch (Exception $e) {
    // Exibindo a mensagem de erro de maneira amigável
    echo "<center><h1>OCORREU UM ERRO</h1><p>{$e->getMessage()}</p>
          <a href='form_carro.php'><input type='button' value='Voltar'></a></center>";
}

// Fechando a conexão e statement
$sql->close();
$conn->close();
?>
