<?php
    require("conecta.php");

    $placa_carro = $_POST['placa_carro'];
    $km = $_POST['km_carro'];
    $ano = $_POST['ano_carro'];
    $cor = $_POST['cor_carro'];
    $descricao = $_POST['descricao_carro'];
    $preco = $_POST['preco_carro'];
    $modelo = $_POST['modelo_carro'];
    $marca = $_POST['marca_carro'];

    $sql = "INSERT INTO carro (placa, marca, km, ano, cor, descricao, modelo, valor) VALUES
            ('$placa_carro', '$marca', '$km','$ano', '$cor', '$descricao', '$modelo', $preco)";

    if($conn->query($sql) === TRUE){
        echo "<center><h1>REGISTRO INSERIDO COM SUCESSO</h1>";
        echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    }
    else{
        echo "<h3>OCORREU UM ERRO: </h3>".$sql."<br />".$conn->error;
    }



?>