<?php 

    session_start();
    include 'connection.php';

    if(isset($_POST['email'],$_POST['password']))
    {
        $email = mysqli_escape_string($conn,$_POST['email']);

        $password = md5($_POST['password']);

        $sql = "select * from users where email = '$email' and password = '$password'";
        // echo $sql;
        // exit;
        $sqlRun = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($sqlRun);
         //echo $count;exit;
        if($count == 1)
        {
            //login milyo
            $user = mysqli_fetch_assoc($sqlRun);
            // var_dump($user);
            // exit;
            $_SESSION['loginId'] = $user['id'];

            $_SESSION['loginEmail'] = $user['email'];
        }
        else
        {
            $_SESSION['msg'] = "Invalid login details";
            header('location:login.php');
            exit;

        }

    }
    header('location:index.php');