<?php
session_start();
include 'connection.php';
if(isset($_GET['id']))
{
 
    $id = (int)$_GET['id'];
    //UPDATE userevents SET flag= '1' where id ='2'
    $sql = "UPDATE userevents SET  flag= '1'  where id ='".$id."'";
  //  echo 
   //$sql;
   //exit;
    if(mysqli_query($conn,$sql))
      {
 
        $_SESSION['msg'] = "approved";
          header('location:display_events.php');
          
          exit;
      }
      else
      {
           $_SESSION['msg'] = "not approved";
           header('location:display_events.php');
           exit;

      }
    }      

?>
  