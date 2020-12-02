<?php 
    session_start();
    include 'connection.php';

    
    if(isset($_POST['caption'],$_FILES['featured_image']))
    {
        $caption = mysqli_escape_string($conn,$_POST['caption']);
        $caption = trim($caption);
    
        //validation chaina ahile j garnu chha garnus


        // var_dump($_POST);
        // var_dump($_FILES);
        // exit;

        $id = (int)$_POST['id'];


        $image_name = $_FILES['featured_image']['name'];
        $image_temp_location = $_FILES['featured_image']['tmp_name'];
        

        // var_dump($image_name);

        //extension khojeko 

        $extension = pathinfo($image_name,PATHINFO_EXTENSION);

        $extension = strtolower($extension);

        $allowedExtension = ['jpg','jpeg','png'];


        // exit;


        if(empty($caption))
        {
            $_SESSION['msg'] = "caption is required";
         
        }
     
        else
        {


            if(!empty($image_name)){
                move_uploaded_file($image_temp_location,'uploads/sliders/'.$image_name);

                $sql = "update slider set caption = '$caption' , featured_image='$image_name' where id = $id";
            }
            else
            {
                //purano image nai rakhne
                $sql = "update slider set caption = '$caption' where id = $id";
                
            }
            
            if( mysqli_query($conn,$sql) )
            {
                $_SESSION['msg'] = "Slider updated successfully";
            }
            else
            {
                $_SESSION['msg'] = "Record  can not update";
                
            }

        }


      

    }
    header('location:view_sliders.php');