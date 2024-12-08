<?php
    require("conecta.php");

    $nome_pagto = $_POST["nome_pagamento"];

    $sql = "INSERT INTO tipos_pagamento (nome_tipo_pagto)
            VALUES('$nome_pagto')";

    if($conn->query($sql) === TRUE){
        echo "<center><h1>REGISTRO INSERIDO COM SUCESSO</h1>";
        echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    }
    else{
        echo "<h3>OCORREU UM ERRO: </h3>".$sql."<br />".$conn->error;
    }
?>