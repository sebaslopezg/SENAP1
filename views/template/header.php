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

  <!-- Sweet Alerts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Estilos personalizados -->
  <style>
    /* Clase personalizada para eliminar el subrayado */
    .no-underline {
      text-decoration: none;
      color: inherit;
      /* Mantiene el color del texto original */
    }

    /* Asegura que no aparezca el subrayado en hover */
    .no-underline:hover {
      text-decoration: none;
    }

    /* Cambia el cursor para que parezca un botón */
    .info-box {
      cursor: pointer;
      transition: all 0.3s ease;
    }

    /* Efecto hover para que se vea como un botón */
    .info-box:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Cards del home */

    .small-box {
      transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .small-box:hover {
      background-color: #2980B9;
      /* Cambia el color de fondo en hover */
      transform: scale(1.05);
      /* Aumenta el tamaño ligeramente */
    }

    .small-box-footer:hover {
      color: #FFF;
      /* Cambia el color del texto del enlace al pasar el mouse */
    }

    /* Sidebar */

    /* Oculta el texto del logotipo cuando el menú esté contraído */
    .sidebar-collapse .brand-link h6 {
      display: none;
      /* Oculta el texto "Sistema de Gestión" */
    }

    /* Oculta el texto del usuario cuando el menú esté contraído */
    .sidebar-collapse .user-panel .info span {
      display: none;
      /* Oculta el texto "admin" */
    }

    /* Muestra los iconos cuando el menú esta contraído */
    .sidebar-collapse .brand-link .nav-icon,
    .sidebar-collapse .user-panel .icon {
      display: inline-block;
    }

    /* Muestra el texto normalmente cuando el menú esté expandido */
    .brand-link h6,
    .user-panel .info span {
      display: inline-block;
      /* Asegura que el texto esté visible */
    }
  </style>