<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home Page</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <div id="wrapper">
    <div id="content-wrapper">
      <div class="container-fluid">

        <?php include APPPATH . 'views/nav.php'; ?>
        <h3>User Management System</h3>
        <hr>
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            &nbsp;
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>
                <div class="mr-5">User Login</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('user/login'); ?>">
                <span class="float-left">Click Here</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Admin Login</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/login'); ?>">
                <span class="float-left">Click Here</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>

</html>