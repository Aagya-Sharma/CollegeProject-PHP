<?php 
    session_start();
    include 'connection.php';

    $slider_sql = "select * from slider order by id desc limit 5";
    $slider_sql_run = mysqli_query($conn,$slider_sql);
    $slider_image_count = mysqli_num_rows($slider_sql_run);

    $sliders = [];

    while($data = mysqli_fetch_assoc($slider_sql_run))
    {
      $sliders[] = $data;
    }

    $csql = "select count(*) from articles order by id desc";
    $csqlRun = mysqli_query($conn,$csql);

    $total = mysqli_fetch_row($csqlRun);

    // $article_sql = "select * from articles order by id desc limit 6";
    // $article_sql_run = mysqli_query($conn,$article_sql);
    // $total = mysqli_fetch_row($article_sql_run);
    // $slider_image_count = mysqli_num_rows($slider_sql_run);

    $articles = [];
    $totalData =  $total[0];

    
    $perPage=6;

    $totalNumOfPage = $totalData / $perPage;

    $totalNumOfPage = ceil($totalNumOfPage);

    

    $pageNo = (isset($_GET['page_no']))? $_GET['page_no'] : 1;

    $pageNo =  (int)$pageNo;

    $start = ($pageNo - 1) * $perPage;

    $sql = "SELECT * FROM articles order by id desc limit $start,$perPage";
    $sqlRun = mysqli_query($conn,$sql);

    $articles = [];

    while($data = mysqli_fetch_assoc($sqlRun))
    {
      $articles[] = $data;
    }

    // var_dump($articles);
   
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Travel Trek Nepal | Naturally nepal six season travel</title>

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    

    <?php include 'includes/nav.php'; ?>
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php for($i = 0; $i<$slider_image_count; $i++): ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0)?'active':''; ?>"></li>
          <?php endfor; ?>
        </ol>
        <div class="carousel-inner" role="listbox">

          <?php $i = 1; foreach($sliders as $slider): ?>
            <div class="carousel-item <?php echo ($i == 1)?'active':''; ?>" style="background-image: url('uploads/sliders/<?php echo $slider['featured_image']; ?>')">
              <div class="carousel-caption d-none d-md-block">
                <p style="background:black ; opacity:0.6; color:white; padding:20px;"><?php echo $slider['caption']; ?></p>
              </div>
            </div>
          <?php $i++; endforeach; ?>
         
        </div>



        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <div class="container">
    <hr>
    <h2>Featured Destinations</h2>

      <div class="row">

        <?php foreach($articles as $article): ?>
          <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
              <img class="card-img-top" src="uploads/articles/<?php echo $article['featured_image']; ?>" alt="">
              <div class="card-body">
                  <h4 class="card-title"><?php echo ucwords($article['title']); ?></h4>
                  <h6 class="card-subtitle mb-2 text-muted">
                      <a href="<?php echo $article['type'].'.php'; ?>"><?php echo ucwords($article['type']); ?></a>
                  </h6>
                  <p class="card-text"><?php echo $article['abstract']; ?></p>
              </div>
              <div class="card-footer">
              <class="btn btn-primary btn-sm">  
              <a href="details.php?id=<?php echo $article['id']; ?>" class="btn btn-primary btn-sm">
                  Details 
                </a>
              </div>
            </div>
          </div>
       <?php endforeach; ?>
       
      </div>
    </div>   
 
    <br>
    <br>
    <br>

   
     <nav aria-label="Page navigation example">
     <ul class="pagination">
                        <?php 

                            for($i = 1; $i <= $totalNumOfPage; $i++ ):
                        ?>
                        <ul class="pagination">
                                <li class="<?php echo ($pageNo == $i ) ? "active":""; ?> page-item">
                                    <a class="page-link" href="index.php?page_no=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            </ul>
                        <?php
                            endfor;

                        ?>
                        </ul>
                        
                        <?php include 'comment.php'; ?>  
                    
                    </html>


   


    
                    
              
<!-- </nav> -->

     <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
