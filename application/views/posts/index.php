
      <div class="col-sm-10">
              <div class="row">
                <?php foreach($posts as $post) : ?>

                <div class="col-sm-1">

                </div>
                <div class="col-sm-10">
                  <form class="border-class">
                    <fieldset disabled>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputdatetime"></label>
                          <input type="text" class="form-control" id="date1" placeholder="" value="<?php echo $post['created_at']; ?>">
                        </div>

                      </div>

                      <h6>Posted By: <?php echo $post['username'] ?></h6>
                      <h6>Title: <?php echo $post['title']; ?></h6>
                      <p><?php echo $post['body'];?></p>



                    </fieldset>
                    <a class="btn btn-dark" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a>

                  </form>
                </div>
                <div class="col-sm-1">

                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
            <script>
            $(document).ready(function () {
                $('.dropdown-toggle').dropdown();
            });
            </script>
