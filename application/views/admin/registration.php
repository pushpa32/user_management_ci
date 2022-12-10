<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Manage Users</title>

    <!-- Bootstrap core CSS-->
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

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Register New User
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="card" style="margin-top: 30px">
                                    <div class="card-header text-center">
                                        Register
                                    </div>
                                    <div class="card-body">
                                        <form method="post" autocomplete="off"
                                            action="<?= base_url('admin/Manage_Users/registeruser') ?>">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                                <input type="text" placeholder="User Name" name="username"
                                                    class="form-control" id="name" aria-describedby="name">

                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" placeholder="Email Address" name="email"
                                                    class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" name="password" placeholder="User Password"
                                                    class="form-control" id="exampleInputPassword1">
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Register</button>
                                            </div>

                                            <?php
                                            if ($this->session->flashdata('success')) { ?>
                                            <p class="text-success text-center" style="margin-top: 10px;">
                                                <?= $this->session->flashdata('success') ?>
                                            </p>
                                            <?php } ?>

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
        <?php include APPPATH . 'views/admin/includes/footer.php'; ?>

    </div>
    </div>
    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>

</body>

</html>