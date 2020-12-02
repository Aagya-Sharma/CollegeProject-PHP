<?php 
    session_start();
    include 'connection.php';

    // var_dump($_FILES['featured_image']);exit;

    if(isset($_POST['caption'],$_FILES['featured_image']))
    {
        $caption = mysqli_escape_string($conn,$_POST['caption']);
        $caption = trim($caption);
    
        //validation chaina ahile j garnu chha garnus


        // var_dump($_POST);
        // var_dump($_FILES);
        // exit;


        $image_name = $_FILES['featured_image']['name'];
        $image_temp_location = $_FILES['featured_image']['tmp_name'];
        

        // var_dump($image_name);

        //extension khojeko 

        $extension = pathinfo($image_name,PATHINFO_EXTENSION);

        $extension = strtolower($extension);

        $allowedExtension = ['jpg','jpeg','png'];


        // exit;


        if(empty($caption) or empty($image_name))
        {
            $_SESSION['msg'] = "All fields are required";
         
        }
        else if (!in_array($extension,$allowedExtension))
        {
            $_SESSION['msg'] = "Image must be valid";    
        }
        else
        {
            move_uploaded_file($image_temp_location,'uploads/sliders/'.$image_name);

            $sql = "insert into slider(caption,featured_image) values ('$caption','$image_name') ";
    
            if( mysqli_query($conn,$sql) )
            {
                $_SESSION['msg'] = "Slider added successfully";
            }
            else
            {
                $_SESSION['msg'] = "Record  can not saved";
                
            }

        }


      

    }
    header('location:add_sliders.php');