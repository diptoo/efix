


<div class="col-sm-10">
        <div class="row">
          <?php foreach($posts as $post) : ?>
            <?php if($this->session->userdata('user_id')==$post['cust_id']): ?>

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

                <h6>Posted By: <?php echo $post['username'];?></h6>
                <h6>Title: <?php echo $post['title']; ?></h6>
                <p><?php echo $post['body'];?></p>



              </fieldset>
              <a class="btn btn-dark" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a>

            </form>
          </div>
          <div class="col-sm-1">

          </div>
        <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
