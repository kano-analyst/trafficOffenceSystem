<?php
include('../model/conn.php');
include('../include/dashboard2.php');
$id= $_GET['identity'];
?>     <?php $query = "SELECT * FROM `officers` WHERE id='$id' ";
     $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);
      $name=$row['name']; $username=$row['username']; $staff_id=$row['staff_id']; $rank=$row['rank'];
      $email=$row['email']; $phone=$row['phone']; $address=$row['address']; $status=$row['status']; ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Marshall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
       <section id="main-content">
          <section class="wrapper site-min-height">
              <h1 style="text-align: center;"> <?php echo $name;?> Information</h1>
        
              <table class="table">
                 
                    <tr><td>Name:</td><td><?php echo $name?></td><td>Staff I.D </td><td><?php echo $staff_id?></td></tr>
                     <tr><td>Email:</td><td><?php echo $email?></td><td>Phone Nummber</td><td><?php echo $phone?></td></tr>
                      <tr><td>Rank:</td><td><?php echo $rank?></td><td>Residential Address</td><td><?php echo $address?></td></tr>
                      
                       <tr><td>Account Status</td>
                       <td><?php if($status==1){echo "Active";}else if($status==0){echo "Suspended";}?></td>
                       <td>Username: </td><td><?php echo $username?></td></tr>
              </table>

</section>
</section>
</body>
</html>