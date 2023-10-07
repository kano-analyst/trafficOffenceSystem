<?php
include('../model/conn.php');
include('../include/dashboard2.php');
$name = $_POST['name'];
$chasis_no=$_POST['chasis_no'];
$plate_no=$_POST['plate_no'];
$vehicle_type=$_POST['vehicle_type'];
$offence=$_POST['offence'];
$degree=$_POST['offence_degree'];
$confiscated_item=$_POST['confiscated_item'];
$location=$_POST['committed_location'];
$remark=$_POST['remarks'];
$phone=$_POST['phone'];
$date=date("Y-m-d");
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Offence Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <section id="main-content">
          <section class="wrapper site-min-height">
           <h1 style="text-align: center;">Status</h1>
           <?php 
 $query = "INSERT INTO `offenders`(`name`, `chasis_no`, `vehicle_type`, `plate_no`, `offence`, `degree`, `confiscated_item`, `committed_location`, `committed_date`, `phone`, `remark`)
           VALUES ('$name', '$chasis_no', '$vehicle_type','$plate_no','$offence','$degree', '$confiscated_item', '$location', '$date', '$phone', '$remark')";
              if (mysqli_query($conn, $query)) {
               echo '<h3 style="text-align: center;">Offender Successfully Logged</h3>';
                echo '<h3 style="text-align: center;">Click <a href="../views/register_offender.php">Here</a> to log another Offender</h3>';
            
                } else {
            echo '<h3 style="text-align: center;">There is an error in logging the offender Click <a href="../views/register_offender.php">Here</a> To go back</h3>';
                echo "Error: " . $query . "<br>" . $conn->error;      }
           ?>
</section>
</section>
</body>
</html>