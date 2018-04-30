<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Rating</th>
        <th scope="col">Comment</th>
    </tr>
    </thead>
    <tbody>
    <?php if (count($posts)):?>
        <?php foreach ($posts as $post):?>
            <tr class="table-active">
                <td><?php echo $post['rating'] ?></td>
                <td><?php echo $post['comment'] ?></td>
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
