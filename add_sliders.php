<?php 
    session_start();
    include 'connection.php';
    if(!isset( $_SESSION['loginId']))
    {
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Travell Trek Nepal | Naturally nepal six season travel</title>

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <?php include 'includes/nav.php'; ?>

  

    <div class="container">
        <hr>

        <div class="row">
            <?php include 'includes/admin_sidebar.php'; ?>
            <div class="col-md-9">
                <h2>Welcome to Dashboard</h2>
                <hr>
                <h3> 
                Add New slider image
                </h3>
                <?php include 'includes/msg.php'; ?>
                <form action="addSlideProcess.php" method="post" enctype="multipart/form-data">
                    <p>caption : <br>
                        <textarea name="caption" id="caption" class="form-control" rows="5"></textarea>
                    </p>
                    <p>
                        Image : <input type="file" name="featured_image" id="">
                    </p>
                    <input type="submit" class="btn btn-primary" value="Add">
                </form>  
                <hr>
                   
            </div>
        </div>


    </div>   

    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
