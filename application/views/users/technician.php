
          <div class="col-sm-3">
            <br>
            <div class="card" style="width: 18rem;">
              <img class="card-img-top img img-fluid" src="http://localhost/efix/assets/images/profilepic/<?php echo $post[0]['profilepic']; ?>" alt="Card image cap">
              <div class="card-body" align="center">
                <h5 class="card-title"><?php echo $post[0]['username']; ?></h5>
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
                    <label for="inputPassword4">Contact No</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="contact" value="0<?= $post[0]['contact'] ?>">
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
                    <input type="text" class="form-control" id="inputAge" value="<?= $post[0]['age'] ?>">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="dateOfBirth">Birth Date</label>
                    <input type="text" class="form-control" id="bday" value="<?= $post[0]['dob'] ?>">
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
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>

</html>
