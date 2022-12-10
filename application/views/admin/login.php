<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

  <div id="wrapper">
    <div id="content-wrapper">
      <div class="container-fluid">
        <?php include APPPATH . 'views/nav.php'; ?>
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="card" style="margin-top: 30px">
                <div class="card-header text-center">
                  Admin Login
                </div>
                <div class="card-body">
                  <form method="post" autocomplete="off" action="<?= base_url('admin/Login') ?>">

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" placeholder="Email Address" name="email" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" placeholder="User Password" class="form-control"
                        id="exampleInputPassword1">
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Login Now</button>
                    </div>

                    <?php
                    if ($this->session->flashdata('error')) { ?>
                    <p class="text-danger text-center" style="margin-top: 10px;">
                      <?= $this->session->flashdata('error') ?>
                    </p>
                    <?php } ?>

                    <div class="text-center">
                      <a class="d-block small" href="<?php echo site_url('Home'); ?>">Back to Home page</a>

                    </div>

                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>