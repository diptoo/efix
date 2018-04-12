<!-- called from users controller register method -->
<?php echo validation_errors(); ?>

<?php echo form_open('users/register/' . $iid); ?> <!--will go to users controller , register method -->

<h1 class="text-center"><?= $iid; ?></h1>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
</div>
<div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
</div>

<div class="form-group">
    <label>Zipcode</label>
    <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
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
        <label>Age</label>
        <input type="text" class="form-control" name="age" placeholder="Age">
    </div>

    <div class="form-group">
        <label>Gender</label>
        <input type="text" class="form-control" name="gender" placeholder="Gender">
    </div>

<?php endif; ?>
<?php if ($iid == 1): ?>
    <div class="form-group">
        <label>Date Of Birth</label>
        <input type="text" class="form-control" name="dob" placeholder="Date Of Birth">
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
        <label>Expert at</label>
        <input type="text" class="form-control" name="expert_at" placeholder="Expert at">
    </div>
<?php endif; ?>


<button type="submit" class="btn btn-primary btn-block">Submit</button>
<?php echo form_close(); ?>
