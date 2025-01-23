<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('images/logo1.ico') }}" type="image/x-icon">


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
            <a class="font-bold sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('images/logo2.png') }}" class="img-thumbnail w-50" alt="">
                </div>
                <div class="mx-3 sidebar-brand-text">OPRNF</div>
            </a>

            <!-- Divider -->
            <hr class="my-0 sidebar-divider">

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
            <li class="bg-green-500 nav-item">
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
            <li class="nav-item">
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
            <!-- Nav Item - DECONNEXION -->
            <li class="nav-item hover:bg-red-500">
                <form class="nav-link" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <i class="fas fa-sign-out-alt"></i>
                    <input class="text-center font-weight-bold" type="submit" value="DÉCONNEXION" />
                </form>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="border-0 rounded-circle" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="mb-4 bg-white shadow navbar navbar-expand navbar-light topbar static-top">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="mr-3 btn btn-link d-md-none rounded-circle">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="my-2 mr-auto d-none d-sm-inline-block form-inline ml-md-3 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="border-0 form-control bg-light small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}

                    <p class="text-xs font-black text-green-700 lg:9xl"><span class="text-red-500">O</span>UTILS DE
                        <span class="text-red-500">P</span>REVISION DES
                        <span class="text-red-500">R</span>ECETTES <span class="text-red-500">N</span>ON <span
                            class="text-red-500">F</span>ISCALES (<span class="text-red-500">OPRNF</span>)
                    </p>


                    <!-- Topbar Navbar -->
                    <ul class="ml-auto navbar-nav">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="p-3 shadow dropdown-menu dropdown-menu-right animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="mr-auto form-inline w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="border-0 form-control bg-light small"
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
                                <span class="mr-2 text-gray-600 d-none d-lg-inline small">
                                    @auth
                                        {{ Auth::user()->name }} <!-- Affiche le nom de l'utilisateur connecté -->
                                        <!-- Affiche la commune de l'utilisateur connecté, si elle existe -->
                                        @if (Auth::user()->commune)
                                            ({{ Auth::user()->commune }})
                                        @else
                                            (Commune non définie)
                                        @endif
                                    @else
                                        Invité
                                    @endauth
                                </span>
                                <img class="img-profile rounded-circle" src="{{ asset('images/logo1.ico') }}">
                            </h3>
                            <!-- Dropdown - User Information -->

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Communes au Bénin -->
                        <div class="mb-4 col-xl-3 col-md-6">
                            <div class="py-2 shadow card border-left-primary h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="mr-2 col">
                                            <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                                Communes</div>
                                            <div class="mb-0 text-gray-800 h5 font-weight-bold">77</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="text-gray-300 fas fa-fw fa-city fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Départements au Bénin -->
                        <div class="mb-4 col-xl-3 col-md-6">
                            <div class="py-2 shadow card border-left-success h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="mr-2 col">
                                            <div class="mb-1 text-xs font-weight-bold text-success text-uppercase">
                                                Départements</div>
                                            <div class="mb-0 text-gray-800 h5 font-weight-bold">12</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="text-gray-300 fas fa-fw fa-map-signs fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="mx-auto my-8 col-lg-10">

                            <div class="flex flex-col space-y-4">
                                <!-- Bouton Exécuter -->
                                <a href="#"
                                    class="inline-block px-4 py-2 font-bold text-center text-white bg-blue-500 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 hover:no-underline">
                                    Exécuter
                                </a>

                                <!-- Bouton Approuver -->
                                <a href="#"
                                    class="inline-block px-4 py-2 font-bold text-center text-white bg-green-500 rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 hover:no-underline">
                                    Approuver
                                </a>

                                <!-- Bouton Résultats -->
                                <a href="#"
                                    class="inline-block px-4 py-2 font-bold text-center text-white bg-yellow-500 rounded-lg shadow-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 hover:no-underline">
                                    Résultats
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="my-auto text-center copyright">
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
    <a class="rounded scroll-to-top" href="#page-top">
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
