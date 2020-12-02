<?php
include 'connection.php';
$sql ="SELECT * FROM events order by id desc limit 5";
$sql1="SELECT  * FROM  userevents where flag ='1'"; 
//LEFT JOIN table2
//ON table1.column_name = table2.column_name;
    $sql_events = mysqli_query($conn,$sql);
    $sql_userevents = mysqli_query($conn,$sql1);
    $events = array();
    $user_events = array();
    while($data = mysqli_fetch_assoc($sql_events))
    {
      //print_r($data);
      //exit;

      $events[] = $data;
  }
  while($data = mysqli_fetch_assoc($sql_userevents))
  {
    //print_r($data);
    //exit;

    $user_events[] = $data;
}
//print_r($user_events);
//print_r($events);
//exit;
	?>
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
</head>
<h4>Upcoming Events</h4>
<body>
<?php
      foreach($events as $event):
  //exit;?>
<div class="columns">
  <ul class="price">
    <li class="header"><?php echo $event['event_venue']; ?></li>
    <li class="grey"><?php echo $event['location']; ?></li>
    <li>event date:<?php echo $event['event_date'];?></li>
    <li>total candidates : <?php echo $event['total_candidates'];?></li>
    <li>event organiser: <?php echo $event['name']; ?> <br>
    email:<?php echo $event['email']; ?></li>
    <li class="grey"><a href="information.php" class="button">i am interested</a></li>
  </ul>
</div>
<?php endforeach;
 foreach($user_events as $event):
  //exit;?>
<div class="columns">
  <ul class="price">
    <li class="header"><?php echo $event['event_venue']; ?></li>
    <li class="grey"><?php echo $event['location']; ?></li>
    <li>event date:<?php echo $event['event_date'];?></li>
    <li>total candidates : <?php echo $event['total_candidates'];?></li>
    <li>event organiser: <?php echo $event['name']; ?> <br>
    email:<?php echo $event['email']; ?></li>
    <li class="grey"><a href="information.php" class="button">i am interested</a></li>
  </ul>
</div>
<?php endforeach;
 ?>
</body>
