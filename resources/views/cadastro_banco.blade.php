<?php

    
    $tabela= " <link rel='stylesheet' href='app.css'> 
    <table border='1' align='center' width = '1200px' height = '600px'>";
	$host = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "registros";
    $porta = "3306";
    $con = new mysqli( $host, $usuario, $senha, $banco, $porta);
    $sql = "select * from produtos;";

    
?>