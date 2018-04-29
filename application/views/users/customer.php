




        <div class="col-sm-3">
          <br>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top img img-fluid" src="http://localhost/efix/assets/images/profilepic/<?php echo $post[0]['profilepic']; ?>" alt="Card image cap">
<!--
            <img class="post-thumb" src="http://localhost/efix/assets/images/profilepic/<?php //echo $post[0]['profilepic']; ?>">
-->
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
