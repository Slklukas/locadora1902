<?php

    $dbHost = 'sql9.freemysqlhosting.net';
    $dbUsarname = 'sql9624165';
    $dbPassword = 'EGC4KYFZ9G';
    $dbName = 'sql9624165';

    // $dbHost = '127.0.0.1';
    // $dbUsarname = 'root';
    // $dbPassword = '';
    // $dbName = 'login';


    $conexao = new mysqli($dbHost, $dbUsarname, $dbPassword, $dbName);

    if($conexao->connect_errno)

    date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/";

	$url_php = "http://".$host_ip."/php";
    $url_html = "http://".$host_ip."/html";


?>