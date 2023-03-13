<?php
    require('conect.php');

        
    $sql_all="SELECT linha, localida, localvolta FROM `tb_linhasjc`";
    
    $result=mysqli_query($conect,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo "<option value=".$consulta_count['linha'].">".$consulta_count['linha']." - ".$consulta_count['localida']." | ".$consulta_count['localvolta']."</option>";    
        }
        require('disconect.php');    

?>