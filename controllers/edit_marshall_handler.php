<?php
include('../model/conn.php');
include('../include/dashboard2.php');
$id=$_GET['id'];
$name=$_POST['name'];
$username=$_POST['username'];
$staff_id=$_POST['staff_id'];
$email=$_POST['phone'];
$address=$_POST['email'];
$phone=$_POST['address'];
$rank=$_POST['ra
<html>nk'];
$password=$_POST['password'];
?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <section id="main-content">
          <section class="wrapper site-min-height">
           <h1 style="text-align: center;">Status</h1>
           <?php 
 $query = "UPDATE `officers` SET `name`='$name',`username`='$username',
                `staff_id`='$staff_id',`email`='$email',`phone`='$phone',`address`='$address',
                `rank`='$rank',`password`='$password' WHERE `id`='$id' ";
   if (mysqli_query($conn, $query)) {
               echo '<h3 style="text-align: center;">Officer Information was Successfully Edited</h3>';
                echo '<h3 style="text-align: center;">Click <a href="../views/view_all_marshall.php">Here</a> to View All Marshall</h3>';
            
                } else {
            echo '<h3 style="text-align: center;">There is an error in editing the officer information Click  <a href="../views/edit_marshall.php">Here</a> To go back</h3>';
                echo "Error: " . $query . "<br>" . $conn->error;      }
           ?>
</section>
</section>
</body>
</html>