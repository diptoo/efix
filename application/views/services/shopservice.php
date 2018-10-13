<div class="col-sm-10">
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Cost</th>
                <th scope="col">Shop Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($posts)):?>
                <?php foreach ($posts as $post):?>
                    <tr class="table-active">
                        <td><?php echo $post['cost'] ?></td>
                        <td><a href="<?php echo base_url()?>users/check_profile/<?php echo $post['user_id'] ?>"><?php echo $post['shop_name']?></a></td>
                        <td>
                            <?php   echo anchor("", 'select', array('class' => 'badge badge-danger', 'onclick'=>"return confirm('Are you sure you want to select?')"));?>
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
    </div>
</div>