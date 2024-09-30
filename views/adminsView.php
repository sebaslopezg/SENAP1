<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cursos</title>

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
      <span style="margin-left: 1%">Gestión de Admins</span>
    </nav>
    <!-- /.navbar -->


    <?php sideBar(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">

            <div class="col-sm-1" style="text-align: center;">
              <h1>Admins</h1>
            </div>

            <div class="col-sm-4">
              <!-- Inicio modal -->
              <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modalAgregarCurso">
                <i class="bi bi-plus-circle"></i>
                Agregar Admin
              </button>

              <!-- Modal -->
              <div
                class="modal fade"
                id="modalAgregarCurso"
                tabindex="-1"
                aria-labelledby="labelAgregarCurso"
                aria-hidden="true"
                data-bs-backdrop="static"
                data-bs-keyboard="false">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="labelAgregarCurso">Nuevo Admin</h1>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    </div>

                    <!-- Inicio del Formulario -->
                    <form action="index.php?call=admins&accion=guardar" method="post">
                      <!--Inicio contenido de la modal-->
                      <div class="modal-body">
                        <input
                          type="hidden"
                          name="id"
                          value="" />

                        <div>
                          <label for="usuario" class="form-label">Usuario: </label>
                          <br />
                          <input
                            class="form-control"
                            type="text"
                            name="usuario"
                            id="usuario"
                            placeholder="Usuario"
                            aria-label="Usuario"
                            value=""
                            required />
                        </div>
                        <br />
                        <div>
                          <label for="password" class="form-label">Contraseña: </label>
                          <br />
                          <input
                            class="form-control"
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Contraseña"
                            aria-label="Contraseña"
                            value=""
                            required />
                        </div>
                        <br />
                        <div>
                          <label for="correo" class="form-label">Correo: </label>
                          <br />
                          <input
                            class="form-control"
                            type="text"
                            name="correo"
                            id="correo"
                            placeholder="Correo"
                            aria-label="Correo"
                            value=""
                            required />
                        </div>
                        <br />
                        <div>
                          <label for="nombre" class="form-label">Nombre: </label>
                          <br />
                          <input
                            class="form-control"
                            type="text"
                            name="nombre"
                            id="nombre"
                            placeholder="Nombre"
                            aria-label="Nombre"
                            value=""
                            required />
                        </div>
                        <br />
                        <div>
                          <label for="apellido" class="form-label">Apellido: </label>
                          <br />
                          <input
                            class="form-control"
                            type="text"
                            name="apellido"
                            id="apellido"
                            placeholder="Apellido"
                            aria-label="Apellido"
                            value=""
                            required />
                        </div>
                        <br />

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
                      </div>
                    </form>

                  </div>
                </div>
              </div>
              <!--Fin modal-->
            </div>

            <div class="col-sm-9">
              <ol class="breadcrumb float-sm-right" style="padding-right: 1%">
                <li class="breadcrumb-item active">Admins</li>
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
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Acción</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php if (!empty($admins)): ?>
                        <?php foreach ($admins as $admin): ?>
                          <tr>
                            <td><?= htmlspecialchars($admin['usuario_Adm']); ?></td>
                            <td><?= htmlspecialchars($admin['correo_Adm']); ?></td>
                            <td><?= htmlspecialchars($admin['nombre_Adm']); ?></td>
                            <td><?= htmlspecialchars($admin['apellido_Adm']); ?></td>
                            <td style="text-align: center">

                              <!-- Botón para abrir el modal específico de este admin -->
                              <button type="button" class="btn btn-primary bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#modalEditarCurso<?php echo $admin['id_Adm']; ?>">
                                Editar
                              </button>

                              <!-- Modal único para cada admin -->
                              <div class="modal fade" id="modalEditarCurso<?php echo $admin['id_Adm']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Curso</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <!-- Formulario de Editar-->
                                    <form action="index.php?call=cursosAcciones&accion=actualizar" method="post">
                                      <div class="modal-body text-start">
                                        <input type="hidden" name="id" value="<?php echo $admin['id_Adm']; ?>">

                                        <!-- Usuario -->
                                        <div class="mb-3">
                                          <label for="usuario<?php echo $admin['id_Adm']; ?>" class="form-label">Usuario:</label>
                                          <input
                                            class="form-control"
                                            type="text"
                                            name="usuario"
                                            id="usuario<?php echo $admin['id_Adm']; ?>"
                                            value="<?php echo $admin['usuario_Adm']; ?>"
                                            required>
                                        </div>

                                        <!-- Correo -->
                                        <div class="mb-3">
                                          <label for="correo<?php echo $admin['id_Adm']; ?>" class="form-label">Correo:</label>
                                          <input
                                            class="form-control"
                                            type="text"
                                            name="correo"
                                            id="correo<?php echo $admin['id_Adm']; ?>"
                                            value="<?php echo $admin['correo_Adm']; ?>"
                                            required>
                                        </div>

                                        <!-- Nombre -->
                                        <div class="mb-3">
                                          <label for="nombre<?php echo $admin['id_Adm']; ?>" class="form-label">Nombre:</label>
                                          <input
                                            class="form-control"
                                            type="text"
                                            name="nombre"
                                            id="nombre<?php echo $admin['id_Adm']; ?>"
                                            value="<?php echo $admin['nombre_Adm']; ?>"
                                            required>
                                        </div>

                                        <!-- Apellido -->
                                        <div class="mb-3">
                                          <label for="apellido<?php echo $admin['id_Adm']; ?>" class="form-label">apellido:</label>
                                          <input
                                            class="form-control"
                                            type="text"
                                            name="apellido"
                                            id="apellido<?php echo $admin['id_Adm']; ?>"
                                            value="<?php echo $admin['apellido_Adm']; ?>"
                                            required>
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
                      <?php else: ?>
                        <tr>
                          <td colspan="5">¡No hay Administradores!</td>
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
    crossorigin="anonymous"></script>

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
</body>

</html>