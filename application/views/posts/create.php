<style>
.border-class2 {
  border: 2px solid #47494c;

  height: 650px;
}
</style>
<div class="col-sm-2">

</div>
<div class="col-sm-6 border-class2">


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product and post</title>

    <script type="text/javascript">
      function compute_product_key()
      {
         var product_key_show = Math.floor(Math.random() * 1000000);
         product_key_show = product_key_show.toString();
         document.getElementById('pro_key').innerHTML = "Product Key = "+product_key_show;
         document.getElementById('product_key').value= product_key_show;
      }
    </script>


  </head>
  <body>

<?php echo validation_errors(); ?> <!--Form validation kono error hole ekhane show korbe -->


<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <br>
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
  </div>
  <div class="form-group">
    <label>Product Name</label>
    <input type="text" id="product_name" class="form-control" name="product_name" placeholder="Add Product Name"></input>
  </div>
  <div class="form-group">
    <label>Product Model</label>
    <input type="text" id="product_model" class="form-control" name="product_model" placeholder="Add Product Model" onkeyup="compute_product_key()"/>
    <input type="hidden" name="product_key" id="product_key"/>
  </div>
  <h5 id = "pro_key"></h5>
  <div class="form-group">
  	  <label>Upload Image</label>
  	  <input type="file" name="userfile4" size="20">
  </div>
 <!-- <div class="form-group">
  	  <label>Upload Image</label>
  	  <input type="file" name="userfile2" size="20">
  </div> -->
  <div class="form-group" id="image">
  	  <label>Upload Image</label>
  	  <input type="file" name="userfile3" size="20">
  </div>
<div>
    <a href="#" id="add">Add Image</a>
</div>

  <div class="float-right"><button type="submit" class="btn btn-dark pull-right">Submit</button> </div>
</form>


</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    var count = 1;
    $("#add").click(function () {
        count+=1;
        var name2="userfile"+count;

        var html='  \t  <input type="file" name='+name2+ ' size="20">\n';
        alert(html);
        $('#image').append(html);
    })
</script>


</html>
</div>
