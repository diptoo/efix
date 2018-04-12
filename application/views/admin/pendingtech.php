<table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Technican Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Skill</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($posts)):?>
                <?php foreach ($posts as $post):?>
                    <tr class="table-active">
                        <td><?php echo $post['username'] ?></td>
                        <td><?php echo $post['email'] ?></td>
                        <td><?php echo $post['address']?></td>
                        <td><?php echo $post['expert_at']?></td>
                        <td><?php echo $post['age']?></td>
                        <td><?php echo $post['gender']?></td>

                        <td>
                            <?php  // echo anchor("welcome/show/{$post->id}", 'View', array('class' => 'badge badge-primary')); ?>
                            <?php   echo anchor("users/change_technician_change/1/{$post['id']}", 'Approve', array('class' => 'badge badge-success'));?>
                            <?php   echo anchor("users/change_technician_change/3/{$post['id']}", 'Reject', array('class' => 'badge badge-danger', 'onclick'=>"return confirm('Are you sure you want to reject?')"));?>
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
