<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php echo link_tag('assests/css/sb-admin.css'); ?>
    <?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
    <?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>

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
                        Users Details
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <?php if ($this->session->flashdata('success')) { ?>
                        <p style="color:green; font-size:18px;">
                            <?php echo $this->session->flashdata('success'); ?>
                        </p>
                    </div>
                </div>
                <?php } ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>status</th>
                            <th>Approval</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        if (count($userdetails)):
                            $cnt = 1;
                            foreach ($userdetails as $row):
                        ?>
                        <tr>
                            <td>
                                <?php echo htmlentities($cnt); ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row->username) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row->email) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row->status) ?>
                            </td>
                            <td>

                                <?php if ($row->status === '0'): ?>
                                <?php echo anchor("admin/Manage_Users/giveapproval/{$row->id}", ' <p>Approve</p>') ?>
                                <?php else: ?>
                                <?php echo ' <p>Approved</p>' ?>
                                <?php endif; ?>

                            </td>
                            <td>
                                <?php echo anchor("admin/Manage_Users/getuserdetail/{$row->id}", ' ', 'class="fa fa-edit"') ?>
                                <?php echo anchor("admin/Manage_Users/deleteuser/{$row->id}", ' ', 'class="fa fa-trash"') ?>
                            </td>
                        </tr>
                        <?php
                                $cnt++;
                            endforeach;
                        else: ?>
                        <tr>
                            <td colspan="6">No Record found</td>
                        </tr>
                        <?php
                        endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include APPPATH . 'views/admin/includes/footer.php'; ?>
    </div>

    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>
</body>

</html>