<?php

    $sql = "select * from produtos;";
    $tabela= "<table border='1' align='center' width = '1200px' height = '600px'>";
    $js = "<script src='refresh.js'></script>";
    $style = '<style> div{
        text-align: center;
        font: normal 18pt arial ;
        margin-top: 50px;
    
    }
    input{
        border-radius: 9px;
        border-width: 3px;
        font: medium 12pt Arial;
    }
    
    body{
        background-color: rgba(68, 123, 139, 0.575);
    
    }
    
    table{
        margin-top: 80px;
        border-radius: 10px;
        text-align: center;
        border-width: 4px;
        background-color: rgba(225, 245, 247, 0.945);
        font-family Lucida Sans Lucida Sans Regular, Lucida Grande, Lucida Sans Unicode, sans-serif;
    
    }
    
    button{
    
        background-color: #5cb85c;
        border-color: #4cae4c;
        font-family: Lucida Sans,  Lucida Sans Regular,  Lucida Grande,  Lucida SansUnicode, sans-serif;
        text-align: center;
        cursor: pointer;
        border: 1px solid transarent;
        padding: 6px 12px;
        font-size: 18px;
        border-radius: 10px;
        
    
    }
    
    </style>';

	$host = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "registros";
    $porta = "3306";

    echo $style;

    $con = new mysqli( $host, $usuario, $senha, $banco, $porta);
    if ($resultado = $con->query($sql)) {
        while ($linha = $resultado->fetch_object()) {
            $id = $linha->id;
            $tabela.="<tr>";
            $tabela.="<td>".$linha->id."</td>";
            $tabela.="<td>". $linha->nome."</td>";
            $tabela.="<td>". $linha->valor."</td>";
            $tabela.="<td>".$linha->fornecedor_id."</td>";
            $tabela.="<td> <a href='?id=$id'>Adicionar ao carrinho</a></td>";
            $tabela.="</tr>";
            
        }
        $button = "<a href='vendas'> <button>Ir ao carrinho</button> </a>";

        echo $button;
        echo $tabela;
        echo $js;
        
    }
    
?>