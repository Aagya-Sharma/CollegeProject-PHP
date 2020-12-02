<?php 
    session_start();
    include 'connection.php';

   

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
        }
        else
        {
            header('location:index.php');
        }

    }
    else
    {
        header('location:index.php');
        exit;
    }

     //var_dump($articles);

    $more_sql = "select * from articles where id != ".$_GET['id'];
    $more_sql_run = mysqli_query($conn,$more_sql);
    
    $more_articles = [];

    while($data = mysqli_fetch_assoc($more_sql_run))
    {
        $more_articles[] = $data; 
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
<?php include 'includes/nav.php' ?>
  <body>


    <div class="container">
    <hr>

      <div class="row">
      <div class="container">

        <h1 class="mt-4 mb-3"><?php echo $article['title']; ?></h1>
        <div class="row">

        <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="uploads/articles/<?php echo $article['featured_image']; ?>" alt="">

                <hr>

                <!-- Date/Time -->
                <p>Posted on <?php echo $article['added_date']; ?></p>

                <hr>
                <?php echo $article['description']; ?></p>
                <?php echo $article['map']; ?></p>
                <hr> 

    
            

            </div>

            <div class="col-md-4">               
                <div class="card my-4">
                    <h5 class="card-header">More</h5>
                    <ul class="list-group">
                        <?php $i = 1; foreach($more_articles as $arti): ?>
                            <li class="list-group-item"><span class="badge badge-secondary"><?=$i; ?></span> 
                                <a href="details.php?id=<?php echo $arti['id']; ?>"><?php echo $arti['title']; ?></a>
                            </li>
                        <?php  $i++; endforeach; ?>
                    </ul>

                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>
       
      </div>
    </div>   

    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>



