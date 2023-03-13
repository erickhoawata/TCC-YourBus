<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    

        //Buscar os dados enviados pelo usuário -   Login.html
        $id = $_GET['id'];
        $placa= $_GET['placa'];
        $modelo = $_GET['modelo'];
        $marca = $_GET['marca']; 
        $linha = $_GET['linha'];

        //Query (pergunta - Select) para o Banco de Dados
        $sql_alterar="UPDATE tb_onibus SET   
            placa= '$placa',
            modelo = '$modelo', 
            marca = '$marca', 
            linha = '$linha'
        WHERE id = $id";

    echo $sql_alterar;
    mysqli_query($conect,$sql_alterar);
    require('disconect.php');

    //redirecionamento
    header("Location: exibe_cadastro_onibus.php");
    
?>