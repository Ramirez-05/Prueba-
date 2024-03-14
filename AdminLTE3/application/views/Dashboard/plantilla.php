<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="http://[::1]/AdminLTE3/index.php/Dashboard/listado" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                lista usuarios
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
                Cerrar sesioon
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
    <section class="content d-flex justify-content-center">

      <!-- Default box -->
      <div class="card col-6 mt-5">
        <div class="card-body">
            <div class="">
                <div class="">
                <h1 class="text-center">FORM</h1>
    <?php echo form_open('');?>
            <div class="form-group">
                <?php
                    echo form_label('Nombre', 'nombre');

                    $data = [
                        'name'      => 'nombre',
                        'value'     => $nombre,
                        'class'     => 'form-control input-lg', 
                    ];
                    echo form_input($data);
                    ?>
            </div>
            <div class="form-group">
                <?php
                    echo form_label('Contraseña', 'Contraseña');

                    $data = [
                        'name'      => 'password',
                        'value'     => $password,
                        'type'     => 'password',
                        'class'     => 'form-control input-lg', 
                    ];
                    echo form_input($data);
                    ?>
            </div>
            <div class="form-group">
                <?php
                    echo form_label('correo', 'correo');

                    $data = [
                        'name'      => 'correo',
                        'value'     => $correo,
                        'class'     => 'form-control input-lg', 
                    ];
                    echo form_input($data);
                    ?>
            </div>

            
            <?php 
              echo form_label('Tipo:', 'Tipo:');
                  $options = array(
                      'Admin'  => 'Admin',
                      'Cajero' => 'Cajero',
                  );

                  $attributes = array('class' => 'form-control'); // Clase CSS para el select

                  echo form_dropdown('rol', $options, set_value('rol'), $attributes);
                  ?>
                <br>
                <br>
            <?php 
                $data = array(
                    'name' => 'mysubmit',
                    'id'  =>  'boton',
                    'type' => 'submit',
                    'class' => 'btn btn-primary text-center',
                    'content' => 'ENVIAR'
                );
                echo form_button($data)
            ?> 
        <?php echo form_close();?>
                </div>
            </div>
      </div>
      <!-- /.card -->

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
<!-- AdminLTE App -->
<script src="<?= base_url();?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>/assets/dist/js/demo.js"></script>
</body>
</html>
