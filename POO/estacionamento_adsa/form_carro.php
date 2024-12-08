<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carro</title>
</head>
<body>
    <center>
        <h1>Cadastro de Carro</h1>
        <form method="POST" action="cadastra_carro.php">
            <table>
                <tr>
                    <td>
                        <label for="placa_carro">Placa:</label>
                        <input type="text" id="placa_carro" name="placa_carro" placeholder="Ex.: ABC1234" required>
                    </td>
                    <td>
                        <label for="km_carro">KM:</label>
                        <input type="number" id="km_carro" name="km_carro" min="0" placeholder="Ex.: 15000" required>
                    </td>
                    <td>
                        <label for="ano_carro">Ano:</label>
                        <input type="number" id="ano_carro" name="ano_carro" min="1900" max="2099" placeholder="Ex.: 2022" required>
                    </td>
                    <td>
                        <label for="cor_carro">Cor:</label>
                        <input type="text" id="cor_carro" name="cor_carro" placeholder="Ex.: Preto" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="descricao_carro">Descrição:</label>
                        <textarea id="descricao_carro" name="descricao_carro" maxlength="255" placeholder="Detalhes sobre o carro..." required></textarea>
                    </td>
                    <td>
                        <label for="preco_carro">Preço:</label>
                        <input type="number" id="preco_carro" name="preco_carro" step="0.01" min="0" placeholder="Ex.: 50000.00" required>
                    </td>
                    <td>
                        <label for="modelo_carro">Modelo:</label>
                        <input type="text" id="modelo_carro" name="modelo_carro" placeholder="Ex.: Corolla" required>
                    </td>
                    <td>
                        <label for="marca_carro">Marca:</label>
                        <select id="marca_carro" name="marca_carro" required>
                            <?php
                                require("conecta.php");
                                $dados_select = mysqli_query($conn, "SELECT ID_MARCA, NOME_MARCA FROM marcas_carro");

                                while($dado = mysqli_fetch_array($dados_select)) {
                                    echo '<option value="'.$dado['ID_MARCA'].'">'.$dado['NOME_MARCA'].'</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>
    </center>
</body>
</html>
