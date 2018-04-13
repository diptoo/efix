<table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Cost</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($posts)):?>
                <?php foreach ($posts as $post):?>
                    <tr class="table-active">
                        <td><?php echo $post['title'] ?></td>
                        <td><?php echo $post['cost'] ?></td>
                    <?php if($post['status']==1):?>
                        <td><p style="color:blue;">Pending</p></td>
                    <?php ?>
                  <?php elseif($post['status']==2):?>
                        <td><p style="color:green;">Accepted</p></td>
                    <?php ?>
                  <?php elseif($post['status']==3):?>
                        <td><p style="color:red;">Rejected</p></td>
                    <?php endif; ?>


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
