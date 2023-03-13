<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $tipo_insert = $_GET['tipo_insert'];
    
    //Verifica qual o time de Insert
    if ($tipo_insert == "usuario"){
        //Buscar os dados enviados pelo usuário -    Login.html       
        $id = $_GET['id'];
        $nome = $_GET['nome'];
        $rg = $_GET['rg'];
        $cpf = $_GET['cpf']; 
        $cep = $_GET['cep'];
        $senha = $_GET['senha'];
        $email = $_GET['email'];
        $perfil = $_GET['perfil'];
        $rua = $_GET['rua'];
        $bairro = $_GET['bairro'];
        $cidade = $_GET['cidade'];
        $uf = $_GET['uf'];

        //Query (pergunta - Select) para o Banco de Dados
        $sql_insert="INSERT INTO tb_usuario
            (nome, rg, cpf, cep, senha, email, perfil, id, cidade, bairro, rua, uf)
            values ('$nome','$rg','$cpf','$cep','$senha','$email','$perfil','$id','$cidade','$bairro','$rua','$uf')";
    }    
    echo $sql_insert;
    mysqli_query($conect,$sql_insert);
    require('disconect.php');
    
    //Verifica qual é o insert para redirecionar
    switch ($tipo_insert) {
        case "usuario" : header("Location: cadastro_usuario.php");
        break;
   }  
?>