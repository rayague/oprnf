<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OPRNF</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}")}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center font-bold" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('images/logo2.png') }}" class="img-thumbnail w-50" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">OPRNF</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="font-weight-bold">Menu</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Accueil -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('commune.dashboard') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span class="font-weight-bold">ACCUEIL</span>
                </a>
            </li>


            <!-- Nav Item - Cadre -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cadrage') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span class="font-weight-bold">CADRAGE</span>
                </a>
            </li>

            <!-- Nav Item - Hypothèses -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('hypotheses') }}">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span class="font-weight-bold">HYPOTHESES</span>
                </a>
            </li>

            <!-- Nav Item - Solver -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('solver') }}">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span class="font-weight-bold">SOLVER</span>
                </a>
            </li>

            <!-- Nav Item - Recettes -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('recettes') }}">
                    <i class="fas fa-fw fa-utensils"></i>
                    <span class="font-weight-bold">RECETTES</span>
                </a>
            </li>
            <!-- Nav Item - Formulaire -->
            <li class="nav-item bg-green-500">
                <a class="nav-link" href="{{ route('formulaire') }}">
                    <i class="fas fa-fw fa-pencil-alt"></i> <!-- Nouvelle icône pour Formulaire -->
                    <span class="font-weight-bold">FORMULAIRE</span>
                </a>
            </li>

            <!-- Nav Item - Historiques -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('historiques') }}">
                    <i class="fas fa-fw fa-history"></i> <!-- Nouvelle icône pour Historiques -->
                    <span class="font-weight-bold">HISTORIQUES</span>
                </a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <p class="font-black text-xs lg:9xl text-green-700"><span class="text-red-500">O</span>UTILS DE
                        <span class="text-red-500">P</span>REVISION DES
                        <span class="text-red-500">R</span>ECETTES <span class="text-red-500">N</span>ON <span
                            class="text-red-500">F</span>ISCALES (<span class="text-red-500">OPRNF</span>)
                    </p>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <h3 class="nav-link dropdown-toggle">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Communes</span>
                                <img class="img-profile rounded-circle" src="{{ asset('images/logo1.ico') }}">
                            </h3>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Communes au Bénin -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Communes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">77</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-city fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Départements au Bénin -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Départements</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-map-signs fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Arrondissements au Bénin -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Arrondissements</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">546</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Villes au Bénin -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Villes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-building fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-10 my-4 mx-auto">

                            <form class="bg-white rounded-md p-4 shadow">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label font-bold">Responsable</label>
                                    <input type="email" class="form-control bg-gray-100" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label font-bold">Selectionner le
                                        fichier</label>
                                    <input class="form-control bg-gray-100" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label font-bold">Observations</label>
                                    <textarea class="form-control bg-gray-100" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 font-bold" type="submit">Soumettre</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Instaad Bénin 2025</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('dashboard/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('dashboard/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('dashboard/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('dashboard/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('dashboard/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
