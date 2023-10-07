<?php
include('../model/conn.php');
include('../include/dashboard2.php');
$code=$_GET['code'];
$offence = $_POST['offence'];
$offence_code= $_POST['code'];
$degree= $_POST['degree'];
$penalty= $_POST['penalty'];
$point= $_POST['point'];

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Offence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <section id="main-content">
          <section class="wrapper site-min-height">
           <h1 style="text-align: center;">Status</h1>
           <?php 
 $query = "UPDATE `offences` SET `offence`='$offence',`code`='$offence_code',
                `degree`='$degree',`penalty`='$penalty',`point`='$point' WHERE `code`='$code'";
   if (mysqli_query($conn, $query)) {
               echo '<h3 style="text-align: center;">Offence Successfully Edited</h3>';
                echo '<h3 style="text-align: center;">Click <a href="../views/all_offences_info.php">Here</a> to View Offences</h3>';
            
                } else {
            echo '<h3 style="text-align: center;">There is an error in editing the offence Click  <a href="../views/all_offences_info.php">Here</a> To go back</h3>';
                echo "Error: " . $query . "<br>" . $conn->error;      }
           ?>
</section>
</section>
</body>
</html>