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
    <link href="{{ asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
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

            <!-- Nav Item - Formulaire -->
            <li class="bg-green-500 nav-item">
                <a class="nav-link" href="{{ route('formulaire') }}">
                    <i class="fas fa-fw fa-pencil-alt"></i> <!-- Nouvelle icône pour Formulaire -->
                    <span class="font-weight-bold">RETOUR FISCAL</span>
                </a>
            </li>

            <!-- Nav Item - Historiques -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('historiques') }}">
                    <i class="fas fa-fw fa-history"></i> <!-- Nouvelle icône pour Historiques -->
                    <span class="font-weight-bold">HISTORIQUES</span>
                </a>
            </li>

            <!-- Nav Item - Profil -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profil') }}">
                    <i class="fas fa-fw fa-user"></i> <!-- Icône pour Profil -->
                    <span class="font-weight-bold">PROFIL</span>
                </a>
            </li>
            <!-- Nav Item - DECONNEXION -->
            <li class="nav-item hover:bg-red-500">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="font-weight-bold">DÉCONNEXION</span>
                </a>
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


                    <p class="text-xs font-black text-green-700 lg:9xl"><span class="text-red-500">O</span>UTILS DE
                        <span class="text-red-500">P</span>REVISION DES
                        <span class="text-red-500">R</span>ECETTES <span class="text-red-500">N</span>ON <span
                            class="text-red-500">F</span>ISCALES (<span class="text-red-500">OPRNF</span>)
                    </p>


                    <!-- Topbar Navbar -->
                    <ul class="ml-auto navbar-nav">



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

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <!-- Content Row -->
                    <button type="button" onclick="window.history.back()"
                        class="px-4 py-2 my-4 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        Retour
                    </button>
                    <div class="flex flex-wrap justify-between space-y-4 row">

                        <!-- Première div - Une ligne -->
                        <div class="flex items-center w-full p-4 space-x-4 bg-white rounded-lg shadow-md md:w-auto">
                            <!-- Titre -->
                            <h3 class="text-lg font-semibold text-gray-900">Retour Fiscal</h3>

                            <!-- Message -->
                            <p class="text-red-500">Ceci est un message d'exemple envoyé à l'utilisateur.</p>

                            <!-- Lien vers le fichier -->
                            <a href="path/to/file1.docx" class="p-2 text-white bg-gray-500 rounded shadow">Télécharger
                                le
                                fichier Word</a>

                            <!-- Heure d'envoi -->
                            <p class="text-sm text-gray-500">Envoyé le : 2025-01-23 10:00:00</p>
                        </div>

                        <!-- Deuxième div - Une ligne -->
                        <div class="flex items-center w-full p-4 space-x-4 bg-white rounded-lg shadow-md md:w-auto">
                            <!-- Titre -->
                            <h3 class="text-lg font-semibold text-gray-900">Retour Fiscal</h3>

                            <!-- Message -->
                            <p class="text-red-500">Voici un autre message avec des informations importantes.</p>

                            <!-- Lien vers le fichier -->
                            <a href="path/to/file2.xlsx" class="p-2 text-white bg-gray-500 rounded shadow">Télécharger
                                le
                                fichier Excel</a>

                            <!-- Heure d'envoi -->
                            <p class="text-sm font-bold text-gray-500">Envoyé le : 2025-01-22 15:30:00</p>
                        </div>

                        <!-- Troisième div - Une ligne -->
                        <div class="flex items-center w-full p-4 space-x-4 bg-white rounded-lg shadow-md md:w-auto">
                            <!-- Titre -->
                            <h3 class="text-lg font-semibold text-gray-900">Retour Fiscal</h3>

                            <!-- Message -->
                            <p class="text-red-500">Ce message est une notification de mise à jour.</p>

                            <!-- Lien vers le fichier -->
                            <a href="path/to/file3.docx" class="p-2 text-white bg-gray-500 rounded shadow">Télécharger
                                le
                                fichier Word</a>

                            <!-- Heure d'envoi -->
                            <p class="text-sm text-gray-500">Envoyé le : 2025-01-21 12:45:00</p>
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

    <!-- Modal de confirmation de déconnexion -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Prêt à quitter ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Fermer">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à quitter votre session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Déconnexion</button>
                    </form>
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
