<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <!-- CSS de AdminLTE y Bootstrap -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css" />
    <!-- Font-Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Estilos personalizados -->
    <style>
        .welcome {
            background: #f4f6f9;
            padding: 3vh 5vw;
        }

        .small-box {
            transition: transform 0.3s;
        }

        .small-box:hover {
            transform: scale(1.04);
        }

        /* Ocultar el texto del logotipo cuando el menú esté contraído */
        .sidebar-collapse .brand-link h6 {
            display: none;
            /* Oculta el texto "Sistema de Gestión" */
        }

        /* Ocultar el texto del usuario cuando el menú esté contraído */
        .sidebar-collapse .user-panel .info span {
            display: none;
            /* Oculta el texto "Usuario" */
        }

        /* Mostrar los iconos cuando el menú esté contraído */
        .sidebar-collapse .brand-link .nav-icon,
        .sidebar-collapse .user-panel .icon {
            display: inline-block;
        }

        /* Mostrar el texto normalmente cuando el menú esté expandido */
        .brand-link h6,
        .user-panel .info span {
            display: inline-block;
            /* Asegura que el texto esté visible */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Barra de navegación -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Enlaces de navegación -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <span style="margin-left: 1%">Inicio</span>
        </nav>

        <!-- Menú lateral -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Logotipo -->
            <div class="brand-link" style="text-align: center">
                <i class="nav-icon fas fa-chart-line" style="padding-right: 2%"></i>
                <h6>Sistema de Gestión</h6>
            </div>
            <!-- Menú -->
            <div class="sidebar">
                <!-- Perfil de usuario -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="justify-content: center">
                    <div class="icon">
                        <i class="fas fa-user fa-2x" style="color: #c0c0c0; margin-left: 12%"></i>
                    </div>
                    <div class="info">
                        <span style="color: white">Administrador</span>
                    </div>
                </div>

                <!-- Navegación -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?call=aprendices" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Aprendices</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?call=cursos" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Cursos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?call=asignaciones" class="nav-link">
                                <i class="nav-icon fas fa-tasks"></i>
                                <p>Asignaciones</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Contenido de la página -->
        <div class="content-wrapper">
            <!-- Encabezado de la página -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Bienvenido</h1>
                        </div>
                        <div class="col-sm-6" style="padding-right: 0.7%">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Inicio</li>
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contenido principal -->
            <section class="content welcome">
                <div class="container-fluid">
                    <!-- Tarjetas de características -->
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- Tarjeta pequeña -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>Aprendices</h3>
                                    <p>Crea y edita aprendices.</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="index.php?call=aprendices" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>Cursos</h3>
                                    <p>Crea y edita cursos.</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <a href="index.php?call=cursos" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-6">
                            <div class="small-box" style="color: white; background-color: #e67e22">
                                <div class="inner">
                                    <h3>Asignaciones</h3>
                                    <p>Asigna cursos para cada aprendiz o aprendices para cada curso.</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <a href="index.php?call=asignaciones" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Pie de página -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2024.</strong> Todos los derechos reservados.
        </footer>
    </div>

    <!-- Scripts de AdminLTE y Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>