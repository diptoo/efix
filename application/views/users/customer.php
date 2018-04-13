<?php if ($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '</p>'; ?>
<?php endif; ?>

<h2>Customer</h2>
<h2><?= $post[0]['id'] ?></h2>
<h2><?= $post[0]['email'] ?></h2>
<h2><?= $post[0]['nationality'] ?></h2>
<h2><?= $post[0]['age'] ?></h2>
<h2><?= $post[0]['gender'] ?></h2>
<h2><?= $post[0]['type_id'] ?></h2>
<h2><?= $post[0]['cust_id'] ?></h2>

<a class="btn btn-primary" href="<?php echo base_url(); ?>posts/create">Create Post</a>
<a class="btn btn-primary" href="<?php echo base_url(); ?>posts">See All Post</a>
<a class="btn btn-primary" href="<?php echo base_url(); ?>users/mypost">My Post</a>
<a class="btn btn-primary" href="<?php echo base_url(); ?>users/accepted_proposal_technician">Accepted Proposal(Technician)</a>
<a class="btn btn-primary" href="<?php echo base_url(); ?>users/accepted_proposal_repairshop">Accepted Proposal(Repairshop)</a>
