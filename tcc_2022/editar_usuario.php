<?php
    session_start();
    require('verifica_acesso.php');
    require('conect.php');
    $id = $_GET['id'];
    
    $sql_id="SELECT * FROM `tb_usuario` WHERE id = $id";

    $result=mysqli_query($conect,$sql_id);
    while($consulta_count=mysqli_fetch_array($result))
        {

            $id_retorno = $consulta_count['Id'];
            $nome_retorno = $consulta_count['Nome'];
            $cpf_retorno = $consulta_count['Cpf'];
            $rg_retorno = $consulta_count['Rg'];
            $email_retorno = $consulta_count['Email'];
            $senha_retorno = $consulta_count['Senha'];
            $cep_retorno = $consulta_count['CEP'];
            $perfil_retorno = $consulta_count['Perfil'];  
            $rua_retorno = $consulta_count['Rua'];
            $bairro_retorno = $consulta_count['Bairro'];
            $cidade_retorno = $consulta_count['Cidade'];
            $uf_retorno = $consulta_count['Uf'];
        }
            
?>
<!DOCTYPE html>
<html lang='en'>

<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href='vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i'
        rel='stylesheet'>

    <!-- Custom styles for this template-->
    <link href='css/sb-admin.css' rel='stylesheet'>

</head>

