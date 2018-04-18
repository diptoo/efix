<html>
<head>
    <title>eFix</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/efix/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(function() {
  $( "#datepicker" ).datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: 'yy-mm-dd',
   yearRange: '1990:2018'

  });
} );
</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
            </li>
        </ul>
        <?php if (!$this->session->userdata('logged_in')): ?>
            <ul class="nav navbar-nav navbar-right">
                <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a class="nav-link" href="<?php echo base_url(); ?>users/register/1">Register Customer</a>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a class="nav-link" href="<?php echo base_url(); ?>users/register/2">Register Shop</a>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a class="nav-link" href="<?php echo base_url(); ?>users/register/3">Register Technician</a>
            </ul>
        <?php endif; ?>

        <?php if ($this->session->userdata('logged_in')): ?>
            <ul class="nav navbar-nav navbar-right">
                <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
            </ul>

        <?php endif; ?>

        <!--
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" placeholder="Search" type="text">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
        -->
    </div>
</nav>
<div class="container">
    <!-- Flash messages -->
    <?php if ($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-info">' . $this->session->flashdata('user_registered') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('user_loggedout') . '</p>'; ?>
<?php endif; ?>

<?php if ($this->session->flashdata('registration_pending')): ?>
<?php echo '<p class="alert alert-danger">' . $this->session->flashdata('registration_pending') . '</p>'; ?>
<?php endif; ?>
<?php if ($this->session->flashdata('registration_rejected')): ?>
<?php echo '<p class="alert alert-danger">' . $this->session->flashdata('registration_rejected') . '</p>'; ?>
<?php endif; ?>
<?php if ($this->session->flashdata('account_blocked')): ?>
<?php echo '<p class="alert alert-danger">' . $this->session->flashdata('account_blocked') . '</p>'; ?>
<?php endif; ?>
<?php if ($this->session->flashdata('proposal_accept')): ?>
<?php echo '<p class="alert alert-success">' . $this->session->flashdata('proposal_accept') . '</p>'; ?>
<?php endif; ?>
