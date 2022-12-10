<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Profile</title>
  <?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
  <?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
  <?php echo link_tag('assests/css/sb-admin.css'); ?>
</head>

<body id="page-top">

  <?php include APPPATH . 'views/admin/includes/header.php'; ?>
  <div id="wrapper">
    <?php include APPPATH . 'views/admin/includes/sidebar.php'; ?>

    <div id="content-wrapper">
      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?php echo site_url('user/Dashboard'); ?>">User</a>
          </li>
          <li class="breadcrumb-item active">My Profile</li>
        </ol>

        <h3>
          <?php echo ($udetail->username); ?>'s Profile
        </h3>
        <hr>
        <strong>Name:</strong>
        <?php echo $udetail->username; ?>
        <br />
        <strong>Email:</strong>
        <?php echo $udetail->email; ?>
        <br />
        <strong>Status:</strong>
        <?php echo $udetail->status; ?>

      </div>
      <?php include APPPATH . 'views/admin/includes/footer.php'; ?>
    </div>
  </div>

  <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>

</body>

</html>