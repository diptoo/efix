<table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Shop Name</th>
                <th scope="col">Cost</th>
                <th scope="col">Days</th>
                <th scope="col">Shop Id</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($posts)):?>
                <?php foreach ($posts as $post):?>
                    <tr class="table-active">
                        <td><?php echo $post['shop_name'] ?></td>
                        <td><?php echo $post['cost'] ?></td>
                        <td><?php echo $post['days']?></td>
                        <td><?php echo $post['shop_id']?></td>

                        <td>
                            <?php  // echo anchor("welcome/show/{$post->id}", 'View', array('class' => 'badge badge-primary')); ?>
                            <?php   echo anchor("ratings/give_review/2/{$post['shop_id']}", 'Give Rating', array('class' => 'badge badge-success'));?>
                            <?php   //echo anchor("users/change_technician_change/3/{$post['id']}", 'Reject', array('class' => 'badge badge-danger', 'onclick'=>"return confirm('Are you sure you want to reject?')"));?>
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
