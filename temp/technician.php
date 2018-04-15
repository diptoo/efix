<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title> Tecnician Account Page</title>

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
      <a class="navbar-brand GugiFont" align="center" href="#">&nbsp;&nbsp;&nbsp;E-fix</a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav justify-content-end d-flex flex-fill">
          <li class="nav-item active">
            <a class="nav-link GugiFont" href="#">Sabbir-Ul-Alam&nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand GugiFont" href="#">5<img src="noti1.png" width="30" height="30" alt=""></a>
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
                <a class="nav-link GugiFont" href="#">My Account<span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link GugiFont" href="#">See All Posts</a>
              </li>

            </ul>


          </div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </nav>



          <div class="col-sm-3">
            <br>
            <div class="card" style="width: 18rem;">
              <img class="card-img-top img img-fluid" src="technician.jpg" alt="Card image cap">
              <div class="card-body" align="center">
                <h5 class="card-title">Sabbir-Ul-Alam</h5>
                <a href="#" class="btn btn-primary">Edit Profile</a>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <br>
            <form class="border-class">
              <fieldset disabled>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="<?= $post[0]['email'] ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputUsername">Username</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="qshahrukh41" value="<?= $post[0]['username'] ?>">
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?= $post[0]['address'] ?>">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="nationality">Nationality</label>
                    <input type="text" class="form-control" id="Nationality" value="<?= $post[0]['nationality'] ?>">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control" id="Gender" value="<?= $post[0]['gender'] ?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">ZipCode</label>
                    <input type="text" class="form-control" id="inputZip" value="<?= $post[0]['zipcode'] ?>">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="category">Expert at</label>
                    <input type="text" class="form-control" id="ExpertAt" value="<?= $post[0]['expert_at'] ?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="inputAge" value="<?= $post[0]['age'] ?>">
                  </div>

                </div>
              </fieldset>
            </form>
          </div>



      </div>
    </div>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>

</html>


<h2>Technician</h2>
<h2><?= $post[0]['id'] ?></h2>
<h2><?= $post[0]['email'] ?></h2>
<h2><?= $post[0]['expert_at'] ?></h2>
<h2><?= $post[0]['nationality'] ?></h2>
<h2><?= $post[0]['age'] ?></h2>
<h2><?= $post[0]['gender'] ?></h2>
<h2><?= $post[0]['type_id'] ?></h2>
<h2><?= $post[0]['technician_id'] ?></h2>

<a class="btn btn-primary" href="<?php echo base_url(); ?>posts">See All Post</a>
<a class="btn btn-primary" href="<?php echo base_url(); ?>users/proposal_status">Proposal Status</a>
<a class="btn btn-primary" href="<?php echo base_url(); ?>users/logout">Logout</a>
