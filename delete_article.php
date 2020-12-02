<?php 

session_start();
include 'connection.php';
if(!isset( $_SESSION['loginId']))
{
    header('location:index.php');
}


if(isset($_GET['id']))
{
    $id = (int)$_GET['id'];

    $sql = "delete from articles where id = $id";
    if(mysqli_query($conn,$sql))
    {
        $_SESSION['msg'] = "Record deleted";
    }
    else
    {
        $_SESSION['msg'] = "Record cannot delete";
    }
}
header('location:view_articles.php');