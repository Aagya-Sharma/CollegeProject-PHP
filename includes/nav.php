    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><span style="color:red;">Wander<span style="color:white;">LUST</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="tour.php">Tours</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="trek.php">Treks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hike.php">Hike around the valley</a>
            </li>    
            <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link" href="events.php">Events</a>
            </li>  
             
               
            <?php if(!isset($_SESSION['loginId'])) { ?>
                <li class="nav-item">
                    <a class="nav-link"  href="login.php">Login</a>
                </li>
                 
                <!-- <li><a class="nav-link" href="register.php">Register</a></li>     -->
            <?php } else { ?>

                <li class="nav-item">
                    <a  class="nav-link" href="#">Welcome : <?php echo $_SESSION['loginEmail']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
              
                </li>  
               <li> <a class="nav-link" href="logout.php">Logout</a></li>

            <?php } ?>
          
           
          </ul>
        </div>
      </div>
    </nav>