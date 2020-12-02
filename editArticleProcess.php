<?php 
    session_start();
    include 'connection.php';
    if(!isset($_SESSION['loginId']))
    {
        header('location:index.php');
    }

    // var_dump($_FILES['featured_image']);exit;

    if(isset($_POST['title'],$_POST['abstract'],$_POST['description'],$_FILES['featured_image'],$_POST['type']))
    {

        //validation gareko chaina 
        //maaf pau galti vo
        $title = trim(mysqli_escape_string($conn,$_POST['title']));
        $type = mysqli_escape_string($conn,$_POST['type']);
        $description = mysqli_escape_string($conn,$_POST['description']);
        $abstract = mysqli_escape_string($conn,$_POST['abstract']);

        $image_name = $_FILES['featured_image']['name'];
        $image_temp_location = $_FILES['featured_image']['tmp_name'];
        $id = (int)$_POST['id'];


        
        $extension = pathinfo($image_name,PATHINFO_EXTENSION);

        $extension = strtolower($extension);

        $allowedExtension = ['jpg','jpeg','png'];


        if(empty($title) or empty($abstract) or empty($type) or empty($description))
        {

            $_SESSION['msg'] = "All fields are required";
            header('location:edit_article_form.php?id='.$id);
            exit;

        }
      
        else
        {

            
           
            // exit;
            
            if(!empty($image_name)){
                $new_image_name = str_replace(" ","-",$title);
                $new_image_name = $new_image_name."-".time().".".$extension;

                move_uploaded_file($image_temp_location,'uploads/articles/'.$new_image_name);

                $sql = "update articles set title = '$title',type='$type',abstract='$abstract', description='$description', featured_image='$new_image_name' where id = $id";
            }
            else 
            {
                $sql = "update articles set title = '$title',type='$type',abstract='$abstract', description='$description' where id = $id";
            }

            if( mysqli_query($conn,$sql) )
            {
                $_SESSION['msg'] = "Record updated";
            }
            else
            {
                $_SESSION['msg'] = "Record update vayena";
                
            }
        }

    }
    header('location:view_articles.php');