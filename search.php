<?php 
    session_start();
    include 'connection.php';


    $msg = '';

    if(isset($_GET['q']) && !empty($_GET['q']))
    {
        // echo "we are good to go";

        $searchTxt = mysqli_escape_string($conn,$_GET['q']);
        

        
        $sql = "SELECT * FROM articles where title like  '%$searchTxt%' order by id desc";
        $sqlRun = mysqli_query($conn,$sql);

        $articles = [];

        $count = mysqli_num_rows($sqlRun);

        $msg = "You are searching for ".$searchTxt;

        while($data = mysqli_fetch_assoc($sqlRun))
        {
            $articles[] = $data;
        }


        // var_dump($articles);
        // exit;

    }
    else
    {
        // echo "not good";
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

    <h2><u><?php echo $msg; ?></u></h2>
    <?php 
        if($count > 0) :
    ?>
            <div class="row">

                <?php foreach($articles as $article): ?>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 text-center">
                    <img class="card-img-top" src="uploads/articles/<?php echo $article['featured_image']; ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $article['title']; ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <a href="<?php echo $article['type'].'.php'; ?>"><?php echo $article['type']; ?></a>
                        </h6>
                        <p class="card-text"><?php echo $article['abstract']; ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="details.php?id=<?php echo $article['id']; ?>" class="btn btn-primary btn-sm">
                        Details 
                        </a>
                    </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
            </div>
    <?php else : 
            echo "<h3>No records found</h3>";
        endif;
    ?>    
    </div>   

    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
