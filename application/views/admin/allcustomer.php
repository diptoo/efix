<table class="table table-hover">
            <thead>
            <tr class="table-secondary">
                <th scope="col">Customer Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($posts)):?>
                <?php foreach ($posts as $post):?>
                    <tr class="table-primary">
                        <td><?php echo $post['username'] ?></td>
                        <td><?php echo $post['email'] ?></td>
                        <td><?php echo $post['address']?></td>
                        <td><?php echo $post['age']?></td>
                        <td><?php echo $post['gender']?></td>
                        <td>
                            <?php  // echo anchor("welcome/show/{$post->id}", 'View', array('class' => 'badge badge-primary')); ?>
                            <?php   echo anchor("users/customer_block/4/{$post['id']}", 'Block', array('class' => 'badge badge-danger'));?>
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
