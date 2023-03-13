<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $tipo_insert = $_GET['tipo_insert'];
    
    //Verifica qual o time de Insert
    if ($tipo_insert == "onibus"){
        //Buscar os dados enviados pelo usuário -    Login.html

        $id= $_GET['id'];
        $placa= $_GET['placa'];
        $modelo = $_GET['modelo'];
        $marca = $_GET['marca'];
        $capacidade = $_GET['capacidade']; 
        $preço = $_GET['preço'];      
        $linha = $_GET['linha']; 


        //Query (pergunta - Select) para o Banco de Dados
        $sql_insert="INSERT INTO tb_onibus
            (placa, modelo, marca, capacidade, id, linha, preço)
            values ('$placa','$modelo','$marca','$capacidade','$id','$linha','$preço')";
    }    
    echo $sql_insert;
    mysqli_query($conect,$sql_insert);
    require('disconect.php');
    
    //Verifica qual é o insert para redirecionar
    switch ($tipo_insert) {
        case "onibus" : header("Location: cadastro_onibus.php");
        break;
   }  
?>