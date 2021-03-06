<?php
    echo "
    <!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Dashboard</title>
            <link href='../assets/vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
            <link
                href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i'
                rel='stylesheet'>

            <!-- Custom styles for this template-->
            <link href='../assets/css/sb-admin-2.min.css?' rel='stylesheet'>
        </head>
        <body>
            <!-- Page Wrapper -->
            <div id='wrapper'>

                <!-- Sidebar -->
                <ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion' id='accordionSidebar'>

                    <!-- Sidebar - Brand -->
                    <a class='sidebar-brand d-flex align-items-center justify-content-center mt-3' href='dasboard.php'>
                        <img src='../assets/img/user.png' alt='' width='80' height='80'>
                    </a>

                    <!-- Divider -->
                    <hr class='sidebar-divider my-0 mt-3'>

                    <!-- Nav Item - Dashboard -->
                    <li class='nav-item active'>
                        <a class='nav-link' href='#'>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- Divider -->
                    <hr class='sidebar-divider'>

                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>
                            <span>Data Siswa</span>
                        </a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>
                            <span>Data Petugas</span>
                        </a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>
                            <span>Data Kelas</span>
                        </a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>
                            <span>Data SPP</span>
                        </a>
                    </li>

                    <!-- Divider -->
                    <hr class='sidebar-divider my-0 mt-3'>

                    <!-- Nav Item - Dashboard -->
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>
                            <span>Generate Laporan</span>
                        </a>
                    </li>

                    <!-- Divider -->
                    <hr class='sidebar-divider'>

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
                                <div class='topbar-divider d-none d-sm-block'></div>

                                <!-- Nav Item - User Information -->
                                <li class='nav-item dropdown no-arrow'>
                                    <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button'
                                        data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                        <span class='mr-2 d-none d-lg-inline text-gray-600 small'>Admin</span>
                                        <img class='img-profile rounded-circle'
                                            src='../assets/img/user.png'>
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in'
                                        aria-labelledby='userDropdown'>
                                        <a class='dropdown-item' href='#'>
                                            <i class='fas fa-user fa-sm fa-fw mr-2 text-gray-400'></i>
                                            Profile
                                        </a>
                                        <div class='dropdown-divider'></div>
                                        <a class='dropdown-item' href='../index.php' data-toggle='modal' data-target='#logoutModal'>
                                            <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </nav>
                        <!-- End of Topbar -->

                        <div class='container ml-5'>
                            <h1>Selamat Datang</h1>
                            <h1>Admin</h1>
                            <div class='mt-5'>
                                <button type='submit' class='btn btn-primary spp'>Pembayaran SPP</button><br>
                                <button type='submit' class='btn btn-primary riwayat mt-3'>Riwayat Pembayaran</button>
                            </div>
                        </div>

            <!-- Bootstrap core JavaScript-->
            <script src='../assets/vendor/jquery/jquery.min.js'></script>
            <script src='../assets/vendor/bootstrap/js/bootstrap.bundle.min.js'></script>

            <!-- Core plugin JavaScript-->
            <script src='../assets/vendor/jquery-easing/jquery.easing.min.js'></script>

            <!-- Custom scripts for all pages-->
            <script src='../assets/js/sb-admin-2.min.js'></script>
        </body>
    </html>
    ";
?>