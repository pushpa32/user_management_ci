Welcome to Dashboard

<?php
if ($this->session->userdata('userSession')) {
    $udata = $this->session->userdata('userSession');
    echo 'Welcome' . ' ' . $udata['username'];
} else {
    redirect(base_url('user/login'));
}

?>
<a href="<?= base_url('user/Login/logout') ?>">Logout</a>