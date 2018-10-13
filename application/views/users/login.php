<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/efix/assets/css/anim.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/efix/assets/css/anim.bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/efix/assets/css/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Atomic+Age|Audiowide" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- hide -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script  src="js/index.js"></script>

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
    <title>e-Fix</title>

    <style>
        .little{
            width: 160px;
            height: 180px;
        }

        .RobotoFont {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }

        .GugiFont {
            font-family: 'Gugi', cursive;
            font-weight: bold;
            font-size: 150%;
        }

        .MarkerFont {
            font-family: 'Permanent Marker', cursive;
            font-weight: bold;
        }

        h1 {
            font-size: 300%;
            /*font-family: 'Gugi', cursive;*/
            text-align: center;

        }
        h2 {
            font-size: 300%;
            /*font-family: 'Gugi', cursive;*/
            text-align: center;
            font-weight: bold;
        }


        h3{
            font-size: 150%;
            /*    font-family: 'Gugi', cursive;*/
            text-align: center;
            font-weight: bold;

        }

        h5 {
            font-size: 300%;
            /*    font-family: 'Gugi', cursive;*/
            text-align: center;
            /*text-decoration: underline;*/
        }

        h4 {
            font-size: 200%;
            /*    font-family: 'Gugi', cursive;*/
            font-weight: bold;
        }


        .img {
            padding: 0px;
            border: 0px solid #021a40;
            background-color: #ff0;
        }

        .navbar_border{
            border: 0px solid #00FFFF;
            background-color: #ff0;
        }

        .border-class {
            border: black solid;
            margin: 3px;
            padding: 10px;
            border-radius: 15px;
        }

        .hide{
            opacity: 0;
            position: relative;
        }

        .show{
            position: fixed;
            width: 100%;
            top: 0;
            opacity: 1;
        }

        #hid{
            height: 100px;

        }
        .extra{
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: .5rem 1rem;
        }

        body{
            background: #f1f1f1;
        }

    </style>

</head>

<body>

<!-- E-fix Animation Starts-->



<div class="animation">
    <div class="sky">


        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <div id="text" class="text"><p><a href="#slide">e-fix</a></p></div>
        <div id="board"><img src="http://localhost/efix/assets/images/animation/board.png" alt="ship" width="70" height="70"></div>
        <div id="drone"><img src="http://localhost/efix/assets/images/animation/drone.svg" alt="ship" width="120" height="50"></div>
        <div id="plane"><img src="http://localhost/efix/assets/images/animation/plane.svg" alt="ship" width="150" height="70"></div>
        <div id="cycle"><img src="http://localhost/efix/assets/images/animation/bicycle.svg" alt="ship" width="100" height="50"></div>
        <div id="car"><img src="http://localhost/efix/assets/images/animation/car1.svg" alt="ship" width="150" height="70"></div>
    </div>

    <div class="ground">
        <div id="ship"><img src="http://localhost/efix/assets/images/animation/ship.svg" alt="ship" width="150" height="70"></div>

    </div>
</div>

<!--  hide -->

<nav class="hide navbar navbar-expand-lg navbar-dark bg-dark sticky-top navbar_border" id="hid" style="max-height: 70px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand autowide" align="center" href="http://localhost/efix" style="font-family: neuropol; font-weight: bold; font-size: 2rem";>
        <img src="http://localhost/efix/assets/images/e-fix.svg" alt="Logo" width="70"   height="70"/>&nbsp;&nbsp;&nbsp;e-Fix</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav justify-content-center d-flex flex-fill">
            <li class="nav-item active">
                <a class="nav-link" href="#" style="font-weight: lighter; font-size: 1.3rem">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#MiddleGo" style="font-weight: lighter; font-size: 1.3rem">Log IN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Service-Providers" style="font-weight: lighter; font-size: 1.3rem">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#svc" style="font-weight: lighter; font-size: 1.3rem">Service-Providers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#AboutUs" style="font-weight: lighter; font-size: 1.3rem">About Us</a>
            </li>
        </ul>
    </div>

