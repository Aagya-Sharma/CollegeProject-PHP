<?php
include 'connection.php';


 
    
    $sql ="select * from events order by id desc limit 5";
    $sqlRun = mysqli_query($conn,$sql);

  
    $events = [];

    while($data = mysqli_fetch_assoc($sqlRun))
    {
      $events[] = $data;
	}
	?>









<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	
	.card-holder
	{
		margin: 0 auto;
		width: 90%;
		display: grid;
		grid-template-columns: auto auto; 
		cursor: pointer;
		
	}
	.card
	{
		display: inline-grid;
		box-shadow: 2px 2px 3px #000;	
		margin: 5px 10px;
		padding: 5px;	
		background-color: #3965;

	}	
	.card .heading
	{
		margin-bottom: 5px; 
		padding: 5px 0px;
		color: #FF7F50;
		background-color:  #DCDCDC;
		text-align: center;
		border-radius: 5px;
	}
	.date-holder
	{
		font-size:15px;
		font-weight: bolder;
		text-indent: 20%;
	}
	.card .description
	{
		padding: 4px;
		font-size:25px;
	}
	.card-footer
	{
		background-color:#B67D7D;
	}
	
	.title 
	{
		text-align:center;
	}
	.text-center  {
		text-align:center;
	}
</style>
 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/modern-business.css" rel="stylesheet">
	<link href="style/css" rel="stylesheet">
	
</head>
<body>
<br>
<br>
<br>

<h4 class="title">upcoming events</h4>
<br>
<br>
<?php foreach($events as $event):?>
<div class="card-holder">
	<div class="card">
		<h3 class="heading"><?php echo $event['event_venue']; ?><br><?php echo $event['location'];?></h3> 
		<p class="description"><?php echo $event['type']; ?></p>
		<span class="date-holder">Event Date:<?php echo $event['event_date']; ?></span><br>
		<div class="text-center"> <a href="information.php" class="btn btn-primary btn-sm">i am interested</a></div>
	</div>
</div>
<br>
<br>
<?php endforeach; ?>
<br>
<br>
<br>

</body>
</html>
<script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

