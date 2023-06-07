<?php
    session_start();
    include_once('conexao.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/logo_resized_resized_resized.png" type="image/x-icon">
    <link rel="stylesheet" href="/portal.css">
    <title>Portal</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
<div class="container">
                <div class="box">
                    <div class="content"> 
                        <h2>01</h2>
                        <h3>Consulta</h3>
                        <p>Faça pesquisas sobre os veiculos cadastrados</p>
                        <a href="/php/pesquisa.php">Consultar Veiculos</a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2>02</h2>
                        <h3>Cadastro De Veiculos</h3>
                        <p>Cadastre veiculos</p>
                        <a href="/redi_user.html">Cadastro de Veiculos ou Usuarios</a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2>03</h2>
                        <h3>RESERVA</h3>
                        <p>Verifique as condições de reservas</p>
                        <a href="/reservas.html">Reservas</a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <h2>04</h2>
                        <h3>Sistema</h3>
                        <p>Acesso ao sistema interno</p>
                        <a href="/redi_portal.html">Acessar</a>
                    </div>
                </div>
                </section>
            </div>
</body>
</html>