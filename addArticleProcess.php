<?php 
    session_start();
    include 'connection.php';
    if(!isset($_SESSION['loginId']))
    {
        header('location:index.php');
    }

    // var_dump($_FILES['featured_image']);exit;
    
    if(isset($_POST['title'],$_POST['description'],$_FILES['featured_image'],$_POST['type']))
    {

        //validation gareko chaina 
        //maaf pau galti vo
        $title = trim(mysqli_escape_string($conn,$_POST['title']));
        $type = mysqli_escape_string($conn,$_POST['type']);
        $description = mysqli_escape_string($conn,$_POST['description']);
        $abstract = mysqli_escape_string($conn,$_POST['abstract']);

        $image_name = $_FILES['featured_image']['name'];
        $image_temp_location = $_FILES['featured_image']['tmp_name'];


        
        $extension = pathinfo($image_name,PATHINFO_EXTENSION);

        $extension = strtolower($extension);

        $allowedExtension = ['jpg','jpeg','png'];


        if(empty($title) or empty($abstract) or empty($type) or empty($description) or empty($image_name)){

            $_SESSION['msg'] = "All fields are required";
            header('location:add_articles.php');
            exit;

        }
        else if (!in_array($extension,$allowedExtension))
        {
            $_SESSION['msg'] = "Image must be valid";  
            header('location:add_articles.php');
            exit;  
        }
        else
        {

            
            $new_image_name = str_replace(" ","-",$title);
            $new_image_name = $new_image_name."-".time().".".$extension;
            // exit;
           

            move_uploaded_file($image_temp_location,'uploads/articles/'.$new_image_name);

            $sql = "insert into articles (title,type,abstract,description,featured_image,added_date) values ('$title','$type','$abstract','$description','$new_image_name',now()) ";

            if( mysqli_query($conn,$sql) )
            {
                $_SESSION['msg'] = "Record saved";
            }
            else
            {
                $_SESSION['msg'] = "Record not saved";
                
            }
        }

    }
    header('location:view_articles.php');