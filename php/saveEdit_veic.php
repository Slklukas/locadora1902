<?php

    include_once('conexao.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $descricao = $_POST['descricao'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $ano = $_POST['ano'];
        $tipo = $_POST['tipo'];
        
        $sqlInsert = "UPDATE veiculos 
        SET descricao='$descricao',marca='$marca',modelo='$modelo',ano='$ano',tipo='$tipo'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>