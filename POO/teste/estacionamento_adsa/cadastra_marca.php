<?php
    require("conecta.php");

    $nome_marca = $_POST["nome_marca"];

    $sql = "INSERT INTO marcas_carro (nome_marca)
            VALUES('$nome_marca')";

    if($conn->query($sql) === TRUE){
        echo "<center><h1>REGISTRO INSERIDO COM SUCESSO</h1>";
        echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    }
    else{
        echo "<h3>OCORREU UM ERRO: </h3>".$sql."<br />".$conn->error;
    }
?>