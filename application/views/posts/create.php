<style>
.border-class2 {
  border: 2px solid #47494c;

  height: 1000px;
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

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div id="uploadFileContainer"></div>
        <div id="submit" style="display: none">
            <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <button id="ADDFILE" class="btn btn-danger">
            Add File
        </button>
    </div>
</div>


<!--  <div class="float-right"><button type="submit" class="btn btn-dark pull-right">Submit</button> </div>-->
</form>


</body>

  <script type="text/javascript">
      jQuery(document).ready(function ($) {
          $(document).on('click','button#ADDFILE',function (event) {
              event.preventDefault();
              $("div#submit").css("display","block");
              addFileInput();
          })
      });

      function addFileInput() {
          var html = '';
          html+='<div class="alert alert-info">';
          html+='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>';
          html+='<strong>Upload File</strong>';
          html+='<input type="file" name="multipleFiles[]">';
          html+='</div>';

          $("div#uploadFileContainer").append(html);
      }
  </script>


</html>
</div>
