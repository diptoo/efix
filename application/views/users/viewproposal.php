</<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>View proposal</h1>

</head>

<!-- retrieve data sent from posts class index method -->
<body>
 <?php foreach($posts as $post) : ?>
 	<h2>Title:<?php echo $post['title']; ?></h2>
    <h2>Cost: <?php echo $post['cost']; ?></h2>
    <h2>Days: <?php echo $post['days']; ?></h2>
    <?php if($post['type_id']==2):?>
 		<h2>Shop Name: <?php echo $post['shop_name']; ?></h2>
  <?php endif;?>
  <?php if($post['type_id']==3):?>
  <h3>Skill: <?php echo $post['expert_at']; ?></h3>
  <h3>Name: <?php echo $post['username']; ?></h3>

<?php endif;?>
 		<br><br>
 		<p><a class="btn btn-primary" href="<?php echo base_url(); ?>users/change_proposal_status/2/<?php echo $post['proposed_id'];?>/<?php echo $post['id']?>">Accept</a></p>
    <p><a class="btn btn-primary" href="">Reject</a></p>


 <?php endforeach; ?>

</body>
</html>
