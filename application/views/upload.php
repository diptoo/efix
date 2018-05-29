<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
            echo "<pre>";
            print_r($uploaded_files );
            echo "</pre>";
            ?>
        </div>
    </div>

</div>
<?php echo form_open_multipart('upload/index'); ?>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <button id="ADDFILE" class="btn btn-danger">
            Add File
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
       <div id="uploadFileContainer"></div>
        <div id="submit" style="display: none">
            <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

</body>
</html>