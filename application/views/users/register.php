<!-- called from users controller register method -->
<?php //echo validation_errors(); ?>


<?php echo form_open_multipart('users/register/' . $iid); ?> <!--will go to users controller , register method -->

<h1 class="text-center"><?= $iid; ?></h1>
<div class="form-group">
    <label>Email</label>
<!--
    <input type="email" class="form-control" name="email" placeholder="Email" value="set_value('email')">
-->
    <?php echo form_input(['name'=>'email','placeholder'=>'Enter Email','class'=>'form-control','value'=>set_value('email')]); ?>

    <div class="col-md-5">
          <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
    </div>
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
    <div class="col-md-5">
          <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
    </div>
</div>
<div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="confirm_pass" placeholder="Confirm Password">

    <div class="col-md-5">
          <?php echo form_error('confirm_pass', '<div class="text-danger">', '</div>'); ?>
    </div>
</div>

<div class="form-group">
    <label>Zipcode</label>
    <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
</div>
<div class="form-group">
    <label>Contact No</label>
    <input type="text" class="form-control" name="contact" placeholder="Contact">
</div>
<div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder="Address">
</div>

<?php if ($iid == 1 || $iid == 3): ?>

    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label>Nationality</label>
        <input type="text" class="form-control" name="nationality" placeholder="Nationality">
    </div>
    <div class="form-group">
        <label>Gender:</label>
     <!--
        <input type="text" class="form-control" name="gender" placeholder="Gender">
      -->
      <input type="radio" name="gender" value="Male" <?php echo  set_radio('gender', 'Male'); ?> />
      <label>Male</label>
      <input type="radio" name="gender" value="Female" <?php echo  set_radio('gender', 'Female'); ?> />
      <label>Female</label>
      </div>

<?php endif; ?>
<?php if ($iid == 1 || $iid == 3): ?>

    <div class="form-group">
        <label>Date Of Birth</label>
        <input type="text" class="form-control" id="datepicker" name="dob" placeholder="Date Of Birth">
    </div>
<?php endif; ?>
<!--Shop related data -->
<?php if ($iid == 2): ?>
    <div class="form-group">
        <label>Shop name</label>
        <input type="text" class="form-control" name="shop_name" placeholder="Shopname">
    </div>
    <div class="form-group">
        <label>Floor</label>
        <input type="text" class="form-control" name="floor" placeholder="Floor">
    </div>
    <div class="form-group">
        <label>Category</label>
        <input type="text" class="form-control" name="category" placeholder="Category">
    </div>
<?php endif; ?>

<?php if ($iid == 3): ?>
    <div class="form-group">
        <label for="expert_at">Expert at</label>
<!--
        <input type="text" class="form-control" name="expert_at" placeholder="Expert at">
      -->
        <div class="col-md-5">
                <select name="expert_at">
                    <option value="Mobile" <?php echo set_select('expert_at', 'Mobile'); ?> >Mobile</option>
                    <option value="Laptop" <?php echo set_select('expert_at', 'Laptop'); ?> >Laptop</option>
                    <option value="three" <?php echo set_select('expert_at', 'three'); ?> >Desktop</option>
                </select>

            </div>
    </div>
<?php endif; ?>
<div class="form-group">
	  <label>Upload Image</label>
	  <input type="file" name="userfile" size="20">
</div>

<button type="submit" class="btn btn-primary btn-block">Submit</button>
<?php echo form_close(); ?>
<script type="text/javascript">
    $(".dob").datetimepicker({
        format: "dd MM yyyy - hh:ii"
    });
</script>
