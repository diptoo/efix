<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Technician Name</th>
        <th scope="col">Email</th>
        <th scope="col">contact</th>
        <th scope="col">Cost</th>
        <th scope="col">Service Charge</th>

    </tr>
    </thead>
    <tbody>
    <?php if (count($posts)):?>
        <?php foreach ($posts as $post):?>
            <tr class="table-active">
                <td><?php echo $post['username'] ?></td>
                <td><?php echo $post['email'] ?></td>
                <td><?php echo $post['contact']?></td>
                <td><?php echo $post['cost'] ?></td>
                <td><?php echo $post['service_charge']?></td>

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
