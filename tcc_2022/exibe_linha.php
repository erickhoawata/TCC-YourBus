<?php
    require('conect.php');


    $sql_all="SELECT id, horario, localida, localvolta, latitude, longitude FROM `tb_linhasjc`";
    $result=mysqli_query($conect,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo "<tr>";    
            {
                echo "<td> <a href=deleta_linha.php?id=".$consulta_count['id']."><i class='fas fa-trash fa-fw'></i></a>";
                echo "<a href=editar_linha.php?id=".$consulta_count['id']."><i class='fas fa-edit fa-fw'></i></a></td>";
            }
            echo "<td>".$consulta_count['id']."</td>";       
            echo "<td>".$consulta_count['localida']."</td>";
            echo "<td>".$consulta_count['localvolta']."</td>"; 
            echo "<td>".$consulta_count['horario']."</td>";
           
            echo "</tr>";

        }
        require('disconect.php');    

?>