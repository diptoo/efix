<table class="table table-hover">
            <thead>
              <?php if (count($posts)):?>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Cost</th>
                <th scope="col">Days</th>
                <th scope="col">Definition</th>
                <th scope="col" style="color: red">Rating</th>
                <?php if($posts[0]['type_id']==2):?>
                <th scope="col">Shop Name</th>
              <?php endif;?>
              <?php if($posts[0]['type_id']==3):?>
                <th scope="col">Skill</th>
                <th scope="col">Name</th>
              <?php endif;?>

                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

                <?php foreach ($posts as $post):?>
                    <tr class="table-active">
                        <td><?php echo $post['pst_id'] ?></td>
                        <td><?php echo $post['title'] ?></td>
                        <td><?php echo $post['cost'] ?></td>
                        <td><?php echo $post['days']?></td>
                        <td><?php echo $post['definition']?></td>
                        <td style="color: red"><?php echo $post['avg']?></td>
                        <?php if($post['type_id']==2):?>
                      <!--    <td><?php //echo $post['shop_name']?></td>-->
                            <td><a href="<?php echo base_url()?>users/check_profile/<?php echo $post['proposed_id'] ?>"><?php echo $post['shop_name']?></a></td>
                        <?php endif;?>
                        <?php if($post['type_id']==3):?>
                          <td><?php echo $post['expert_at']?></td>
                            <td><a href="<?php echo base_url()?>users/check_profile/<?php echo $post['proposed_id'] ?>"><?php echo $post['username']?></a></td>
                       <?php endif;?>
                        <td>
                            <?php  // echo anchor("welcome/show/{$post->id}", 'View', array('class' => 'badge badge-primary')); ?>
                            <?php   echo anchor("users/change_proposal_status/2/{$post['proposed_id']}/{$post['id']}/{$post['pst_id']}", 'Approve', array('class' => 'badge badge-success'));?>
                            <?php   echo anchor("", 'Reject', array('class' => 'badge badge-danger', 'onclick'=>"return confirm('Are you sure you want to reject?')"));?>
                        </td>
                    </tr>
                <?php endforeach;?>
            <?php else: ?>
                <tr>
                    <td>
                        No Records Found!
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

<!--
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

</html>
