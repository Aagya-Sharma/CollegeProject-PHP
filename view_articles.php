<?php 
    session_start();
    include 'connection.php';
    if(!isset( $_SESSION['loginId']))
    {
        header('location:index.php');
    }

    $csql = "select count(*) from articles order by id desc";
    $csqlRun = mysqli_query($conn,$csql);

    $total = mysqli_fetch_row($csqlRun);

    // var_dump($total);

    $totalData =  $total[0];


    $perPage = 3;

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
                    View all Articles
                </h3>
                <?php include 'includes/msg.php'; ?>
                <table class="table table-bordered">
                    <tr>
                        <td>Sn</td>
                        <td>Caption</td>
                        <td>Type</td>
                        <td>Image</td>
                        <td>Options</td>
                    </tr>
                    <?php 
                       $i = 1; foreach($articles as $article):
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $article['title']; ?></td>
                        <td><?php echo $article['type']; ?></td>
                        
                        <td><img src="uploads/articles/<?php echo $article['featured_image']; ?>" class="img-fluid" width="200"></td>
                        <td> 
                            <a href="delete_article.php?id=<?php echo $article['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                            <a href="edit_article_form.php?id=<?php echo $article['id']; ?>">Edit</a>
                        </td>
                    </tr>
                    <?php $i++; endforeach; ?>
                </table>
                <nav aria-label="Page navigation example">

                    <ul class="pagination">
                        <?php 

                            for($i = 1; $i <= $totalNumOfPage; $i++ ):
                        ?>
                        
                                <li class="<?php echo ($pageNo == $i ) ? "active":""; ?> page-item">
                                    <a class="page-link" href="view_articles.php?page_no=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            
                        <?php
                            endfor;

                        ?>
                    </ul>
                </nav>
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

