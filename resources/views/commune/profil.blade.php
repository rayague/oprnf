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
            <li class=" nav-item">
                <a class="nav-link" href="{{ route('commune.dashboard') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span class="font-weight-bold">ACCUEIL</span>
                </a>
            </li>

            <!-- Nav Item - Formulaire -->
            <li class="nav-item">
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
            <li class="bg-green-500 nav-item">
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
                            <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="mr-2 text-gray-400 fas fa-user fa-sm fa-fw"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="mr-2 text-gray-400 fas fa-cogs fa-sm fa-fw"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="mr-2 text-gray-400 fas fa-list fa-sm fa-fw"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="mr-2 text-gray-400 fas fa-sign-out-alt fa-sm fa-fw"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">



                    <!-- Content Row -->
                    <div class="row">
                        <div class="mb-4 col-12">
                            <section aria-labelledby="profile_settings_heading">
                                <div class="shadow sm:rounded-lg sm:overflow-hidden">
                                    <div class="px-4 py-6 space-y-6 bg-white sm:p-6">
                                        <!-- Section à droite : image de profil -->
                                        <div class="space-y-6">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0">
                                                    <!-- Exemple d'image de profil -->
                                                    <img src="{{ asset('images/logo4.jpg') }}" alt="Avatar"
                                                        class="w-24 border-2 border-gray-300 rounded-full ">
                                                </div>
                                            </div>

                                        </div>
                                        <div>
                                            <h2 id="profile_settings_heading"
                                                class="text-lg font-bold leading-6 text-gray-900">
                                                Profil
                                            </h2>

                                        </div>

                                        <!-- Formulaire principal -->
                                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                            <!-- Section à gauche : informations utilisateur -->
                                            <div class="space-y-6">
                                                <!-- Nom -->
                                                <div>
                                                    <label for="name"
                                                        class="block text-sm font-medium text-gray-700">Nom de la
                                                        commune</label>
                                                    <div
                                                        class="p-2 bg-gray-200 border-2 border-gray-300 rounded border-1">
                                                        <h3 class="m-1 font-bold select-none">
                                                            @auth
                                                                {{ Auth::user()->name }}
                                                                <!-- Affiche le nom de l'utilisateur connecté -->
                                                                <!-- Affiche la commune de l'utilisateur connecté, si elle existe -->
                                                                @if (Auth::user()->commune)
                                                                    ({{ Auth::user()->commune }})
                                                                @else
                                                                    (Commune non définie)
                                                                @endif
                                                            @else
                                                                Invité
                                                            @endauth
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h2 for="name"
                                                        class="block text-sm font-medium text-gray-700">Mot de
                                                        passe</h2>
                                                    <div
                                                        class="p-2 bg-gray-200 border-2 border-gray-300 rounded border-1">
                                                        {{ $userPassword->id }}

                                                        <h3 class="m-1 font-bold select-none">motdepasse</h3>
                                                    </div>
                                                </div>


                                            </div>


                                        </div>

                                    </div>

                                    <!-- Bouton de soumission -->
                                    <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                        <button type="button"
                                            class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white border border-transparent rounded-md shadow-sm bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                                            data-toggle="modal" data-target="#changePasswordModal">
                                            Changer mot de passe
                                        </button>
                                    </div>
                                </div>
                            </section>



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

    </div>
    <!-- End of Page Wrapper -->

    <!-- Modal pour changer le mot de passe -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog"
        aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="text-white modal-header bg-sky-600">
                    <h5 class="modal-title" id="changePasswordModalLabel">Changer votre mot de passe</h5>
                    <button type="button" class="text-white close" data-dismiss="modal" aria-label="Fermer">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <!-- Ancien mot de passe -->
                        <div class="mb-4">
                            <label for="current_password" class="block text-sm font-medium text-gray-700">Ancien mot
                                de passe</label>
                            <div class="relative">
                                <input type="password" id="current_password" name="current_password" required
                                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Entrez votre ancien mot de passe">
                                <button type="button"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500"
                                    onclick="toggleVisibility('current_password')">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Nouveau mot de passe -->
                        <div class="mb-4">
                            <label for="new_password" class="block text-sm font-medium text-gray-700">Nouveau mot de
                                passe</label>
                            <div class="relative">
                                <input type="password" id="new_password" name="new_password" required
                                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Entrez votre nouveau mot de passe">
                                <button type="button"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500"
                                    onclick="toggleVisibility('new_password')">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Confirmer le nouveau mot de passe -->
                        <div class="mb-4">
                            <label for="new_password_confirmation"
                                class="block text-sm font-medium text-gray-700">Confirmer le nouveau mot de
                                passe</label>
                            <div class="relative">
                                <input type="password" id="new_password_confirmation"
                                    name="new_password_confirmation" required
                                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Confirmez votre nouveau mot de passe">
                                <button type="button"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500"
                                    onclick="toggleVisibility('new_password_confirmation')">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="text-white btn btn-primary bg-sky-600 hover:bg-sky-700">Enregistrer
                        les modifications</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Scroll to Top Button-->
    <a class="rounded scroll-to-top" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


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
    <script>
        function toggleVisibility(id) {
            var input = document.getElementById(id);
            var icon = input.nextElementSibling.querySelector('i');

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>

</body>

</html>
