<?php 
    session_start();
    include 'connection.php';
    if(!isset( $_SESSION['loginId']))
    {
        header('location:index.php');
    }
    if(isset($_GET['id']))
    {
     
        $id = (int)$_GET['id'];
        $sql = "SELECT * FROM articles where id = $id";
        $sqlRun = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($sqlRun);
        // echo $count;

        if($count == 1)
        {
            $article = mysqli_fetch_assoc($sqlRun);
            // var_dump($slider);
        }
        else
        {
            header('location:view_articles.php');
        }

    }
    else
    {
        header('location:view_articles.php');
        exit;
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
                    Edit Article
                </h3>
                <?php include 'includes/msg.php'; ?>
                <form action="editArticleProcess.php" method="post" enctype="multipart/form-data">
                    <p>
                    Title : <input class="form-control" value="<?=$article['title']; ?>" type="text" name="title" id="">
                    </p>
                    <p>
                    Type : <select name="type" id="">
                                <option <?= ($article['type'] == 'hike')?"selected":""; ?> value="hike">Hike</option>
                                <option <?= ($article['type'] == 'trek')?"selected":""; ?> value="trek">Trek</option>
                                <option <?= ($article['type'] == 'tour')?"selected":""; ?> value="tour">Tour</option>
                            </select>
                    </p>
                    <p>
                    Abstract : <textarea row=5 class="form-control" type="text" name="abstract" id=""><?=$article['abstract']; ?></textarea>
                    </p>
                    <p>
                        Description : <br>
                        <textarea name="description" id="description" cols="60" rows="10"><?=$article['description']; ?></textarea>
                    </p>
                    <p>
                        <img src="uploads/articles/<?php echo $article['featured_image']; ?>" class="img-fluid" width="200">
                        
                    </p>
                    <p>
                        Image : <input type="file" name="featured_image" id="">
                    </p>
                    <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
                    <input type="submit" class="btn btn-primary" value="Edit">
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
