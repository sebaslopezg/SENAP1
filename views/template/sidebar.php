<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="brand-link" style="text-align: center">
        <i class="nav-icon fas fa-chart-line" style="padding-right: 2%"></i>
        <h6>Sistema de Gestión</h6>
    </div>


    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="justify-content: center">
            <div class="icon">
                <i class="fas fa-user fa-2x" style="color: #c0c0c0; margin-left: 12%"></i>
            </div>
            <div class="info">
                <span style="color: white"><?= $_SESSION['usuario'] ?></span>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <li class="nav-item">
                    <a href="index.php?call=home" class="nav-link <?= $_GET['call'] == 'home' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?call=aprendices" class="nav-link <?= $_GET['call'] == 'aprendices' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Aprendices</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?call=cursos" class="nav-link <?= $_GET['call'] == 'cursos' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Cursos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?call=asignaciones" class="nav-link <?= $_GET['call'] == 'asignaciones' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>Asignaciones</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?call=admins" class="nav-link <?= $_GET['call'] == 'admins' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Admins</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?call=reportes" class="nav-link <?= $_GET['call'] == 'reportes' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Reportes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?call=logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Salir</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside> 