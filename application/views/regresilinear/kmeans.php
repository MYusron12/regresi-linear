<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Business Intelligence</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="<?= base_url('assets'); ?>/index3.html" class="navbar-brand">
          <img src="<?= base_url('assets'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">My Apps</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="<?= base_url('regresilinear/'); ?>" class="nav-link">Regresi Linear</a>
            </li>
            <li>
              <a href="<?= base_url('regresilinear/kmeans'); ?>" class="nav-link">Kmeans Clustering</a>
            </li>
          </ul>

          <!-- SEARCH FORM -->
          <form class="form-inline ml-0 ml-md-3">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>


      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Hai, <small>My Application Kmeans</small></h1>
              <?= $this->session->flashdata('message'); ?>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow">
                <div class="card-body">

                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-4">
              <div class="card shadow">
                <div class="card-header">
                  <h5 class="card-title m-0">Analisa Sigma</h5>
                </div>
                <div class="card-body">

                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="card shadow">
                <div class="card-header">
                  <h5 class="card-title m-0">Persamaan Regresi Linear Y = a + b X</h5>
                </div>
                <div class="card-body">

                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-lg-8">
              <table class="table table-bordered shadow">
                <thead>
                  <tr>
                    <th scope="col" class="">Hari Ke</th>
                    <th scope="col" class="">Pengunjung (X)</th>
                    <th scope="col" class="">Berbelanja (Y)</th>
                    <th scope="col" class="">X <sup>2</sup></th>
                    <th scope="col" class="">Y <sup>2</sup></th>
                    <th scope="col" class="">XY</th>
                    <th class="">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="">0</td>
                    <td class="">0</td>
                    <td class="">0</td>
                    <td class="">0</td>
                    <td class="">0</td>
                    <td class="">0</td>
                    <td class="">
                      <a href="" class="badge badge-success">edit</a>
                      <a href="" onclick="return confirm('Apakah akan dihapus?')" class="badge badge-danger">delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-4">
              <div class="card shadow">
                <div class="card-header">
                  <h5 class="card-title m-0">Rumus Regresi Linear</h5>
                </div>
                <div class="card-body">
                  <img src="" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets'); ?>/dist/js/demo.js"></script>
</body>

</html>