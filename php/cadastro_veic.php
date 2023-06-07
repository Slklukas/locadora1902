<?php

if(isset($_POST['submit']))
{
    include_once('conexao.php');
    $descricao = $_POST['descricao'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $tipo = $_POST['tipo'];

    $result = mysqli_query($conexao, "INSERT INTO  veiculos(descricao,marca,modelo,ano,tipo) 
    VALUES ('$descricao','$marca','$modelo','$ano','$tipo')");

    header('Location: portal.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/cadastrologin.css">
<link rel="shortcut icon" href="/logo_resized_resized_resized.png" type="image/x-icon">
<title>Cadastro De Veiculos</title>
</head>
<body>

<a href="/php/portal.php">VOLTAR</a>

    <center><img src="/logo.png"></center>
<div class="box">
    <form action="cadastro_veic.php" method="post">
        <fieldset>
            <legend><b>Fórmulário de Carros</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="modelo" id="modelo" class="inputUser" required>
                <label for="modelo" class="labelInput">Modelo Do Veiculo</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="marca" id="marca" class="inputUser" required>
                <label for="marca" class="labelInput">Marca Do Veiculo</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="ano" id="ano" class="inputUser" required>
                <label for="ano" class="labelInput">Ano Do Veiculo</label>
            </div>
            <br><br>

            <div class="inputBox">
                <input type="text" name="descricao" id="descricao" class="inputUser" required>
                <label for="descricao" class="labelInput">Desrição Do Veiculo</label>
            </div>
            <br>
            <p>Categoria:</p>
            <input type="radio" id="carro" name="tipo" value="carro" required>
            <label for="carro">Carro</label>
            <br>

            <input type="radio" id="moto" name="tipo" value="moto" required>
            <label for="moto">Moto</label>
            <br>

            <input type="radio" id="caminhao" name="tipo" value="outros" required>
            <label for="caminhao">Veiculos Grandes(Caminhão/Van/Ônibus)</label>
            <br><br>
            

            <input type="submit" name="submit" id="submit">
        </fieldset>
    </form>
</div>
</body>
</html>