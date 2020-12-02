<?php 
    session_start();
    include 'connection.php';
  
//UPDATE table_name SET key = value WHERE condition;

    // maja aayena
    // print_r($_POST);
    // exit;
    if(isset($_POST['submit_admin']))
    
    {
        $name = trim(mysqli_escape_string($conn,$_POST['name']));
        $email = mysqli_escape_string($conn,$_POST['email']);
        $type = mysqli_escape_string($conn,$_POST['type']);
        $event_venue = mysqli_escape_string($conn,$_POST['event_venue']);
        $description = mysqli_escape_string($conn,$_POST['description']);
        $location = mysqli_escape_string($conn,$_POST['location']);
        $budget = mysqli_escape_string($conn,$_POST['budget']);
        $total_candidates = mysqli_escape_string($conn,$_POST['total_candidates']);
        $event_date = mysqli_escape_string($conn,$_POST['event_date']);
        $end_date = mysqli_escape_string($conn,$_POST['end_date']);

        

        // if(empty($name) or empty($email) or empty($type) or empty($description) or empty($duration) or empty($budget)){

            // $_SESSION['msg'] = "All fields are required";
            // header('location:events.php');
            // exit;
        // header('location:index.php');
             $sql = "INSERT INTO events (name,email,type,event_venue,description,location,budget,total_candidates,event_date,end_date) VALUES ('$name','$email','$type','$event_venue','$description','$location','$budget','$total_candidates','$event_date','$end_date' )";
            header('location:events.php');
            // echo $sql;
            // exit;
            if( mysqli_query($conn,$sql))
            {
                
                $_SESSION['msg'] = "Record saved";
              //  header('location:events.php');
            }
            else
            {
                 $_SESSION['msg'] = "Record not saved";
                // header('location:events.php');
                //echo mysqli_error($conn);
            }
            //header('location:index.php');

    }
    else if(isset($_POST['submit_user']))
  
    {

         $name = trim(mysqli_escape_string($conn,$_POST['name']));
        $email = mysqli_escape_string($conn,$_POST['email']);
        $type = mysqli_escape_string($conn,$_POST['type']);
        $event_venue = mysqli_escape_string($conn,$_POST['event_venue']);
        $description = mysqli_escape_string($conn,$_POST['description']);
        $location = mysqli_escape_string($conn,$_POST['location']);
        $budget = mysqli_escape_string($conn,$_POST['budget']);
        $total_candidates = mysqli_escape_string($conn,$_POST['total_candidates']);
        $event_date = mysqli_escape_string($conn,$_POST['event_date']);
        $end_date = mysqli_escape_string($conn,$_POST['end_date']);


        

        // if(empty($name) or empty($email) or empty($type) or empty($description) or empty($duration) or empty($budget)){

            // $_SESSION['msg'] = "All fields are required";
            // header('location:events.php');
            // exit;
        // header('location:index.php');
            
        $sql = "INSERT INTO userevents (name,email,type,event_venue,description,location,budget,total_candidates,event_date,end_date) VALUES ('$name','$email','$type','$event_venue','$description','$location','$budget','$total_candidates','$event_date','$end_date' )";
            header('location:events.php');
            
            // echo $sql;
            // exit;
            if( mysqli_query($conn,$sql))

            {
                
                $_SESSION['msg'] = "Record saved";
              //  header('location:events.php');
            }
            else
            {
                 $_SESSION['msg'] = "Record not saved";
                // header('location:events.php');
                //echo mysqli_error($conn);
            }
            //header('location:index.php');

    }
?>
