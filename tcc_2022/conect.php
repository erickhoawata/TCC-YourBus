<?php
    //mysql ou mysqli -> funções utilizadas pelo
    //MYSQL 
    //mysqli_connect -> Conecta no MYSQL
    $conect=mysqli_connect('127.0.0.1','root','') 
    or print (mysqli_error());
	mysqli_select_db($conect,'bd_yourbus') 
    or print(mysqli_error());
?>
 