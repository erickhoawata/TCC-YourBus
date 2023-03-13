<?php


    $perfil = $_SESSION['perfil'];
    
    if ($perfil == 'admin'){
        echo "<div class='sidebar-heading'>
        CADASTROS ADMIN
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class='nav-item'>
        <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseTwo'
            aria-expanded='true' aria-controls='collapseTwo'>
            <i class='fas fa-fw fa-cog'></i>
            <span>Cadastros</span>
        </a>
        <div id='collapseTwo' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
            <div class='bg-white py-2 collapse-inner rounded'>
                <h6 class='collapse-header'>Usuários:</h6>
                <a class='collapse-item' href='cadastro_usuario.php'>Cadastro de Usuários</a>
                <a class='collapse-item' href='exibe_usuario.php'>Exibição de Usuários</a>
                <a class='collapse-item' href='cadastro_onibus.php'>Cadastro de Ônibus</a>
                <a class='collapse-item' href='exibe_cadastro_onibus.php'>Exibição de Ônibus</a>
                <a class='collapse-item' href='cadastro_linha.php'>Cadastro de linha</a>
                <a class='collapse-item' href='exibe_cadastro_linha.php'>Exibição de linha</a>
              
  
            </div>
        </div>
    </li>";
    }

?>    
