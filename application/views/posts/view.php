<!-- Data from  posts controller view method-->
<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<hr>

<?php if($this->session->userdata('user_id')==$post['cust_id']): ?>
<!-- will go to posts controller edit method-->
<a class="btn btn-primary" href="<?php echo base_url(); ?>users/view_proposal/2/<?php echo $post['id']?>">View Proposal(Repair shop)</a>
<a class="btn btn-primary" href="<?php echo base_url(); ?>users/view_proposal/3/<?php echo $post['id']?>">View Proposal(Technician)</a>

<a class="btn btn-warning pull-left" href="edit/<?php echo $post['slug'];?>">Edit</a>
<?php endif; ?>

<?php if($this->session->userdata('email')=="dipto_admin@gmail.com" || $this->session->userdata('user_id')==$post['cust_id']):?>
<?php
//post controller delete method //post method
echo form_open('/posts/delete/'.$post['id']);
?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>
<?php endif; ?>
<?php if($this->session->userdata('type_id')==2 || $this->session->userdata('type_id')==3):?>
    <a class="btn btn-primary" href="proposal/<?php echo $post['slug'];?>">Give proposal</a>
<?php endif;?>
