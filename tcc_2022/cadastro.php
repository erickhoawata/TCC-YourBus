<?php
//Requisição de outro componente/arquivo
    require('conect.php');
//Query (pergunta - Select) para o Banco de Dados
        $sql="select * FROM tb_clientes where nome='$nome' and email='$email' and senha='$senha' and cpf='$cpf' and cep='cep' and telefone='$telefone'";
        //$variável = Resultados;
        $result=mysqli_query($conect,$sql);
        while($consulta=mysqli_fetch_array($result))
        {
            $_SESSION['nome'] = $consulta['Nome'];
            $_SESSION['email'] = $consulta['Email'];
            $_SESSION['senha'] = $consulta['Senha'];
            $_SESSION['cpf'] = $consulta['Cpf'];
            $_SESSION['cep'] = $consulta['Cep'];
            $_SESSION['telefone'] = $consulta['Telefone'];
            $_SESSION['perfil'] = $consulta['Perfil'];
            header('Location: index.php');
        }
        require('disconect.php');