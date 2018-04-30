<!-- Data from  posts controller view method-->
<div class="col-sm-10">
<div class="row">
	<div class="col-sm-1">

	</div>
	<div class="col-sm-10">
		<br>
		<p class="post-date">Posted on: <?php echo $post['created_at']; ?></p>
<h3 class="GugiFont"><?php echo $post['title']; ?></h3>

<div class="post-body">
	<?php echo $post['body']; ?>
</div>


<!--  Show Image1 -->
<div class="card" style="width: 18rem;">
	<img class="card-img-top img img-fluid" src="http://localhost/efix/assets/images/profilepic/<?php echo $post['img1']; ?>" alt="Card image cap">
</div>

<!--  Show Image2 -->
<div class="card" style="width: 18rem;">
	<img class="card-img-top img img-fluid" src="http://localhost/efix/assets/images/profilepic/<?php echo $post['img2']; ?>" alt="Card image cap">
</div>

<!--  Show Image3 -->
<div class="card" style="width: 18rem;">
	<img class="card-img-top img img-fluid" src="http://localhost/efix/assets/images/profilepic/<?php echo $post['img3']; ?>" alt="Card image cap">
</div>


<hr>

<?php if($this->session->userdata('user_id')==$post['cust_id']): ?>
	<div class="row">
		<div class="btn-group">
			<button type="button" class="btn btn-sm centered-text GugiFont" style="width:170px;">Proposals</button>
			<button type="button" class="btn  btn-sm dropdown-toggle dropdown-toggle-split GugiFont"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="sr-only">Toggle Dropdown</span>
			</button>

			<div class="dropdown-menu">
				<a class="dropdown-item GugiFont" href="<?php echo base_url(); ?>users/view_proposal/3/<?php echo $post['id']?>">Technician</a>
				<a class="dropdown-item GugiFont" href="<?php echo base_url(); ?>users/view_proposal/2/<?php echo $post['id']?>">Repair Shop</a>
			</div>

		</div>

	</div>



<!-- will go to posts controller edit method-->
<!--
<a class="btn btn-dark" href="<?php echo base_url(); ?>users/view_proposal/2/<?php echo $post['id']?>">View Proposal(Repair shop)</a>
<a class="btn btn-dark" href="<?php echo base_url(); ?>users/view_proposal/3/<?php echo $post['id']?>">View Proposal(Technician)</a>
-->
</script>
<br>
<div class="row">

	<div class="col-sm-1">
		<a class="btn btn-warning" href="edit/<?php echo $post['slug'];?>">Edit</a>
		<?php endif; ?>
		<?php if($this->session->userdata('type_id')==2 || $this->session->userdata('type_id')==3):?>
				<a class="btn btn-dark" href="proposal/<?php echo $post['slug'];?>">Give proposal</a>
		<?php endif;?>
	</div>

	<div class="col-sm-1">
		<?php if($this->session->userdata('email')=="dipto_admin@gmail.com" || $this->session->userdata('user_id')==$post['cust_id']):?>
		<?php
		//post controller delete method //post method
		echo form_open('/posts/delete/'.$post['id']);
		?>
		<input type="submit" value="Delete" class="btn btn-danger">
		</form>
		<?php endif; ?>

	</div>
    </div>




</div>
<div class="col-sm-1">

</div>

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
