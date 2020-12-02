<?php 
    session_start();
    include 'connection.php';
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
        <h2>Admin Login</h2>
        <div class="row">
            <div class="col-md-6">

                <?php include 'includes/msg.php'; ?>
               
                <form action="loginprocess.php" method="post" style="background:#f1f1f1; padding:30px; margin-bottom:20px;  ">
                
                    <p>
                        Email : <input type="text" name="email" id="" class="form-control" autofocus="on">
                    </p>
                    <p>
                        Password : <input type="password" name="password" id="" class="form-control">
                    </p>
                    <input type="submit" class="btn btn-primary" value="Login">
                </form>
            </div>    
        </div>
    </div> <!-- /container --> 
          

    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
