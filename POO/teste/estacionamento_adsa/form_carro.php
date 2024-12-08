<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>CADASTRO DE CARRO</h1>
        <form method="POST" action="cadastra_carro.php">
            <table>
                <tr>
                    <td>Placa: <input type="text" name="placa_carro"></td>
                    <td>KM: <input type="number" name="km_carro"></td>
                    <td>Ano: <input type="number" name="ano_carro"></td>
                    <td>Cor: <input type="text" name="cor_carro"></td>
                </tr>  
                <tr> 
                    <td>Descrição: <textarea name="descricao_carro"></textarea> </td>
                    <td>Preço: <input type="number" name="preco_carro"></td>
                    <td>Modelo: <input type="nutextmber" name="modelo_carro"></td>
                
                    <?php
                        require("conecta.php");

                        $dados_select = mysqli_query($conn, "SELECT ID_MARCA, NOME_MARCA FROM marcas_carro");

                        echo "<td>Marca: <select name='marca_carro'>";
                        while($dado = mysqli_fetch_array($dados_select)) {
                            echo '<option value='.$dado[0].'>'.$dado[1].'</option>';
                        }
                        echo "</select></td>";
                    ?>

                </tr>
            </table>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>
    </center>
</body>
</html>