<?php 
include 'connection.php';
session_start();

    
$sql ="select * from userevents order by id desc limit 5";
$sqlRun = mysqli_query($conn,$sql);


$userevents = [];

while($data = mysqli_fetch_assoc($sqlRun))
{
  $userevents[] = $data;
}
 
?>
<html>

       
     
<html>
<head>
<style type="text/css">
* {
  box-sizing: border-box;
}

/* Create three columns of equal width */
.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

/* Style the list */
.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

/* Add shadows on hover */
.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

/* Pricing header */
.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

/* List items */
.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

/* Grey list item */
.price .grey {
  background-color: #eee;
  font-size: 20px;
}

/* The "Sign Up" button */
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

/* Change the width of the three columns to 100% 
(to stack horizontally on small screens) */
@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/modern-business.css" rel="stylesheet">
</head>

    <?php include 'includes/nav.php'; ?>
<h4> Events</h4>
<body>
<?php
if(isset($_SESSION['msg']) && $_SESSION['msg'] != "")
{
?>
<div class="row">
<h3 style = "color:green"><?php echo $_SESSION['msg'];?></h3>
</div>
<?php
$_SESSION['msg'] = "";
}?>
<?php foreach($userevents as $userevent):?>
<div class="columns">
  <ul class="price">
    <li class="header"><?php echo $userevent['event_venue']; ?></li>
    <li class="grey"><?php echo $userevent['location']; ?></li>
    <li>event date:<?php echo $userevent['event_date'];?></li>
    <li>total candidates : <?php echo $userevent['total_candidates'];?></li>
    <li>event organiser: <?php echo $userevent['name']; ?> <br>
    email:<?php echo $userevent['email']; ?></li>
    <li class="grey">
<a href="approve.php?id=<?php echo $userevent['id']; ?>"class="button">approve</a></li>
  </ul>
</div>
<?php endforeach; ?>
</body>
<script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
