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
                ],
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
            <?php include 'includes/admin_sidebar.php'; ?>
            <div class="col-md-9">
                <h2>Welcome to Dashboard</h2>
                <hr>
                <h3> 
                Add New Article
                </h3>
                <?php include 'includes/msg.php'; ?>
                <form action="addArticleProcess.php" method="post" enctype="multipart/form-data">
                    <p>
                    Title : <input class="form-control" type="text" name="title" id="">
                    </p>
                    <p>
                    Type : <select name="type" id="">
                                <option value="hike">Hike</option>
                                <option value="trek">Trek</option>
                                <option value="tour">Tour</option>
                            </select>
                    </p>
                    <p>
                    Abstract : <textarea row=5 class="form-control" type="text" name="abstract" id=""></textarea>
                    </p>
                    <p>
                        Description : <br>
                        <textarea name="description" id="description" cols="60" rows="10"></textarea>
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
