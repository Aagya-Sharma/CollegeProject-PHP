<?php 
    session_start();
    include 'connection.php';
  
//UPDATE table_name SET key = value WHERE condition;

    // maja aayena
    // print_r($_POST);
    // exit;
    if(isset($_POST['Name'],$_POST['Email'],$_POST['Address'],$_POST['Contact_number']))
    
    {

        
        $Name = trim(mysqli_escape_string($conn,$_POST['Name']));
        $Email = mysqli_escape_string($conn,$_POST['Email']);
        $Address = mysqli_escape_string($conn,$_POST['Address']);
        $Contact_number = mysqli_escape_string($conn,$_POST['Contact_number']);


        $sql = "INSERT INTO intereseted_user (Name,Email,Address,Contact_number) VALUES ('$Name','$Email','$Address','$Contact_number')";
        header('location:information.php');
        // echo $sql;
        // exit;
        if( mysqli_query($conn,$sql) )
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
    }