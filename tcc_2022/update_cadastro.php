<?php
    //Requisição de outro componente/arquivo
    require('conect.php');
    
    $edita_insert = $_GET['edita_insert'];
   
    //Verifica qual o time de Insert
    if ($edita_insert == "usuario")
        //Buscar os dados enviados pelo usuário -   Login.html
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
        $sql_alterar="UPDATE tb_usuario SET 
            nome = '$nome',
            rg = '$rg', 
            cpf = '$cpf', 
            cep = '$cep', 
            senha = '$senha', 
            email = '$email', 
            perfil = '$perfil',
            rua = '$rua', 
            bairro = '$bairro', 
            cidade = '$cidade', 
            uf = '$uf'         
            
        WHERE id = $id"; 
    echo $sql_alterar;
    mysqli_query($conect,$sql_alterar);
    require('disconect.php');
    
    //Verifica qual é o insert para redirecionar
    switch ($edita_insert) {
        case "usuario" : header("Location: exibe_usuario.php");
        break;
   }  
?>