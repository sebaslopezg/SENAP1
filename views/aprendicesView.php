<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cursos</title>

  <?php header_template(); ?>
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

    <?php sideBar(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-2 ps-4">
              <h1>Aprendices</h1>
            </div>

            <div class="col-sm-4">
              <!-- Inicio modal -->
              <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modalAprendices">
                <i class="bi bi-plus-circle"></i>
                Agregar curso
              </button>

              <!-- Modal -->
              <div
                class="modal fade"
                id="modalAprendices"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="modalAprendicesLabel">Nuevo Aprendiz</h1>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    </div>

                    <!-- Inicio del Formulario -->
                    <form action="index.php?call=aprendices&accion=guardar" method="POST">
                      <!--Inicio contenido de la modal-->
                      <div class="modal-body">
                        <div>
                          <label for="nombreCur" class="form-label">Nombre: </label>
                          <br />
                          <input
                            class="form-control"
                            type="text"
                            name="nombreAprendiz"
                            id="nombreAprendiz"
                            placeholder="Nombre del curso"
                            aria-label="Nombre del curso"
                            required />
                        </div>
                        <br />
                        <div>
                          <label for="nombreCur" class="form-label">Apellido: </label>
                          <br />
                          <input
                            class="form-control"
                            type="text"
                            name="apellidoAprendiz"
                            placeholder="Apellidos del aprendiz"
                            aria-label="Apellidos del aprendiz"
                            required />
                        </div>
                        <br />
                        <div>
                          <label for="nombreCur" class="form-label">Documento: </label>
                          <br />
                          <input
                            class="form-control"
                            type="text"
                            name="documentoAprendiz"
                            placeholder="Documento del aprendiz"
                            aria-label="Documento del aprendiz"
                            required />
                        </div>
                        <br />
                        <div>
                          <label for="nombreCur" class="form-label">Genero: </label>
                          <br />
                            <select class="form-control" name="generoAprendiz" id="">
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                                <option value="na">Prefiero no decirlo</option>
                            </select>
                        </div>
                        <br />
                        <div>
                          <label for="nombreCur" class="form-label">Fecha de nacimiento: </label>
                          <br />
                            <input name="fechaNacimientoAprendiz" class="form-control" type="date">
                        </div>
                        <br />
                        <div>
                          <label for="nombreCur" class="form-label">Telefono: </label>
                          <br />
                          <input
                            class="form-control"
                            type="text"
                            name="telefonoAprendiz"
                            placeholder="Telefono del aprendiz"
                            aria-label="Telefono del aprendiz"
                            required />
                        </div>
                        <br />
                        <div>
                          <label for="nombreCur" class="form-label">Correo: </label>
                          <br />
                          <input
                            class="form-control"
                            type="email"
                            name="correoAprendiz"
                            placeholder="Correo del aprendiz"
                            aria-label="Correo del aprendiz"
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
                    </form>

                  </div>
                </div>
              </div>
              <!--Fin modal-->
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
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Documento</th>
                            <th>Genero</th>
                            <th>Fecha de nacimiento</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Accion</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php if (count($arrAprendices) > 0): ?>
                        <?php foreach ($arrAprendices as $aprendiz): ?>
                        <tr>
                          <td><?= $aprendiz['nombre_Apr']; ?></td>
                          <td><?= $aprendiz['apellido_Apr']; ?></td>
                          <td><?= $aprendiz['num_Doc_Apr']; ?></td>
                          <td><?= $aprendiz['genero_Apr']; ?></td>
                          <td><?= $aprendiz['fecha_Nacimiento_Apr']; ?></td>
                          <td><?= $aprendiz['telefono_Apr']; ?></td>
                          <td><?= $aprendiz['correo_Apr']; ?></td>
                          <td style="text-align: center">
                            <!-- Botón para abrir el modal específico de este curso -->
                            <button type="button" class="btn btn-primary bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#modalEditarCurso<?= $aprendiz['num_Doc_Apr']; ?>">
                              Editar
                            </button>

                            <!-- Modal único para cada curso -->
                            <div class="modal fade" id="modalEditarCurso<?= $aprendiz['num_Doc_Apr']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Aprendiz</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>

                                  <!-- Formulario de Editar-->
                                  <form action="index.php?call=aprendices&accion=editar" method="POST">
                                    <div class="modal-body text-start">

                                      <div class="mb-3">
                                        <label class="form-label">Nombre:</label>
                                        <input
                                          class="form-control"
                                          type="text"
                                          name="nombreAprendiz"
                                          value="<?= $aprendiz['nombre_Apr']; ?>"
                                          required>
                                      </div>
                                      <br>
                                      <div class="mb-3">
                                        <label class="form-label">Apellido:</label>
                                        <input
                                          class="form-control"
                                          type="text"
                                          name="apellidoAprendiz"
                                          value="<?= $aprendiz['apellido_Apr']; ?>"
                                          required>
                                      </div>
                                      <br>
                                      <div class="mb-3">
                                        <label class="form-label">Documento:</label>
                                        <input
                                          class="form-control"
                                          type="text"
                                          name="documentoAprendiz"
                                          value="<?= $aprendiz['num_Doc_Apr']; ?>"
                                          required>
                                      </div>
                                      <br>
                                      <div class="mb-3">
                                        <label class="form-label">Genero:</label>
                                        <input
                                          class="form-control"
                                          type="text"
                                          name="generoAprendiz"
                                          value="<?= $aprendiz['genero_Apr']; ?>"
                                          required>
                                      </div>
                                      <br>
                                      <div class="mb-3">
                                        <label class="form-label">Fecha de nacimiento:</label>
                                        <input
                                          class="form-control"
                                          type="text"
                                          name="fechaNacimientoAprendiz"
                                          value="<?= $aprendiz['fecha_Nacimiento_Apr']; ?>"
                                          required>
                                      </div>
                                      <br>
                                      <div class="mb-3">
                                        <label class="form-label">Telefono:</label>
                                        <input
                                          class="form-control"
                                          type="text"
                                          name="telefonoAprendiz"
                                          value="<?= $aprendiz['telefono_Apr']; ?>"
                                          required>
                                      </div>
                                      <br>
                                      <div class="mb-3">
                                        <label class="form-label">Correo:</label>
                                        <input
                                          class="form-control"
                                          type="text"
                                          name="correoAprendiz"
                                          value="<?= $aprendiz['correo_Apr']; ?>"
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