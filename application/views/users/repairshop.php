

          <div class="col-sm-3">
            <br>
            <div class="card" style="width: 18rem;">
              <img class="card-img-top img img-fluid" src="http://localhost/efix/assets/images/profilepic/<?php echo $post[0]['profilepic']; ?>" alt="Card image cap">
              <div class="card-body" align="center">
                <h5 class="card-title"><?= $post[0]['shop_name'] ?></h5>
                <h2 class="card-title" style="color:red" >Rating:</h2>
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
                  <label for="inputShopname">Shop Name</label>
                  <input type="text" class="form-control" id="inputShop" placeholder="Ryans" value="<?= $post[0]['shop_name'] ?>">
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?= $post[0]['address'] ?>">
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="floor">Floor</label>
                    <input type="number" class="form-control" id="floor" value="<?= $post[0]['floor'] ?>">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" value="<?= $post[0]['category'] ?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">ZipCode</label>
                    <input type="text" class="form-control" id="inputZip" value="<?= $post[0]['zipcode'] ?>">
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
