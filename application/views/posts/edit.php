<!--Called from posts controller edit method-->

<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update/'.$post['id']); ?>
<div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']?>">
</div>
<div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"> <?php echo $post['body']?></textarea>
</div>

<button type="submit" class="btn btn-primary">Update</button>
</form>
