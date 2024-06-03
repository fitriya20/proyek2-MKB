<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- start: Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- start: Icons -->
    <!-- start: CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- end: CSS -->
    <title>Penjual MKB</title>
</head>

<body>

    <!-- start: Sidebar -->
    <div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
        <div class="d-flex align-items-center p-3">
            <a href="#" class="sidebar-logo text-uppercase fw-bold text-decoration-none text-indigo fs-4">DSH
                Pelapak</a>
            <i class="sidebar-toggle ri-arrow-left-circle-line ms-auto fs-5 d-none d-md-block"></i>
        </div>
        <ul class="sidebar-menu d-flex flex-column p-3 m-0 mb-0 h-100">
            <li class="sidebar-menu-item">
                <a href="index.html">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Menu pelapak</li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#">
                    <i class="ri-pages-line sidebar-menu-item-icon"></i>
                    Pages
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item">
                        <a href="produk.html">
                            Upload produk
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item has-dropdown">
                        <a href="#">
                            Terima Pesanan
                            <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                        </a>
                        <ul class="sidebar-dropdown-menu">
                            <li class="sidebar-dropdown-menu-item">
                                <a href="pesanan.html">
                                    Pesanan masuk
                                </a>
                            </li>
                            <li class="sidebar-dropdown-menu-item">
                                <a href="pesanan2.html">
                                    Pesanan Dikirim
                                </a>
                            </li>
                            <li class="sidebar-dropdown-menu-item">
                                <a href="riwayat.html">
                                    Riwayat pesanan
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item has-dropdown">
                <a href="#">
                    <i class="ri-wallet-line sidebar-menu-item-icon"></i>
                    Dompet
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item">
                        <a href="penjualan.html">
                            Riwayat penjualan
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a href="#">
                            Hasil Penjualan
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item">
                <a href="profil.html">
                    <i class="ri-user-line sidebar-menu-item-icon"></i>
                    Edit profil
                </a>
            </li>
            <!-- Element spacer untuk mendorong elemen logout ke bawah -->
            <div class="flex-grow-1"></div>
            <li class="sidebar-menu-item">
                <a href="#">
                    <i class="ri-settings-line sidebar-menu-item-icon"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
    <!-- end: Sidebar -->

    <!-- start: Main -->
    <main class="bg-light">
        <div class="p-2">
            <!-- start: Navbar -->
            <nav class="px-3 py-2 bg-white rounded shadow-sm">
                <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
                <h5 class="fw-bold mb-0 me-auto">Pages</h5>
                <div class="dropdown">
                    <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="me-2 d-none d-sm-block">John Doe</span>
                        <img class="navbar-profile-image"
                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="Image">
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Chat</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </nav>
            <!-- end: Navbar -->

            <!-- start: Content -->
            <div class="py-4">
                <div class="container">
                    <h3><strong>Pesanan:</strong></h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-primary w-100">Pesanan masuk</a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-success w-100">Pesanan Dikirim</a>
                    </div>
                </div>
            </div>
            <!-- end: Content -->
        </div>
    </main>
    <!-- end: Main -->

    <!-- start: JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"
        integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <!-- end: JS -->
</body>

</html>