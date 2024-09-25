<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cursos</title>

  <!-- AdminLTE CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css" />
  <!--Bootstrap-->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />

  <!--Bootstrap Icons-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <!-- Google Font: Source Sans Pro -->
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />

  <!-- Font Awesome Icons -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- DataTables -->
  <link
    rel="stylesheet"
    href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" />
  <link
    rel="stylesheet"
    href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" />
  <link
    rel="stylesheet"
    href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap4.min.css" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav" style="margin-left: 1%;">
        <li class=" nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul
            class="nav nav-pills nav-sidebar flex-column"
            data-widget="treeview"
            role="menu"
            data-accordion="true">
            <!-- Aprendices Menu -->
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Aprendices
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <!-- Crear Aprendiz -->
                <li class="nav-item">
                  <a href="crear_aprendiz.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Crear Aprendiz</p>
                  </a>
                </li>
                <!-- Editar Aprendiz -->
                <li class="nav-item">
                  <a href="editar_aprendiz.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Editar Aprendiz</p>
                  </a>
                </li>
                <!-- Mostrar Aprendices -->
                <li class="nav-item">
                  <a href="mostrar_aprendices.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Mostrar Aprendices</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Cursos Menu -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Cursos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <!-- Crear Curso -->
                <li class="nav-item">
                  <a href="crear_curso.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Crear Curso</p>
                  </a>
                </li>
                <!-- Editar Curso -->
                <li class="nav-item">
                  <a href="editar_curso.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Editar Curso</p>
                  </a>
                </li>
                <!-- Mostrar Cursos -->
                <li class="nav-item">
                  <a href="mostrar_cursos.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Mostrar Cursos</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-1 ps-4">
              <h1>Cursos</h1>
            </div>

            <div class="col-sm-4">
              <!-- Inicio modal -->
              <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <i class="bi bi-plus-circle"></i>
                Agregar curso
              </button>

              <!-- Modal -->
              <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Curso</h1>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    </div>

                    <!-- Inicio del Formulario -->
                    <form action="index.php" method="post">
                      <!--Inicio contenido de la modal-->
                      <div class="modal-body">
                        <input
                          type="hidden"
                          name="id"
                          value="<?php echo isset($curso) ? $curso['id'] : ''; ?>" />

                        <div>
                          <label for="nombreCur" class="form-label">Nombre: </label>
                          <br />
                          <input
                            class="form-control"
                            type="text"
                            name="nombreCurso"
                            id="nombreCurso"
                            placeholder="Nombre del curso"
                            aria-label="Nombre del curso"
                            value="<?php echo isset($curso) ? htmlspecialchars($curso['nombreCurso']) : ''; ?>"
                            required />
                        </div>

                        <br />

                        <div>
                          <label for="descripcion">Descripcion:</label>
                          <textarea
                            class="form-control"
                            name="descripcion"
                            id="descripcion"
                            placeholder="Descripcion"
                            rows="3"
                            required><?php echo isset($curso) ? htmlspecialchars($curso['descripcion']) : ''; ?></textarea>
                        </div>
                      </div>
                      <!--Fin contenido de la modal-->

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                          Cerrar
                        </button>
                        <button
                          type="submit"
                          name="action"
                          value="agregar"
                          class="btn btn-primary">
                          Agregar
                        </button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
              <!--Fin modal-->
            </div>

            <div class="col-sm-7 pe-4">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Cursos</li>
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
              <!-- /.card -->

              <div class="card">
                <!-- <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                  </div> -->
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Fecha de Creación</th>
                        <th>Acción</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach ($cursos as $curso): ?>
                        <tr>
                          <td><?php echo $curso['id_Cur']; ?></td>
                          <td><?php echo $curso['nombre_Cur']; ?></td>
                          <td><?php echo $curso['descripcion_Cur']; ?></td>
                          <td><?php echo $curso['fecha_Creacion_Cur']; ?></td>
                          <td style="text-align: center">
                            <!-- Botón para abrir el modal específico de este curso -->
                            <button type="button" class="btn btn-primary bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#modalEditarCurso<?php echo $curso['id_Cur']; ?>">
                              Editar
                            </button>

                            <!-- Modal único para cada curso -->
                            <div class="modal fade" id="modalEditarCurso<?php echo $curso['id_Cur']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Curso</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>

                                  <!-- Formulario de Editar-->
                                  <form action="index.php" method="post">
                                    <div class="modal-body text-start">
                                      <input type="hidden" name="id" value="<?php echo $curso['id_Cur']; ?>">

                                      <!-- Nombre del curso -->
                                      <div class="mb-3">
                                        <label for="nombreCurso<?php echo $curso['id_Cur']; ?>" class="form-label">Nombre:</label>
                                        <input
                                          class="form-control"
                                          type="text"
                                          name="nombreCurso"
                                          id="nombreCurso<?php echo $curso['id_Cur']; ?>"
                                          value="<?php echo $curso['nombre_Cur']; ?>"
                                          required>
                                      </div>

                                      <!-- Descripción del curso -->
                                      <div class="mb-3">
                                        <label for="descripcion<?php echo $curso['id_Cur']; ?>" class="form-label">Descripción:</label>
                                        <textarea class="form-control" name="descripcion" id="descripcion<?php echo $curso['id_Cur']; ?>" required><?php echo trim($curso['descripcion_Cur']); ?></textarea>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                      <button class="btn btn-primary" type="submit" name="action" value="actualizar">Editar</button>
                                    </div>
                                  </form>
                                  <!-- Fin Formulario de Editar-->
                                </div>
                              </div>
                            </div>
                            <!-- Fin del modal -->
                          </td>
                        </tr>
                      <?php endforeach; ?>
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
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!--Bootstrap-->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- Bootstrap 4 -->
  <!-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- DataTables  & Plugins -->
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <!-- <script src="./plugins/datatables/jquery.dataTables.min.js"></script> -->

  <!-- <script src="https://cdn.datatables.net/bs4/1.11.5/js/dataTables.bootstrap4.min.js"></script> -->
  <!-- <script src="./js/dataTables.bootstrap4.min.js"></script> -->
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>


  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <!-- <script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> -->

  <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
  <!-- <script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> -->

  <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>

  <!-- <script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="./plugins/jszip/jszip.min.js"></script>
    <script src="./plugins/pdfmake/pdfmake.min.js"></script>
    <script src="./plugins/pdfmake/vfs_fonts.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->
  <!-- AdminLTE -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/demo.js"></script> -->
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
</body>

</html>