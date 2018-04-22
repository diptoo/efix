<!--Called from posts controller edit method-->
<style>
textarea.form-control {
height: 200px;
}

</style>
<br>
<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<br>
<div class="row">
  <div class="col-sm-3">

  </div>
  <div class="col-sm-6">
    <?php echo form_open('posts/update/'.$post['id']); ?>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']?>">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"> <?php echo $post['body']?></textarea>
    </div>

    <button type="submit" class="btn btn-dark">Update</button>
    </form>

  </div>
</div>
