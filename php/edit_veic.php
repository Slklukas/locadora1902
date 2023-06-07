<?php
    include_once('conexao.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM veiculos WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $descricao = $user_data['descricao'];
                $marca = $user_data['marca'];
                $modelo = $user_data['modelo'];
                $ano = $user_data['ano'];
                $tipo = $user_data['tipo'];
            }
        }
        else
        {
            header('Location: sistema_veic.php');
        }
    }
    else
    {
        header('Location: sistema_veic.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/logo_resized_resized_resized.png" type="image/x-icon">
    <title>Editar Veiculos</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }

        a{
    text-decoration: none;
    color: white;
    border: 3px solid dodgerblue;
    border-radius: 10px;
    padding: 5px;
}
a:hover{
    background-color: #000;
}
    </style>
</head>
<body>
    <a href="/php/portal.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
        <fieldset>
            <legend><b>Editar Veiculos</b></legend>
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