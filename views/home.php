<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>

    <?php header_template(); ?>

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

        <?php sideBar(); ?>

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
                                    <h3>Asignar cursos</h3>
                                    <p>Asigna cursos para cada aprendiz.</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
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