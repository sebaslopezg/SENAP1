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

    <?php sideBar(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-1 ps-4">
              <h1>Pagina Principal</h1>
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
                    HOME
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
  </script>
</body>

</html>