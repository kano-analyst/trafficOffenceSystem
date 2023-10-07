<?php
include('../model/conn.php');
include('../include/dashboard2.php');
$offence = $_POST['offence'];
$code= $_POST['code'];
$degree= $_POST['degree'];
$penalty= $_POST['penalty'];
$point= $_POST['point'];

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add new Offence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <section id="main-content">
          <section class="wrapper site-min-height">
           <h1 style="text-align: center;">Status</h1>
           <?php 
 $query = "INSERT INTO `offences`(`offence`, `code`, `degree`, `penalty`, `point`)
                             VALUES ('$offence','$code','$degree','$penalty','$point')";
   if (mysqli_query($conn, $query)) {
               echo '<h3 style="text-align: center;">Offence Successfully Added</h3>';
                echo '<h3 style="text-align: center;">Click <a href="../views/add_new_offence.php">Here</a> to Add another Offence</h3>';
            
                } else {
            echo '<h3 style="text-align: center;">There is an error in adding the offence Click <a href="../views/add_new_offence.php">Here</a> To go back</h3>';
                echo "Error: " . $query . "<br>" . $conn->error;      }
           ?>
</section>
</section>
</body>
</html>