<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><h5>


    Thank you for visiting our website.To contact us,please complete the short form below.</h5>
    <h3>Your Details</h3>
    <?php include 'includes/msg.php'; ?>
                <form action="contactprocess.php" method="post" enctype="multipart/form-data">
                    <p>
                    Name: <input class="form-control" type="text" name="name" id="" required >
                    </p>
                    <p>
                    Email: <input class="form-control" type="text" name="email" id="" required>
                    </p>
                    <p>
                    <h3>how can we help</h3>
                    
                        <textarea name="description" id="description" cols="60" rows="10"></textarea>
                    </p>

</body>
</html>