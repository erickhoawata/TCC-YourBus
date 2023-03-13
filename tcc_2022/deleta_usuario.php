<?php
    session_start();

    $email = $_SESSION['email'];
    require('conect.php');

    $id = $_GET['id'];


    $sql_del="DELETE FROM `tb_usuario`
              WHERE id = $id and email <>'$email'";
    
echo $sql_del;

    mysqli_query($conect,$sql_del);
    
    require('disconect.php');  
    header("Location: exibe_usuario.php"); 

?>