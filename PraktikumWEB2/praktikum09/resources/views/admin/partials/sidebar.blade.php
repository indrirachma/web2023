<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <i class="fas fa-heartbeat brand-image img-circle elevation-3 mt-2" style="opacity: .8"></i>
        <span class="brand-text font-weight-light">Portal Kesehatan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="dasboard.php" class="d-block">Indri Rachma</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Table Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pasien" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Table Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dokter" class="nav-link">
                                <i class="fas fa-user-md nav-icon"></i>
                                <p>Table Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="periksa" class="nav-link">
                                <i class="fas fa-stethoscope nav-icon"></i>
                                <p>Table Periksa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="kelurahan" class="nav-link">
                                <i class="fas fa-map-marker-alt nav-icon"></i>
                                <p>Table Kelurahan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="unit_kerja" class="nav-link">
                                <i class="fas fa-building nav-icon"></i>
                                <p>Table Unit Kerja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="users" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Table Users</p>
                            </a>
                        </li>
                    </ul>

                    <!-- Logout Menu -->
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>