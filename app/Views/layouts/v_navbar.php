<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-teal">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url() ?>" class="nav-link">TNA</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('cobascaffold') ?>" class="nav-link">Scaffold</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('sertifikasi') ?>" class="nav-link">Sertifikasi</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fa fa-id-badge mr-2"></i> About Profil
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fa fa-sign-out"></i> Log Out
                </a>
            </div>
        </li>
    </ul>

</nav>
<!-- /.navbar -->