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
                            <?php   echo anchor("ratings/give_review/3/{$post['technician_id']}", 'Give Rating', array('class' => 'badge badge-success'));?>
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
