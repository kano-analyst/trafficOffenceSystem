<?php
include('../include/dashboard2.php');
$name=$_POST['name'];
$username=$_POST['username'];
$staff_id=$_POST['staff_id'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$rank=$_POST['rank'];
$password=$_POST['password'];
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Marshall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <section id="main-content">
          <section class="wrapper site-min-height">
               <h1 style="text-align: center;">Status</h1>
           <?php
            $query = "INSERT INTO `officers`(`name`, `username`, `password`, `staff_id`, `rank`, `email`, `phone`, `address`)
             VALUES ('$name','$username','$password','$staff_id','$rank','$email','$phone','$address')";
   if (mysqli_query($conn, $query)) {
               echo '<h3 style="text-align: center;">Marshall Successfully Added</h3>';
                echo '<h3 style="text-align: center;">Click <a href="../views/add_new_marshall.php">Here</a> to Add another Marshall</h3>';
            
                } else {
            echo '<h3 style="text-align: center;">There is an error in adding new Marshall Click <a href="../views/add_new_marshall.php">Here</a> To go back</h3>';
                echo "Error: " . $query . "<br>" . $conn->error;      }
          
           ?>

</section>
</section>
    
</body>
</html>