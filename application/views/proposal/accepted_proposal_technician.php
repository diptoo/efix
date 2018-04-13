<table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Technican Name</th>
                <th scope="col">Cost</th>
                <th scope="col">Days</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($posts)):?>
                <?php foreach ($posts as $post):?>
                    <tr class="table-active">
                        <td><?php echo $post['username'] ?></td>
                        <td><?php echo $post['cost'] ?></td>
                        <td><?php echo $post['days']?></td>
                        <td>coming soon</td>

                        <td>
                            <?php  // echo anchor("welcome/show/{$post->id}", 'View', array('class' => 'badge badge-primary')); ?>
                            <?php   echo anchor("", 'CALL', array('class' => 'badge badge-success'));?>
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
