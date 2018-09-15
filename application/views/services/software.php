<div class="col-sm-10">
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Service Type</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($posts)):?>
                <?php foreach ($posts as $post):?>
                    <tr class="table-active">
                        <td><?php echo $post['service_type'] ?></td>
                        <td>
                            <?php   echo anchor("users/change_register_change/3/{$post['id']}", 'select', array('class' => 'badge badge-danger', 'onclick'=>"return confirm('Are you sure you want to select?')"));?>
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