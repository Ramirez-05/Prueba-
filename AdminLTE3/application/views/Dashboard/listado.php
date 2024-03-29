<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables --> 
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->    
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url();?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="http://[::1]/AdminLTE3/index.php/Dashboard/listado" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Lista usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://[::1]/AdminLTE3/index.php/Dashboard/plantilla" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Registrar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../Dashboard/logout" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Cerrar Sesion
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card mt-5">
              <div class="card-header">
                <h3 class="card-title">TABLA USUARIOS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PASSWORD(s)</th>
                    <th>CORREO</th>
                    <th>ROL</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                      <td></td>
                    </tr>
                  <?php foreach ($usuarios as $key => $usuario): ?>
                    <tr>
                        <th scope="row"><?= $usuario->id_usuario ?></th>
                        <td><?= $usuario->nombre ?></td>
                        <td><?= $usuario->password ?></td>
                        <td><?= $usuario->correo ?></td>
                        <td><?= $usuario->rol ?></td>
                        <td><a class="btn btn-primary" href="plantilla/<?php echo $usuario->id_usuario ?>">Editar</a></td>
                        <td><a class="btn btn-primary" href="ver/<?php echo $usuario->id_usuario ?>">Ver</a></td>
                        <td><a class="btn btn-danger" href="borrar/<?php echo $usuario->id_usuario ?>">Borrar</a></td>
                    </tr>
                  <?php endforeach; ?>
                  
                  </tfoot>
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
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2022-2024 <a href="#"> Santiago Ramirez</a>. </strong> ADSO.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url();?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>/assets/dist/js/demo.js"></script>
<!-- Page specific script -->
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
