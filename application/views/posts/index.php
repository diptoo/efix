</<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>Latest Posts</h1>
    <style>

        .post-date{
            background:#f4f4f4;
            padding:4px;
            margin:3px 0;
            display:block;
        }
    </style>
</head>

<!-- retrieve data sent from posts class index method -->
<body>
 <?php foreach($posts as $post) : ?>
 	<h3><?php echo $post['title']; ?></h3>
    <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
 		<?php echo $post['body']; ?>
 		<br><br>
 		<p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>


 <?php endforeach; ?>

</body>
</html>
