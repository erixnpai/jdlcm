<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JDLCM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="stylesheet" href="build/css/all.min.css">
    <link rel="stylesheet" href="build/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="build/css/adminlte.min.css">
    <link rel="stylesheet" href="build/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="build/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="build/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="build/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="build/css/toastr.min.css">
    <link rel="shortcut icon" href="build/img/icono.png" type="image/x-icon">
</head>

<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
    <?php include_once __DIR__ . '/templates/sidebar.php';   ?>
        <?php include_once __DIR__ . '/templates/navbar.php';   ?>
        <?php include_once __DIR__ . '/templates/tabla.php';   ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="build/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="build/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="build/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="build/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="build/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="build/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="build/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="build/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="build/plugins/jszip/jszip.min.js"></script>
    <script src="build/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="build/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="build/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="build/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="build/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="build/js/adminlte.min.js"></script>
    <script src="build/js/demo.js"></script>

    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>