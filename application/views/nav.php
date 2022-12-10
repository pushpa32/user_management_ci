<style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #04AA6D;
        color: white;
    }

    .topnav .icon {
        display: none;
    }

    @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {
            display: none;
        }

        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    @media screen and (max-width: 600px) {
        .topnav.responsive {
            position: relative;
        }

        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }

        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
    }
</style>
<?php echo link_tag('assests/css/sb-admin.css'); ?>
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>

<div class="topnav" id="myTopnav">
    <a href="<?php echo site_url('Home'); ?>" class="active nav-link">Home</a>
    <a href="<?php echo site_url('/user/signup'); ?>" class="nav-link">Register</a>
    <a href="<?php echo site_url('/user/login'); ?>" class="nav-link">Login</a>
    <a href="<?php echo site_url('/admin/login'); ?>" class="nav-link">Admin</a>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<script>

    var change = function () {
        var url = window.location.pathname;
        $('topnav a[href="' + url + '"]').parent().addClass('active');
    };
    change();

    $(document).ready(function () {
        $(".topnav .nav-link").click(function (e) {
            e.preventDefault();
            $('.nav-link').removeClass('active');
            $(this).closest('.nav-link').addClass('active');
        });
    });


    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>