<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POST</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POST ---</h3>
        <!-- <a href="users_add.php" class="btn btn-primary">Add New User</a> -->
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                
            </thead>
            <?php {?>
            	<tr>
            		<td><?php echo $post['id']; ?></td>
            		<td><?php echo $post['title']; ?></td>
            		<td><?php echo $post['description']; ?></td>
            		<td><?php echo $post['content'] ?></td>
            		     	
                </tr>
       <?php } ?>
   </table>
            
    </div>
</body>
</html>