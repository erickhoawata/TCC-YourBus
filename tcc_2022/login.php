<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    //Buscar os dados enviados pelo usuário - Login.html

 
     if(!isset($_GET['email'])) {
        alert('Não informado o e-mail');
        header('Location: login3.html');
     }

     $email = $_GET['email'];
     $senha = $_GET['senha'];

        //Iniciar a sessão
        session_start();

        //Query (pergunta - Select) para o Banco de Dados
        $sql="select * FROM tb_usuario where email='$email' and senha='$senha' ";
        //$variável = Resultados;
        $result=mysqli_query($conect,$sql);
        while($consulta=mysqli_fetch_array($result))
        {
            $_SESSION['email'] = $consulta['Email'];
            $_SESSION['nome'] = $consulta['Nome'];
            $_SESSION['perfil'] = $consulta['Perfil'];
            header('Location: index.php');
        }
        require('disconect.php');

?>