<?php
    require('conect.php');

        
    $sql_all="SELECT id, nome, cpf, rg, cep, telefone, email, senha FROM `tb_clientes`";
    
    $result=mysqli_query($conect,$sql_all);
        while($consulta_count=mysqli_fetch_array($result))
        {
            echo "<tr>";
            if($_SESSION['perfil'] == 'admin'){
                echo "<td> <a href=deleta_cliente.php?id=".$consulta_count['id']."><i class='fas fa-trash fa-fw'></i></a>";
                
            }
            echo "<td>".$consulta_count['id']."</td>";
            echo "<td>".$consulta_count['nome']."</td>";
            echo "<td>".$consulta_count['cpf']."</td>";
            echo "<td>".$consulta_count['rg']."</td>";
            echo "<td>".$consulta_count['cep']."</td>";
            echo "<td>".$consulta_count['telefone']."</td>";
            echo "<td>".$consulta_count['email']."</td>";
            echo "<td>".$consulta_count['senha']."</td>";
            echo "</tr>";
        }
        require('disconect.php');    

?>