<?php
    require('conect.php');

        
    $sql_all="SELECT id, placa, modelo, marca, capacidade, linha FROM `tb_onibus`";
    
    $result=mysqli_query($conect,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo "<tr>";    
            {
                echo "<td> <a href=deleta_onibus.php?id=".$consulta_count['id']."><i class='fas fa-trash fa-fw'></i></a>";
                echo "<a href=editar_onibus.php?id=".$consulta_count['id']."><i class='fas fa-edit fa-fw'></i></a></td>";
            }
            echo "<td>".$consulta_count['placa']."</td>";
            echo "<td>".$consulta_count['modelo']."</td>";
            echo "<td>".$consulta_count['marca']."</td>";
            echo "<td>".$consulta_count['capacidade']."</td>";
            echo "<td>".$consulta_count['linha']."</td>";
            echo "</tr>";
        }
        require('disconect.php');    

?>