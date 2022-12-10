<!DOCTYPE html>
<html lang="en">

<head>

  <title>Admin - Dashboard</title>

  <!-- Bootstrap core CSS-->
  <?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
  <!-- Custom fonts for this template-->
  <?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
  <!-- Page level plugin CSS-->
  <?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
  <!-- Custom styles for this template-->
  <?php echo link_tag('assests/css/sb-admin.css'); ?>

</head>

<body id="page-top">
  <?php include APPPATH . 'views/admin/includes/header.php'; ?>


  <div id="wrapper">

    <?php include APPPATH . 'views/admin/includes/sidebar.php'; ?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <?php include APPPATH . 'views/admin/includes/footer.php'; ?>


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-users"></i>
              </div>
              <div class="mr-5">Total Users</div>
            </div>
            <a class="card-footer text-white clearfix lg" href="<?php echo site_url('admin/Users'); ?>">
              <span class="float-left">
                <?php echo ($userCount) ?>
              </span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

      </div>
    </div>


    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>

</body>

</html>