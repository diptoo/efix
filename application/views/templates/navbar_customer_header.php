

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

  <title>User Account Page</title>

  <style>
  .GugiFont {
    font-family: 'Gugi', cursive;
    font-weight: bold;
  }

  .navbar_border {
    border: 2px solid #00FFFF;
    background-color: #fff;
  }

  .img {
    border-radius: 50%;
  }

  .border-class {
    border: 2px solid #47494c;
    margin: 3px;
    padding: 10px;
    border-radius: 25px;
  }

  h2 {
    font-size: 200%;
    font-family: 'Gugi', cursive;
    text-align: center;

  }
  h6{
    font-family: 'Gugi', cursive;
  }

  body html{
    margin: 0;
    padding: 0;
  }
  p{
    font-size: 100%;
    font-family: 'Gugi', cursive;


    margin: 3px;


  }

    .GugiFont {
      font-family: 'Gugi', cursive;
      font-weight: bold;
    }

    .navbar_border {
      border: 2px solid #00FFFF;
      background-color: #fff;
    }

    .img {
      border-radius: 50%;
    }

    .border-class {
      border: black thin solid;
      margin: 3px;
      padding: 10px;
    }

  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top navbar_border">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand GugiFont" align="center" href="<?php echo base_url();?>users/myprofile">&nbsp;&nbsp;&nbsp;E-fix</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav justify-content-end d-flex flex-fill">

        <li class="nav-item active">
          <a class="nav-link GugiFont" href="<?php echo base_url();?>users/myprofile"><?php echo $this->session->userdata('email') ?>&nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand GugiFont" href="#">0<img src="http://localhost/efix/assets/images/noti3.png" width="30" height="30" alt=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link GugiFont" href="<?php echo base_url(); ?>users/logout">Sign Out</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="row">
      <nav class="col-sm-2 navbar-expand-lg d-none d-md-block sidebar-sticky bg-light sidebar navbar_border">
        <div class="navbar-collapse sidebar-sticky">
          <ul class="nav navbar-collapse flex-column">
            <li class="nav-item active">
              <a class="nav-link GugiFont" href="<?php echo base_url();?>users/myprofile"><i class="fa fa-user"></i>My Account<span class="sr-only">(current)</span></a>

            </li>
            <li class="nav-item">
              <div class="btn-group">
                <button type="button" class="btn btn-sm centered-text GugiFont" style="width:170px;">&nbsp;&nbsp;&nbsp;Post</button>
                <button type="button" class="btn  btn-sm dropdown-toggle dropdown-toggle-split GugiFont"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item GugiFont" href="<?php echo base_url();?>posts/create">Create Post</a>
                  <a class="dropdown-item GugiFont" href="<?php echo base_url(); ?>posts/index/1">See All Posts</a>
                  <a class="dropdown-item GugiFont" href="<?php echo base_url(); ?>users/mypost">My Posts</a>
                </div>
              </div>
                <br> <br>
            </li>

            <li class="nav-item">
              <div class="btn-group">
                <button type="button" class="btn btn-dark btn-sm GugiFont" style="width:170px;">Accepted Proposal</button>
                <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split primary GugiFont" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item GugiFont align" href="<?php echo base_url(); ?>users/accepted_proposal_repairshop">Repair shop</a>
                  <a class="dropdown-item GugiFont align" href="<?php echo base_url(); ?>users/accepted_proposal_technician">Technician</a>
                </div>
              </div>
            </li>


          </ul>


        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </nav>
