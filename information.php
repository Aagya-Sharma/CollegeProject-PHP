
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
    <script src="assets/tinymce/tinymce.min.js"></script>
    <script>
            tinymce.init({
                selector: '#description',
                height: 350,
                menubar: true,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor textcolor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code help wordcount'
                ]
                toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
                content_css: [
                    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    '//www.tinymce.com/css/codepen.min.css']
                });
    </script>

  </head>

  <body>

    <?php include 'includes/nav.php'; ?>

  

    <div class="container">
        <hr>

        <div class="row">
            
            <div class="col-md-9">
                
                <hr>
                <h3> 
                PLEASE FILL UP THE FORM
                </h3>
                <?php include 'includes/msg.php'; ?>
                <form action="informationprocess.php" method="post" enctype="multipart/form-data">
                    <p>
                    Name: <input class="form-control" type="text" name="Name" id="" required >
                    </p>
                    <p>
                    Email: <input class="form-control" type="text" name="Email" id="" required>
                    </p>
                    <p>
                    Address: <input class="form-control" type="text" name="Address" id="" required>
                    </p>
                    <p>
                    Contact_number: <input class="form-control" type="text" name="Contact_number" id="" required>
                    </p>
                    
                   
                    
                    <input type="submit" class="btn btn-primary" value="submit" name="submit">
                   
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
