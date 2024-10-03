<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>

    <?php header_template(); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Barra de navegación - Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Enlaces de navegación -->
            <ul class="navbar-nav" style="margin-left: 1%">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <span style="margin-left: 1%">Reportes</span>
        </nav>
        <!-- /.navbar -->

        <!-- Sidebar -->
        <?php sideBar(); ?>

        <!-- Content Wrapper -->
        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4" style="padding-left: 1.2%">
                            <h1>Generar Reportes</h1>
                        </div>

                        <div class="col-sm-8" style="padding-right: 1%">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Reportes</li>
                                <li class="breadcrumb-item"><a href="index.php?call=home">Inicio</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row mt-2">
                        <!-- Alertas Button -->
                        <div class="col-lg-4 col-12">
                            <a href="index.php?call=reportes&reporte=cursosexistentes" class="no-underline">
                                <div class="info-box" style="color: white; background-color: #007BFF;">
                                    <span class="info-box-icon" style="background-color: white;"><i class="fas fa-book-open" style="color: #333333;"></i></span>
                                    <div class="info-box-content">
                                        <h5>Cursos existentes</h5>
                                        <span><?= $cantidadCursos ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Usuarios Activos Button -->
                        <div class="col-lg-4 col-12">
                            <a href="#" class="no-underline">
                                <div class="info-box" style="color: white; background-color: #28A745;">
                                    <span class="info-box-icon" style="background-color: white;"><i class="fas fa-users" style="color: #333333;"></i></span>
                                    <div class="info-box-content">
                                        <h5>Aprendices Asignados</h5>
                                        <span><?= $cantidadAprendices ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Usuarios Activos Button -->
                        <div class="col-lg-4 col-12">
                            <a href="#" class="no-underline">
                                <div class="info-box" style="color: white; background-color: #DC3545;">
                                    <span class="info-box-icon" style="background-color: white;"><i class="fas fa-exclamation-triangle" style="color: #333333;"></i></span>
                                    <div class="info-box-content">
                                        <h5>Aprendices sin cursos</h5>
                                        <span><?= $cantidadAprendicesSinCursos ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Pie de página -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2024.</strong> Todos los derechos reservados.
        </footer>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- AdminLTE -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>

</html>