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
  <title>Start Page</title>

  <style>
    .RobotoFont {
      font-family: 'Roboto', sans-serif;
      font-weight: 400;
    }

    .GugiFont {
      font-family: 'Gugi', cursive;
      font-weight: bold;
    }

    .MarkerFont {
      font-family: 'Permanent Marker', cursive;
      font-weight: bold;
    }

    h1 {
      font-size: 300%;
      font-family: 'Gugi', cursive;
      text-align: center;

    }

    h5 {
      font-size: 300%;
      font-family: 'Gugi', cursive;
      text-align: center;
      text-decoration: underline;
    }

    h4 {
      font-size: 200%;
      font-family: 'Gugi', cursive;
      font-weight: bold;
    }


    .img {
      padding: 1px;
      border: 1px solid #021a40;
      background-color: #ff0;
    }

    .navbar_border{
      border: 1px solid #00FFFF;
      background-color: #ff0;
    }

    .border-class {
      border: black solid;
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
      <ul class="navbar-nav justify-content-center d-flex flex-fill">
        <li class="nav-item active">
          <a class="nav-link GugiFont" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link GugiFont" href="#">Sign-In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link GugiFont" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link GugiFont" href="#">Service-Providers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link GugiFont" href="#">About Us</a>
        </li>
      </ul>
    </div>

  </nav>

  <div class="row">
    <div class="col-sm-1">

    </div>
    <div class="col-sm-4">
      <img src="http://localhost/efix/assets/images/logo.png" style="max-width: 80%" alt="Responsive image">
    </div>
<!--  -->
    <div class="col-sm-6">
      <br><br><br><br><br>
      <h1>Your Gadget Problems,<br>Our Solution</h1>
    </div>
  </div>
  <br>
  <br>

  <div class="row">
    <div class="col-sm-1">

    </div>
    <div class="col-sm-7">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid img" src="http://localhost/efix/assets/images/ideal.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid img" src="http://localhost/efix/assets/images/laptop.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid img" src="http://localhost/efix/assets/images/repair.jpg" alt="Third slide">
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-3">

      <?php echo form_open('users/login'); ?>
        <h1 class="GugiFont">Sign in</h1>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>


        <button type="submit" class="btn btn-primary">Log In</button>
        <?php echo form_close(); ?>

        <br><br>
        <button type="submit" class="btn btn-primary" data-target="#SelectSignUp" data-toggle="modal">Don't Have an account? Sign up</button>

    </div>
  </div>

  <br>
  <br>

  <h5>Our Services</h5>
  <br>

  <div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-2">
      <h4>1.Mobile/<br>Laptop/<br>Desktop/Other<br> Gadgets Repair<br></h4>
    </div>
    <div class="col-sm-1">

    </div>

    <div class="col-sm-2">
      <h4>2.Home Delivery Service<br></h4>
    </div>
    <div class="col-sm-1">

    </div>

    <div class="col-sm-2">
      <h4>3.Online chatting help for small gadget issues<br></h4>
    </div>
    <div class="col-sm-2">

    </div>
  </div>

  <br>
  <br>
  <h5>Service Providers</h5>
  <br>
  <div class="row">
    <div class="col-sm-2">

    </div>

    <div class="col-sm-2">
      <div id="carouselExampleSlides1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img" src="http://localhost/efix/assets/images//shop_logo/technoplanet.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img" src="http://localhost/efix/assets/images//shop_logo/rishit.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img" src="http://localhost/efix/assets/images//shop_logo/gadetgang.jpg" alt="Third slide">
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-2">
      <div id="carouselExampleSlides2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img" src="http://localhost/efix/assets/images//shop_logo/dolphin.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img" src="http://localhost/efix/assets/images//shop_logo/acer.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img" src="http://localhost/efix/assets/images//shop_logo/technoplanet.jpg" alt="Third slide">
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-2">
      <div id="carouselExampleSlides3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img" src="http://localhost/efix/assets/images//shop_logo/ryans.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img" src="http://localhost/efix/assets/images//shop_logo/rishit.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img" src="http://localhost/efix/assets/images//shop_logo/idel.jpg" alt="Third slide">
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-2">
      <div id="carouselExampleSlides3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 img" src="http://localhost/efix/assets/images//shop_logo/acer.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img" src="http://localhost/efix/assets/images//shop_logo/dolphin.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img" src="http://localhost/efix/assets/images//shop_logo/gadetgang.jpg" alt="Third slide">
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-2">

    </div>
  </div>
  <br><br>

  <div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-4">
      <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">

        <div class="card-body">
          <h5 class="card-title">Contact Us</h5>
          <p class="card-text">info@efix.com<br>DevoTech Technology Park Level 1, House 11, Road 113/A Gulshan 2<br>Contact No: 8801686902380</p>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
        <div class="card-body">
          <h5 class="card-title">Popular Services</h5>
          <p class="card-text" align="center">Desktop Repair<br>Laptop Repair<br>Mobile Repair</p>
        </div>
      </div>
    </div>
    <div class="col-sm-2">

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
<!--
            <button type="button" data-target="#SignUpModal1" class="btn btn-success" data-toggle="modal">User&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
-->
            <a  data-target="#SignUpModal1" data-toggle="modal" class="btn btn-success" href="<?php echo base_url(); ?>users/register/1">Customer&nbsp</a>

          </div>
          <div class="col-sm-4">
<!--
            <button type="button" data-target="#SignUpModal2" class="btn btn-danger" data-toggle="modal">Shop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
          -->
            <a  data-target="#SignUpModal2" data-toggle="modal" class="btn btn-danger" href="<?php echo base_url(); ?>users/register/2">Shop&nbsp</a>

          </div>
          <div class="col-sm-4">
            <!--
            <button type="button" href="<?php echo base_url(); ?>users/register/3"  data-target="#SignUpModal3" class="btn btn-warning" data-toggle="modal">Technician</button>
-->
            <a  data-target="#SignUpModal3" data-toggle="modal" class="btn btn-warning" href="<?php echo base_url(); ?>users/register/3">Technician</a>
          </div>
        </div>
      </div>lo
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <!-- User Sign-Up Modal -->

  <div class="container">
    <div class="row">

      <div class="modal" tabindex="-1" id="SignUpModal1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">User Sign-Up</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
              <form class="border-class">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputUsername">Username</label>
                  <input type="text" class="form-control" id="inputUsername1" placeholder="qshahrukh41">
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress1" placeholder="1234 Main St">
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="nationality">Nationality</label>
                    <select id="inputNationality1" class="form-control">
                    <option selected>Bangladeshi</option>
                    <option>Other</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="gender">Gender</label>
                    <select id="inputGender1" class="form-control">
        <option selected>Male</option>
        <option>Female</option>
      </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">ZipCode</label>
                    <input type="text" class="form-control" id="inputZip1">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="inputAge1">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="dateOfBirth">BirthDate</label>
                    <input type="date" class="form-control" id="bday1">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I accept the terms and conditions of the website</label>
              </div>
              <button type="button" class="btn btn-primary">Confirm</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Shop Sign-Up Modal -->

  <div class="container">
    <div class="row">

      <div class="modal" tabindex="-1" id="SignUpModal2" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Repair Shop Sign-Up</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
              <form class="border-class">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail2" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control" id="inputPassword2" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputShopname">Shop Name</label>
                    <input type="text" class="form-control" id="inputShop" name="shop_name" placeholder="Ryans">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress2" name="address" placeholder="1234 Main St">
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="floor">Floor</label>
                      <input type="number" class="form-control" name="floor" id="floor">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="category">Category</label>
                      <select id="inputCategory" class="form-control">
          <option selected>Laptop/Desktops</option>
          <option>Mobile</option>
          <option>Others</option>
        </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">ZipCode</label>
                      <input type="text" class="form-control" name="zipcodelo" id="inputZip2">
                    </div>
                  </div>
              </form>
            </div>
            <div class="modal-footer">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                <label class="form-check-label" for="exampleCheck1">I accept the terms and conditions of the website</label>
              </div>
              <button type="button" class="btn btn-primary">Confirm</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Technician Sign-Up Modal -->

  <div class="container">
    <div class="row">

      <div class="modal" tabindex="-1" id="SignUpModal3" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Technician Sign-Up</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
              <form class="border-class">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail3">Email</label>
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword3">Password</label>
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputUsername3">Username</label>
                    <input type="text" class="form-control" id="inputAddress3" placeholder="qshahrukh41">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress3">Address</label>
                    <input type="text" class="form-control" id="inputAddress3" placeholder="1234 Main St">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="nationality3">Nationality</label>
                      <select id="inputNationality3" class="form-control">
                      <option selected>Bangladeshi</option>
                      <option>Other</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="gender3">Gender</label>
                      <select id="inputGender3" class="form-control">
          <option selected>Male</option>
          <option>Female</option>
        </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip3">Zip</label>
                      <input type="text" class="form-control" id="inputZip3">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputExpertAt">Expert At</label>
                      <select id="ExpertAt3" class="form-control">
          <option selected>Laptop/Desktop</option>
          <option>Mobile</option>
          <option>Others</option>
        </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputAge3">Age</label>
                      <input type="number" class="form-control" id="Age3">
                    </div>
                  </div>
              </form>
            </div>
            <div class="modal-footer">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck3">
                <label class="form-check-label" for="exampleCheck1">I accept the terms and conditions of the website</label>
              </div>
              <button type="button" class="btn btn-primary">Confirm</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
