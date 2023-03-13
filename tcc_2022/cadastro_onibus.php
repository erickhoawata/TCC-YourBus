<?php
    session_start();
    require('verifica_acesso.php');
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

            <li class='nav-item'>
                <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseUtilities'
                    aria-expanded='true' aria-controls='collapseUtilities'>
                    <i class='fas fa-fw fa-wrench'></i>
                    <span>Exibição de Clientes</span>
                </a>
                <div id='collapseUtilities' class='collapse' aria-labelledby='headingUtilities'
                    data-parent='#accordionSidebar'>
                    <div class='bg-white py-2 collapse-inner rounded'>
                    <a class='collapse-item' href='cadastro_cliente.php'>Cadastro de clientes</a>
                        <a class='collapse-item' href='exibe_cliente.php'>Clientes</a>
                    </div>
                </div>
            </li>
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class='text-center d-none d-md-inline'>
                <button class='rounded-circle border-0' id='sidebarToggle'></button>
            </div>

            <!-- Sidebar Message -->
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
                        <h1 class='h3 mb-0 text-gray-800'>Cadastro de ônibus</h1>
                    </div>
                    <script>
                            function mascaraPLACA(i){
                                var v = i.value;
                                
                                i.setAttribute("maxlength", "8");
                                if (v.length == 3) i.value += "-";

                                }

                    </script>
                      <script>
                            function mascara(i){
                                var v = i.value;

                                if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                                    i.value = v.substring(0, v.length-1);
                                    return;

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
                                            <form action="insere_onibus.php" method="get">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Placa</label>
                                                    <input type="text" oninput="mascaraPLACA(this)" class="form-control" placeholder="Digite a placa" name="placa" id="placa" onblur="return verificarPLACA(this.value)" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Modelo</label>
                                                    <input type="text" class="form-control" placeholder="Digite o modelo" name="modelo" id="modelo" required>
                                             </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Marca</label>
                                                    <input type="text" class="form-control" placeholder="Digite a marca" name="marca" id="marca" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Capacidade</label>
                                                    <input type="text" oninput="mascara(this)" class="form-control" placeholder="Digite a capacidade" name="capacidade" id="capacidade" onblur="return verificar(this.value)" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Preço</label>
                                                    <input type="text" class="form-control" placeholder="Digite o preço da passagem" name="preço" id="preço" required>
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Trajeto</label>
                                                    <select class="form-control" placeholder="Selecione o trajeto" name="linha" id="linha" required>
                                                        <option value=" ">----</option>
                                                        <?php require('exibe_item_combo_linha.php'); ?>
                                                    </select>
                                                </div>
                                                
                                        
                                                 <input type="hidden" value="onibus" name="tipo_insert" id="tipo_insert">
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
                        <span>Instituto &copy; YourBus</span>
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