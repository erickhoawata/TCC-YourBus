<?php
    //Requisição de outro componente/arquivo
    require('conect.php');

        //Buscar os dados enviados pelo usuário -   Login.html
        $id = $_GET['id'];
        $localida = $_GET['localida'];
        $localvolta = $_GET['localvolta']; 
        $horario = $_GET['horario']; 
        $latitude = $_GET['latitude'];
        $longitude = $_GET['longitude'];


        //Query (pergunta - Select) para o Banco de Dados
        $sql_alterar="UPDATE tb_linhasjc SET   
            localida = '$localida', 
            localvolta = '$localvolta', 
            horario = '$horario',
            latitude = '$latitude',
            longitude = '$longitude'
        WHERE id = $id";

    echo $sql_alterar;
    mysqli_query($conect,$sql_alterar);
    require('disconect.php');

    //redirecionamento
    header("Location: exibe_cadastro_linha.php");
    
?>