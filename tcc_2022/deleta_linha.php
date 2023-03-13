<?php
    require('conect.php');

    $id = $_GET['id'];
        
    $sql_del="DELETE FROM `tb_linha`
              WHERE id = $id";
    
    mysqli_query($conect,$sql_del);
    
    require('disconect.php');  
    header("Location: exibe_cadastro_linha.php"); 

?>