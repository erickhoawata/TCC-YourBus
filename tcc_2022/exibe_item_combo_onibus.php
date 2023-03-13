<?php
    require('conect.php');

        
    $sql_all="SELECT id, placa, modelo, marca, capacidade FROM `tb_onibus`";
    
    $result=mysqli_query($conect,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo "<option value=".$consulta_count['id'].">".$consulta_count['placa']." | ".$consulta_count['modelo']."</option>";    
        }
        require('disconect.php');    

?>