</nav>
<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("hid");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            header.classList.add("show");
        } else {
            header.classList.remove("show");
        }
    }
</script>


</div>


<!-- E-fix Animation Ends-->

<!-- <div class="container"> -->
<!-- Flash messages -->

<style>
    .danger {
        background-color: #f44336;
    }

    .success {
        background-color: #4CAF50;
    }

    .info {
        background-color: #2196F3;
    }


    .warning {
        background-color: #ffeb3b;
    }

    #alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
        opacity: 1;
        transition: opacity 0.6s;
        margin-bottom: 15px;
        font-size: 20px;
    }


    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }
</style>


<?php if ($this->session->flashdata('user_registered')): ?>
    <?php echo '<div class="success" id="alert"><span class="closebtn">&times;</span><strong>' . $this->session->flashdata('user_registered') . '</strong></div>'; ?>
<?php endif; ?>

<?php if ($this->session->flashdata('login_failed')): ?>
    <?php echo '<div class="warning" id="alert"><span class="closebtn">&times;</span><strong>' . $this->session->flashdata('login_failed') . '</strong></div>'; ?>
<?php endif; ?>

<?php if ($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<div class="info" id="alert"><span class="closebtn">&times;</span><strong' . $this->session->flashdata('user_loggedout') . '</strong></div>'; ?>
<?php endif; ?>

<?php if ($this->session->flashdata('registration_pending')): ?>
    <?php echo '<div class="info" id="alert"><span class="closebtn">&times;</span><strong>' . $this->session->flashdata('registration_pending') . '</strong></div>'; ?>
<?php endif; ?>
<?php if ($this->session->flashdata('registration_rejected')): ?>
    <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('registration_rejected') . '</p>'; ?>
<?php endif; ?>
<?php if ($this->session->flashdata('account_blocked')): ?>
    <?php echo '<div class="danger" id="alert"><span class="closebtn">&times;</span><strong>' . $this->session->flashdata('account_blocked') . '</strong></div>'; ?>
<?php endif; ?>
<?php if ($this->session->flashdata('proposal_accept')): ?>
    <?php echo '<div class="success" id="alert"><span class="closebtn">&times;</span><strong>' . $this->session->flashdata('proposal_accept') . '</strong></div>'; ?>
<?php endif; ?>

<!-- </div> -->
<br>
<h4 id="Service-Providers" style="font-weight: bold; text-align:center;">WE PROVIDE</h4>
<div style="margin:0px auto; text-align:center;">
    <img align="center" src="http://localhost/efix/assets/images/bar1.png"></div>

<div class="w3-row-padding w3-center w3-margin-top">
    <div class="w3-third">
        <div class="w3-card-2 w3-container" style="min-height:460px; background: #4285F4; color: white">
            <br><br>
            <h2>GADGETS</h2><br>
            <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
            <div style="font-size: 150%">
                <p>Mobile</p>
                <p>Desktop</p>
                <p>Laptop</p>
            </div>
        </div>
    </div>

    <div class="w3-third">
        <div class="w3-card-2 w3-container" style="min-height:460px; background: #34A853; color: white">
            <br><br>
            <h2>DELIVERY</h2><br>
            <i class="fa fa-bicycle w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
            <div style="font-size: 150%">
                <p>Fast</p>
                <p>Secure</p>
                <p>Home Delivery</p>
            </div>
        </div>
    </div>

    <div class="w3-third">
        <div class="w3-card-2 w3-container" style="min-height:460px; background: #EA4335; color: white">
            <br><br>
            <h2>FREE HELP</h2><br>
            <i class="fa fa-comments w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
            <div style="font-size: 150%">
                <p>Free Solution</p>
                <p>By Online Chat</p>
                <p>For Minor Gdaget Issue</p>
            </div>
        </div>
    </div>
</div>
<br><br><br>


<div class="w3-container w3-padding-32" id="MiddleGo" style="background: #343a40; color: white;">
    <div style="background: #343a40; color: white; width: 50%; margin: auto;">

        <?php echo form_open('users/login'); ?>
        <h4 id="Service-Providers" style="font-weight: bold; text-align:center;">LOG IN</h4>
        <p>Email Address</p>
        <p class="w3-center"><input class="w3-input w3-border" type="email" name="email" placeholder="Enter e-mail" style="width:100%"></p>
        <p>We'll never share your email with anyone else</p>
        <br>
        <p>Password</p>
        <p style="align:middle;"><input class="w3-input w3-border" type="password" name="password" placeholder="Enter password" style="width:100%"></p>

        <button type="submit" class="w3-button w3-red w3-margin-bottom">Log In</button>
        <?php echo form_close(); ?>
        <button type="submit" class="w3-button w3-red w3-margin-bottom" data-target="#SelectSignUp" data-toggle="modal">Don't Have an account? Sign up</button>
    </div>

</div>

<br><br><br><br><br><br><br><br>



<!-- METHODOLOGY -->
<style>
    .flex-container {
        width: 100%;
        display: flex;
        justify-content: center;
        background-color: inherit;
    }

    .flex-container > div {
        background-color: #f1f1f1;
        width: 25%;
        margin: 10px;
        text-align: center;
        line-height: 30px;
        font-size: 20px;
    }
</style>
<div style="width: 100%;">
    <div class="w3-center">
        <h4 id="Service-Providers" style="font-weight: bold; text-align:center; color:#059bdf">METHODOLOGY</h4>
        <div style="margin:0px auto; text-align:center;">
            <img align="center" src="http://localhost/efix/assets/images/bar1.png">
        </div>
    </div>
    <div class="flex-container">
        <div>

            <div style="height: 120px; width: 120px; border-radius: 60px; background-color: #b8e1f9; margin: auto;">
                <br>
                <i class="fa fa-edit" style="font-size:60px;color:#059bdf;"></i>
            </div>
            <p>Sign Up & post problem</p>
        </div>
        <div>
            <div style="height: 120px; width: 120px; border-radius: 60px; background-color: #b8e1f9; margin: auto;">
                <br>
                <i class="fa fa-location-arrow" style="font-size:60px;color:#059bdf"></i><br>
            </div>
            <p>Select proposal given by different Repairshop & Technichian</p>
        </div>
        <div>
            <div style="height: 120px; width: 120px; border-radius: 60px; background-color: #b8e1f9; margin: auto;">
                <br>
                <i class="fa fa-thumbs-o-up" style="font-size:60px;color:#059bdf"></i><br>
            </div>
            <p>Get problem fixed & give feedback</p>
        </div>
    </div>
</div>


<!-- SERVICE PROVIDERS -->

<div style="width: 100%;  margin-top: 115px;">
    <h4 id="svc" style="font-weight: bold; text-align:center;">SERVICE PROVIDERS</h4>
    <div style="margin:0px auto; text-align:center;">
        <img align="center" src="http://localhost/efix/assets/images/bar1.png"></div>
    <br>
    <div class="row">
        <div class="col-sm-2">
        </div>

        <div class="row" style="padding-bottom: 40px; padding-top: 40px;">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 col-xs-12 col-sm-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-4 col-xs-4 col-sm-4">
                                    <img class="d-block w-100" src="http://localhost/efix/assets/images/shop_logo/misc2.png"alt="First slide" >
                                </div>
                                <div class="col-lg-4 col-xs-4 col-sm-4">
                                    <img class="d-block w-100" src="http://localhost/efix/assets/images/shop_logo/misc4.png" alt="First slide">
                                </div>
                                <div class="col-lg-4 col-xs-4 col-sm-4">
                                    <img class="d-block w-100" src="http://localhost/efix/assets/images/shop_logo/dolphin.png" alt="First slide">
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 col-xs-4 col-sm-4">
                                    <img class="d-block w-100" src="http://localhost/efix/assets/images/shop_logo/misc1.png" alt="Two slide">
                                </div>
                                <div class="col-lg-4 col-xs-4 col-sm-4">
                                    <img class="d-block w-100" src="http://localhost/efix/assets/images/shop_logo/gadget.png" alt="Two slide">
                                </div>
                                <div class="col-lg-4 col-xs-4 col-sm-4">
                                    <img class="d-block w-100" src="http://localhost/efix/assets/images/shop_logo/misc3.png" alt="Two slide">
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 col-xs-4 col-sm-4">
                                    <img class="d-block w-100" src="http://localhost/efix/assets/images/shop_logo/lenovo.png" alt="Three slide">
                                </div>
                                <div class="col-lg-4 col-xs-4 col-sm-4">
                                    <img class="d-block w-100" src="http://localhost/efix/assets/images/shop_logo/hp.png" alt="Three slide">
                                </div>
                                <div class="col-lg-4 col-xs-4 col-sm-4">
                                    <img class="d-block w-100" src="http://localhost/efix/assets/images/shop_logo/asus.png" alt="Three slide">
                                </div>

                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- <div style="width: 100%;  margin: 65px;"></div> -->
    </div>
</div>
<!-- CUSTOMER SAYS -->
<style>
    .av-layout-grid-container {
        width: 100%;
        table-layout: fixed;
        display: table;
        border-top-stye: none;
        border-top-width: 0px;
    }
    .container_wrap {
        clear: both;
        position: relative;
        border-top-style: solid;
        /* border-top-width: 1px;*/
    }

</style>


<div id="av-layout-grid-3" class="av-layout-grid-container entry-content-wrapper main_color av-flex-cells    avia-builder-el-50  el_after_av_layout_row  el_before_av_partner  submenu-not-first container_wrap fullsize" style="margin: 65px;">
    <div class="flex_cell no_margin av_one_half  avia-builder-el-51  el_before_av_cell_one_half  avia-builder-el-first   avia-full-stretch av-zero-padding " style="height:500px; min-height:500px; width: 50%; background-image:url(http://www.vivacomsolutions.com/wp-content/uploads/2018/04/high-status-clients-fi-1-1500x875.jpg); background-position:center center; background-repeat:no-repeat; background-attachment:scroll; vertical-align:middle; padding:0px; background-color:#22689e; display: inline-block;">
        <div class="flex_cell_inner">
        </div>
    </div>

    <div class="flex_cell no_margin av_one_half  avia-builder-el-52  el_after_av_cell_one_half  avia-builder-el-last   " style="height:500px; min-height:500px; width: 50%;vertical-align:middle; padding:80px; background-color:#22689e; display: inline-block;">
        <div class="flex_cell_inner">
            <div style="padding-bottom:25px;color:#ffffff;font-size:34px;" class="av-special-heading av-special-heading-h3 custom-color-heading blockquote modern-quote  avia-builder-el-53  el_before_av_textblock  avia-builder-el-first   av-inherit-size ">
                <div class="av-subheading av-subheading_above av_custom_color " style="font-size:25px;">
                    <p>Let us talk about</p>
                </div>
                <h3 class="av-special-heading-tag " itemprop="headline" style="text-align: left;">OUR CLIENTS</h3>
                <div class="special-heading-border"><div class="special-heading-inner-border" style="border-color:#ffffff">
                    </div>
                </div>
            </div>

            <section class="av_textblock_section " itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                <div class="avia_textblock  av_inherit_color " style="color:#ffffff; font-size:20px;" itemprop="text">
                    <p>We provide repair services and solutions for clients across a range of industries, including technology, financial services, telecommunication services,school management and many more. .</p>
                </div>
            </section>
        </div>
    </div>
</div>


<br><br>

<!-- COOUNT BOARD -->

<style>
    .flex-container_b {
        width: 100%;
        display: flex;
        justify-content: center;
        background-color: inherit;
    }

    .flex-container_b > div {
        width: 25%;
        margin: 0px;
        text-align: center;
        line-height: 30px;
        font-size: 20px;
        color: white;
    }
</style>
<div style="width: 100%; margin-top: 55px; margin-bottom: 95px;">

    <div class="flex-container_b">
        <div style="background-color: #2388c2;">
            <br><br>
            <h1>30+</h1>
            <p>Task completed</p>
            <br><br><br>
        </div>
        <div style="background-color: #379cd6;">
            <br><br>
            <h1>15+</h1>
            <p>Task Running</p>
            <br><br><br>
        </div>
        <div style="background-color: #5fb4e4;">
            <br><br>
            <h1>10+</h1>
            <p>Task pending</p>
            <br><br><br>

        </div>
        <div  style="background-color: #80c7ef;">
            <br><br>
            <h1>20+</h1>
            <p>Shop request proessing</p>
            <br><br><br>
        </div>


    </div>
</div>
<!-- GET IN TOUCH -->

<style>
    .flex-container {
        width: 100%;
        display: flex;
        justify-content: center;
        background-color: inherit;
    }

    .flex-container > div {
        background-color: #f1f1f1;
        width: 25%;
        margin: 10px;
        text-align: center;
        line-height: 30px;
        font-size: 20px;
    }
</style>
<div style="width: 100%; margin-top: 55px; margin-bottom: 95px;">
    <div class="w3-center">
        <h4 id="Service-Providers" style="font-weight: bold; text-align:center; color:#059bdf">GET IN TOUCH</h4>
        <div style="margin:0px auto; text-align:center;">
            <img align="center" src="http://localhost/efix/assets/images/bar1.png">
        </div>
    </div>
    <div class="flex-container">
        <div>
            <br>
            <i class="fa fa-globe" style="font-size:60px;color:#059bdf"></i>
            <div style="margin:0px auto; text-align:center;">
                <img align="center" src="http://localhost/efix/assets/images/bar1.png">
                <p>info@efix.com</p>
            </div>
        </div>
        <div>
            <br>
            <i class="fa fa-map-marker" style="font-size:60px;color:#059bdf"></i>
            <div style="margin:0px auto; text-align:center;">
                <img align="center" src="http://localhost/efix/assets/images/bar1.png">
                <p>DevoTech Technology Park Level 1, House 11, Road 113/A Gulshan 2</p>
            </div>
        </div>
        <div>
            <br>
            <i class="fa fa-phone" style="font-size:60px;color:#059bdf"></i>
            <div style="margin:0px auto; text-align:center;">
                <img align="center" src="http://localhost/efix/assets/images/bar1.png">
                <p>Contact No: 8801686902380</p>
            </div>

        </div>
    </div>
</div>

<!-- Google Maps -->
<div id="googleMap" style="width:100%;">
    <img src="http://localhost/efix/assets/images/map.png" style="width:100%;">
</div>

<!-- FOOTER -->
<div class="footer" style="background: #343a40; color: white">
    <p style="display: inline-block;">Developed by &nbsp&nbsp</p>
    <div class="chip w3-center">
        <img src="http://localhost/efix/assets/images/dipto.jpg" alt="Person" width="96" height="96">
        Dipto
    </div>
    <div class="chip w3-center">
        <img src="http://localhost/efix/assets/images/user.jpg" alt="Person" width="96" height="96">
        Srk
    </div>

    <div class="chip w3-center">
        <img src="http://localhost/efix/assets/images/rbt2.jpg" alt="Person" width="96" height="96">
        Rizvi
    </div>
</div>


<!-- Select User Type Modal -->
<div class="modal" tabindex="-1" id="SelectSignUp" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select Sign-Up Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <a   class="btn btn-success" href="<?php echo base_url(); ?>users/register/1">Customer&nbsp;</a>
                    </div>
                    <div class="col-sm-4">
                        <a  class="btn btn-danger" href="<?php echo base_url(); ?>users/register/2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                    </div>
                    <div class="col-sm-4">

                        <a  class="btn btn-warning" href="<?php echo base_url(); ?>users/register/3">Technician</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>
