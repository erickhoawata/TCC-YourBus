
<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $tipo_insert = $_GET['tipo_insert'];
    
    //Verifica qual o time de Insert
    if ($tipo_insert == "linha"){
        //Buscar os dados enviados pelo usuário -    Login.html
        $id = $_GET['id'];
        $localida = $_GET['localida'];
        $localvolta = $_GET['localvolta']; 
        $horario = $_GET['horario']; 
        
        //Query (pergunta - Select) para o Banco de Dados
        $sql_insert="INSERT INTO tb_linhasjc
            (id, localida, localvolta, horario)
            values ('$id','$localida','$localvolta','$horario')";
    }    
    echo $sql_insert;
    mysqli_query($conect,$sql_insert);
    require('disconect.php');
    
    //Verifica qual é o insert para redirecionar
    switch ($tipo_insert) {
        case "linha" : header("Location: cadastro_linha.php");
        break;
   }  
?>