<body id='page-top'>

    <!-- Page Wrapper -->
    <div id='wrapper'>

        <!-- Sidebar -->
        <ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion' id='accordionSidebar'>

            <!-- Sidebar - Brand -->
            <a class='sidebar-brand d-flex align-items-center justify-content-center' href='index.php'>
                
                <div class='sidebar-brand-text mx-3'>Portal Admin</div>
            </a>

            <!-- Divider -->
            <hr class='sidebar-divider my-0'>

            

            <!-- Divider -->
            <hr class='sidebar-divider'>

            <?php
            require('menu.php');
            ?>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class='nav-item'>
                <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseUtilities'
                    aria-expanded='true' aria-controls='collapseUtilities'>
                    <i class='fas fa-fw fa-wrench'></i>
                    <span>Exibição de Clientes</span>
                </a>
                <div id='collapseUtilities' class='collapse' aria-labelledby='headingUtilities'
                    data-parent='#accordionSidebar'>
                    <div class='bg-white py-2 collapse-inner rounded'>
                        <a class='collapse-item' href='exibe_cliente.php'>Clientes</a>
                    </div>
                </div>
            </li>

            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class='text-center d-none d-md-inline'>
                <button class='rounded-circle border-0' id='sidebarToggle'></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id='content-wrapper' class='d-flex flex-column'>

            <!-- Main Content -->
            <div id='content'>

                <!-- Topbar -->
                <nav class='navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow'>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id='sidebarToggleTop' class='btn btn-link d-md-none rounded-circle mr-3'>
                        <i class='fa fa-bars'></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class='navbar-nav ml-auto'>

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class='nav-item dropdown no-arrow d-sm-none'>
                            <a class='nav-link dropdown-toggle' href='#' id='searchDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='fas fa-search fa-fw'></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class='dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in'
                                aria-labelledby='searchDropdown'>
                                <form class='form-inline mr-auto w-100 navbar-search'>
                                    <div class='input-group'>
                                        <input type='text' class='form-control bg-light border-0 small'
                                            placeholder='Search for...' aria-label='Search'
                                            aria-describedby='basic-addon2'>
                                        <div class='input-group-append'>
                                            <button class='btn btn-primary' type='button'>
                                                <i class='fas fa-search fa-sm'></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       


                        <!-- Nav Item - User Information -->
                        <li class='nav-item dropdown no-arrow'>
                            <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <span class='mr-2 d-none d-lg-inline text-gray-600 small'>

                                <?php
                                    
                                    echo $_SESSION['nome'];
                                    echo ' \ ';
                                    echo $_SESSION['perfil'];
                                ?>



                                </span>
                                <img class='img-profile rounded-circle'
                                    src='img/undraw_profile.svg'>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in'
                                aria-labelledby='userDropdown'>
                                <a class='dropdown-item' href='#'>
                                    <i class='fas fa-user fa-sm fa-fw mr-2 text-gray-400'></i>
                                    Profile
                                </a>
                                <a class='dropdown-item' href='#'>
                                    <i class='fas fa-cogs fa-sm fa-fw mr-2 text-gray-400'></i>
                                    Settings
                                </a>
                                <a class='dropdown-item' href='#'>
                                    <i class='fas fa-list fa-sm fa-fw mr-2 text-gray-400'></i>
                                    Activity Log
                                </a>
                                <div class='dropdown-divider'></div>
                                <a class='dropdown-item' href='logout.php'>
                                    <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class='container-fluid'>

                    <!-- Page Heading -->
                    <div class='d-sm-flex align-items-center justify-content-between mb-4'>
                        <h1 class='h3 mb-0 text-gray-800'>Edição de Usuários</h1>
                    </div>

                    <script>
                        
                                function mascara(i){
                                var v = i.value;
                                
                                if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                                    i.value = v.substring(0, v.length-1);
                                    return;
                                }
                                
                                i.setAttribute("maxlength", "14");
                                if (v.length == 3 || v.length == 7) i.value += ".";
                                if (v.length == 11) i.value += "-";

                                }
                                //arquivo funcoes_cpf.js
                                // validador CPF
                                function verificarCPF(c){
                                    c = c.replace('.','');
                                    c = c.replace('-','');
                                    c = c.replace('.','');
                                    console.log(c);
                                    var i;
                                    s = c;
                                    var c = s.substr(0,9);
                                    var dv = s.substr(9,2);
                                    var d1 = 0;
                                    var v = false;
                                
                                    for (i = 0; i < 9; i++){
                                        d1 += c.charAt(i)*(10-i);
                                    }
                                    if (d1 == 0){
        
                                        document.getElementById('cpf').value=("");
                                                            alert("CPF inválido.");
                                        v = true;
                                        return false;
                                    }
                                    d1 = 11 - (d1 % 11);
                                    if (d1 > 9) d1 = 0;
                                    if (dv.charAt(0) != d1){
                                        document.getElementById('cpf').value=("");
                                                            alert("CPF inválido.");
                                        v = true;
                                        return false;
                                    }
                                
                                    d1 *= 2;
                                    for (i = 0; i < 9; i++){
                                        d1 += c.charAt(i)*(11-i);
                                    }
                                    d1 = 11 - (d1 % 11);
                                    if (d1 > 9) d1 = 0;
                                    if (dv.charAt(1) != d1){
                                        document.getElementById('cpf').value=("");
                                                            alert("CPF inválido.");
                                        v = true;
                                        return false;
                                    }

                                }    
                            function mascaraRG(i){
                                var v = i.value;
                                
                                if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                                    i.value = v.substring(0, v.length-1);
                                    return;
                                }
                                
                                i.setAttribute("maxlength", "12");
                                if (v.length == 2 || v.length == 6) i.value += ".";
                                if (v.length == 10) i.value += "-";

                                }
                                
                                //arquivo funcoes_cpf.js
                                // validador CPF
                                function verificarRG(c){
                                    c = c.replace('.','');
                                    c = c.replace('-','');
                                    c = c.replace('.','');
                                    console.log(c);
                                    var i;
                                    s = c;
                                    var c = s.substr(0,9);
                                    var dv = s.substr(9,2);
                                    var d1 = 0;
                                    var v = false;
                                
                                    for (i = 0; i < 9; i++){
                                        d1 += c.charAt(i)*(10-i);
                                    }
                                    if (d1 == 0){
                                        document.getElementById('rg').value=("");
                                                            alert("RG inválido.");
                                        v = true;
                                        return false;
                                    }
                                    d1 = 11 - (d1 % 11);
                                    if (d1 > 9) d1 = 0;
                                    if (dv.charAt(0) != d1){
                                        document.getElementById('rg').value=("");
                                                            alert("RG inválido.");
                                        v = true;
                                        return false;
                                    }
                                
                                    d1 *= 2;
                                    for (i = 0; i < 9; i++){
                                        d1 += c.charAt(i)*(11-i);
                                    }
                                    d1 = 11 - (d1 % 11);
                                    if (d1 > 9) d1 = 0;
                                    if (dv.charAt(1) != d1){
                                        document.getElementById('rg').value=("");
                                                            alert("RG inválido.");
                                        v = true;
                                        return false;
                                    }

                                }    
                        </script>


                    <script language="JavaScript">
                                function mascaraCEP(t, mask){
                                var i = t.value.length;
                                var saida = mask.substring(1,0);
                                var texto = mask.substring(i)
                                if (texto.substring(0,1) != saida){
                                t.value += texto.substring(0,1);
                                
                                }
                                }
                        </script>

                    <!-- Content Row -->
                    <div class='row'>

                        <!-- Earnings (Monthly) Card Example -->
            
                        <div class='col-xl-12 col-md-6 mb-4'>
                            <div class='card border-left-primary shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            
                                            <form action="update_cadastro.php" method="get">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" placeholder="Digite o E-mail" name="email" id="email" required value='<?php echo $email_retorno; ?>' >
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nome</label>
                                                    <input type="text" class="form-control" placeholder="Digite o nome" name="nome" id="nome" required value='<?php echo $nome_retorno; ?>'>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">RG</label>
                                                    <input type="text" oninput="mascaraRG(this)" class="form-control" placeholder="Digite o RG" name="rg" id="rg" onblur="return verificarRG(this.value)" required value='<?php echo $rg_retorno; ?>'> 
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">CPF</label>
                                                    <input type="text" oninput="mascara(this)" class="form-control" placeholder="Digite p CPF" name="cpf" id="cpf" onblur="return verificarCPF(this.value)" required value='<?php echo $cpf_retorno; ?>'>
                                                </div>   
                                        
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Perfil</label>
                                                    <select class="form-control" name="perfil" id="perfil" required>
                                                        <option value='<?php echo $perfil_retorno; ?>' selected><?php echo $perfil_retorno; ?></option> 
                                                        <option value="admin">Admin</option>
                                                        <option value="usuario">Usuário</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Senha</label>
                                                    <input type="password" class="form-control" placeholder="Digite a senha" name="senha" id="senha" required value='<?php echo $senha_retorno; ?>'>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">CEP</label>
                                                    <input name="cep" class="form-control" type="text" id="cep" placeholder="Digite o CEP" value="<?php echo $cep_retorno; ?>" onblur="pesquisacep(this.value);" />
                                                </div>  
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Rua</label>
                                                    <input name="rua" class="form-control" type="text" id="rua" placeholder="Digite a rua" value="<?php echo $rua_retorno; ?>"/>
                                                </div>
                                                <div class="form-group">  
                                                    <label for="exampleFormControlSelect1">Bairro</label>
                                                    <input name="bairro" class="form-control" type="text" id="bairro" placeholder="Digite o bairro" value="<?php echo $bairro_retorno; ?>"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Cidade</label>
                                                    <input name="cidade" class="form-control" type="text" id="cidade" placeholder="Digite a cidade" value="<?php echo $cidade_retorno; ?>"/>
                                                </div>        
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Estado</label>
                                                    <input name="uf"class="form-control" type="text" id="uf" placeholder="Digite o estado" value="<?php echo $uf_retorno; ?>"/>
                                                </div>
                                                <script type="text/javascript" >
    
                                                function limpa_formulário_cep() {
                                                        //Limpa valores do formulário de cep.
                                                        document.getElementById('rua').value=("");
                                                        document.getElementById('bairro').value=("");
                                                        document.getElementById('cidade').value=("");
                                                        document.getElementById('uf').value=("");
                                
                                                }

                                                function meu_callback(conteudo) {
                                                    if (!("erro" in conteudo)) {
                                                        //Atualiza os campos com os valores.
                                                        document.getElementById('rua').value=(conteudo.logradouro);
                                                        document.getElementById('bairro').value=(conteudo.bairro);
                                                        document.getElementById('cidade').value=(conteudo.localidade);
                                                        document.getElementById('uf').value=(conteudo.uf);
                                        
                                                    } //end if.
                                                    else {
                                                        //CEP não Encontrado.
                                                        limpa_formulário_cep();
                                                        alert("CEP não encontrado.");
                                                    }
                                                }
                                                    
                                                function pesquisacep(valor) {

                                                    //Nova variável "cep" somente com dígitos.
                                                    var cep = valor.replace(/\D/g, '');

                                                    //Verifica se campo cep possui valor informado.
                                                    if (cep != "") {

                                                        //Expressão regular para validar o CEP.
                                                        var validacep = /^[0-9]{8}$/;

                                                        //Valida o formato do CEP.
                                                        if(validacep.test(cep)) {

                                                            //Preenche os campos com "..." enquanto consulta webservice.
                                                            document.getElementById('rua').value="...";
                                                            document.getElementById('bairro').value="...";
                                                            document.getElementById('cidade').value="...";
                                                            document.getElementById('uf').value="...";

                                                            //Cria um elemento javascript.
                                                            var script = document.createElement('script');

                                                            //Sincroniza com o callback.
                                                            script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                                                            //Insere script no documento e carrega o conteúdo.
                                                            document.body.appendChild(script);

                                                        } //end if.
                                                        else {
                                                            //cep é inválido.
                                                            limpa_formulário_cep();
                                                            alert("Formato de CEP inválido.");
                                                        }
                                                    } //end if.
                                                    else {
                                                        //cep sem valor, limpa formulário.
                                                        limpa_formulário_cep();
                                                    }
                                                };

                                                </script>
                                                </head>

                                 
                                                
                                                <input type="hidden" value="usuario" name="edita_insert" id="edita_insert">
                                                <input type="hidden" value='<?php echo $id_retorno; ?>' name="id" id="id">

                                                <input type="submit" value="Enviar">
                                            </form>
                                        </div>
                                        <div class='col-auto'>
                                            <i class='fas fa-user fa-2x text-gray-300'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class='row'>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class='sticky-footer bg-white'>
                <div class='container my-auto'>
                    <div class='copyright text-center my-auto'>
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class='scroll-to-top rounded' href='#page-top'>
        <i class='fas fa-angle-up'></i>
    </a>

    <!-- Logout Modal-->
    <div class='modal fade' id='logoutModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
        aria-hidden='true'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Ready to Leave?</h5>
                    <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>×</span>
                    </button>
                </div>
                <div class='modal-body'>Select 'Logout' below if you are ready to end your current session.</div>
                <div class='modal-footer'>
                    <button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancel</button>
                    <a class='btn btn-primary' href='login.html'>Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src='vendor/jquery/jquery.min.js'></script>
    <script src='vendor/bootstrap/js/bootstrap.bundle.min.js'></script>

    <!-- Core plugin JavaScript-->
    <script src='vendor/jquery-easing/jquery.easing.min.js'></script>

    <!-- Custom scripts for all pages-->
    <script src='js/sb-admin-2.min.js'></script>

    <!-- Page level plugins -->
    <script src='vendor/chart.js/Chart.min.js'></script>

    <!-- Page level custom scripts -->
    <script src='js/demo/chart-area-demo.js'></script>
    <script src='js/demo/chart-pie-demo.js'></script>

</body>

</html>