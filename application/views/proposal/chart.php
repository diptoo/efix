</<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>



</head>
<body>
 <?php
 $chart_data = '';
 ?>
 <?php foreach ($posts as $post):?>

    <?php  $chart_data .= "{ year:'".$post["month2"]."', rejected:".$post["rejected"].", pending:".$post["pending"].", accepted:".$post["accepted"]."}, ";
     ?>

 <?php endforeach; ?>
<?php $chart_data = substr($chart_data, 0, -2);?>
<br/>
 <div class="container">
    <div class="row">
        <div class="col-md-6">
            <span class="badge badge-success">Bar Chart</span>
        <div id="chart" >
        </div>
        </div>
        <div class="col-md-6">
            <span class="badge badge-info">Line Chart</span>

            <div id="chart2" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <span class="badge badge-danger">Stack Chart</span>
            <div id="chart3" >
            </div>
        </div>
        <div class="col-md-6">
            <span class="badge badge-warning">Area Chart</span>

            <div id="chart4" >
            </div>
        </div>
    </div>
</div>

</body>
<script>
    Morris.Bar({
        element : 'chart',
        data:[<?php echo $chart_data; ?>],
        xkey:'year',
        ykeys:['rejected','pending','accepted'],
        labels:['Rejected','Pending','Accepted'],
        hideHover:'auto',
        stacked:false
    });
    Morris.Line({
        element : 'chart2',
        data:[<?php echo $chart_data; ?>],
        xkey:'year',
        ykeys:['rejected','pending','accepted'],
        labels:['Rejected','Pending','Accepted'],
        hideHover:'auto',
        stacked:false
    });
    Morris.Bar({
        element : 'chart3',
        data:[<?php echo $chart_data; ?>],
        xkey:'year',
        ykeys:['rejected','pending','accepted'],
        labels:['Rejected','Pending','Accepted'],
        hideHover:'auto',
        stacked:true
    });
    Morris.Area({
        element : 'chart4',
        data:[<?php echo $chart_data; ?>],
        xkey:'year',
        ykeys:['rejected','pending','accepted'],
        labels:['Rejected','Pending','Accepted'],
        hideHover:'auto',
        stacked:false
    });
</script>
</html>