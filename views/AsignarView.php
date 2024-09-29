<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Asignar Cursos</title>

  <?php header_template(); ?>

  <!-- Estilos personalizados -->
  <style>
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
      <span style="margin-left: 1%">Asignaciones</span>
    </nav>
    <!-- /.navbar -->

    <?php sideBar(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-2" style="text-align: center;">
              <h1>Asignaciones</h1>
            </div>

            <div class="col-sm-2">
              <!-- Inicio modal -->
              <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modalAsignarCurso">
                <i class="bi bi-plus-circle"></i>
                Nueva Asignacion
              </button>

              <!-- Modal -->
              <div
                class="modal fade"
                id="modalAsignarCurso"
                tabindex="-1"
                aria-labelledby="labelAsignarCurso"
                aria-hidden="true"
                data-bs-backdrop="static"
                data-bs-keyboard="false">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="labelAsignarCurso">Nueva Asignacion</h1>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    </div>

                    <!--Inicio contenido de la modal-->
                    <div class="modal-body">
                      <div class="row">

                        <div class="col-12 col-sm-1"></div>
                        <div class="col-12 col-sm-10">
                          <div class="card card-primary card-tabs">
                            <div class="card-header p-0 pt-1">
                              <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                <li class="pt-2 px-3">
                                  <h3 class="card-title">Asignar</h3>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Aprendices</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Cursos</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card-body">
                              <div class="tab-content" id="custom-tabs-two-tabContent">
                                <div
                                  class="tab-pane fade show active"
                                  id="custom-tabs-two-home"
                                  role="tabpanel"
                                  aria-labelledby="custom-tabs-two-home-tab">

                                  <form action="index.php?call=asignarAprendices" method="post">
                                    <div class="row">

                                      <div class="col-12 col-sm-1"></div>
                                      <div class="col-12 col-sm-5">

                                        <?php foreach ($aprendices as $aprendiz): ?>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="arrayAprendices[]" value="<?php echo $aprendiz['num_Doc_Apr']; ?>" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">

                                              <?php echo $aprendiz['nombre_Apr'];
                                              echo ' ' . $aprendiz['apellido_Apr']; ?>

                                            </label>
                                          </div>
                                        <?php endforeach; ?>

                                      </div>
                                      <div class="col-12 col-sm-5">

                                        <?php foreach ($cursos as $curso): ?>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cursoSeleccionado" value="<?php echo $curso['id_Cur']; ?>" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                              <?php echo $curso['id_Cur'];
                                              echo '. ' . $curso['nombre_Cur']; ?>
                                            </label>
                                          </div>
                                        <?php endforeach; ?>

                                      </div>
                                      <div class="col-12 col-sm-1"></div>

                                    </div>

                                    <div class="modal-footer mt-3">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Cerrar
                                      </button>
                                      <button
                                        type="submit"
                                        name="action"
                                        value="asignar"
                                        class="btn btn-primary">
                                        Asignar
                                      </button>
                                    </div>
                                  </form>
                                </div>

                                <div
                                  class="tab-pane fade"
                                  id="custom-tabs-two-profile"
                                  role="tabpanel"
                                  aria-labelledby="custom-tabs-two-profile-tab">

                                  <form action="index.php?call=asignarCursos" method="post">
                                    <div class="row">
                                      <div class="col-12 col-sm-1"></div>
                                      <div class="col-12 col-sm-5">

                                        <?php foreach ($aprendices as $aprendiz): ?>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="aprendizSeleccionado" value="<?php echo $aprendiz['num_Doc_Apr']; ?>" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">

                                              <?php echo $aprendiz['nombre_Apr'];
                                              echo ' ' . $aprendiz['apellido_Apr']; ?>
                                            </label>
                                          </div>
                                        <?php endforeach; ?>

                                      </div>
                                      <div class="col-12 col-sm-5">

                                        <?php foreach ($cursos as $curso): ?>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="arrayCursos[]" value="<?php echo $curso['id_Cur']; ?>" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">

                                              <?php echo $curso['id_Cur'];
                                              echo '. ' . $curso['nombre_Cur']; ?>
                                            </label>
                                          </div>
                                        <?php endforeach; ?>

                                      </div>
                                      <div class="col-12 col-sm-1"></div>

                                    </div>

                                    <div class="modal-footer mt-3">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Cerrar
                                      </button>
                                      <button
                                        type="submit"
                                        name="action"
                                        value="asignar"
                                        class="btn btn-primary">
                                        Asignar
                                      </button>
                                    </div>
                                  </form>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-1"></div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--Fin modal-->
            </div>

            <div class="col-sm-8" style="padding-right: 1%">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Asignaciones</li>
                <li class="breadcrumb-item"><a href="index.php?call=home">Inicio</a></li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Curso</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php if (!empty($asignaciones)): ?>
                        <?php foreach ($asignaciones as $asignacion): ?>
                          <tr>
                            <td><?php echo htmlspecialchars($asignacion['num_Doc_Apr']); ?></td>
                            <td><?php echo htmlspecialchars($asignacion['nombre_Apr']); ?></td>
                            <td><?php echo htmlspecialchars($asignacion['apellido_Apr']); ?></td>
                            <td><?php echo htmlspecialchars($asignacion['nombre_Cur']); ?></td>

                          </tr>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan="4">¡No existen asignaciones!</td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->

              </div>
              <!-- /.card -->

            </div>
            <!-- /.col -->

          </div>
          <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

      </section>
      <!-- /.content -->


    </div>
    <!-- /.content-wrapper -->

    <!-- Pie de página -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2024.</strong> Todos los derechos reservados.
    </footer>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!--Bootstrap-->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
  </script>

  <!-- DataTables  & Plugins -->
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

  <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>

  <!-- AdminLTE -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1")
        .DataTable({
          responsive: true,
          lengthChange: false,
          autoWidth: false,
          buttons: ["copy", /*  "csv" */ , "excel", "pdf", "print", "colvis"],
        })
        .buttons()
        .container()
        .appendTo("#example1_wrapper .col-md-6:eq(0)");
      $("#example2").DataTable({
        paging: true,
        lengthChange: false,
        searching: false,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
      });
    });
  </script>
  <!-- Script personalizado para inicializar los tabs -->
  <script>
    $(document).ready(function() {
      // Inicializa los tabs para mostrar el contenido correspondiente
      $('#custom-tabs-two-tab a').on('click', function(e) {
        e.preventDefault();
        $(this).tab('show');
      });
    });
  </script>
</body>

</html>