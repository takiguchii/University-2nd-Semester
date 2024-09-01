<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title> Multiplicate Table </title>
</head>
<body>
    <h1>Tabuada</h1>
<hr>
    <form method="POST" action="">
        <h3>Digite o valor da tabuada que deseja calcular.</h3>
        <label for="numero">Insira um numero: </label>
        <input type="number" id="Numero" name="Valor">
        <input type="submit" value="Enviar">
    </form>
    <hr>
</body>
</html>

<?php
$numero = $_POST['Valor'];

for ($i = 1; $i < 11; $i++) {
    echo "O resultado da multiplicação de: ". $numero ." Por: ". $i ." É: " . $numero * $i;
    echo"<hr>";
}


//for ($i = 1; $i < 11; $i++){
//    for ($j = 1; $j < 11; $j++) {
//        echo $j * $i .",";
//    }
//    echo "<hr>";
//}