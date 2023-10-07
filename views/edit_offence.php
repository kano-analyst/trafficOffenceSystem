<?php 
include('../include/dashboard2.php');
include('../model/conn.php');
$code=$_GET['code'];
         
     $query = "SELECT * FROM `offences` WHERE `code`='$code'";
                 $results = mysqli_query($conn, $query);
                  
while($row= mysqli_fetch_assoc($results)) {
                       $offence=$row['offence'];
                       $offence_code=$row['code'];
                       $degree=$row['degree'];
                       $point=$row['point'];
                       $penalty=$row['penalty'];                       
                       
                       
 }
 ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
    <script src="../js/bootstrap.js"></script>
</head>
<body>
    <section id="main-content">
          <section class="wrapper site-min-height">
              <h1 style="text-align: center;">Edit Offence Information</h1>
           <form class="form" action="../controllers/edit_offence_handler.php?code=<?php echo $code;?>" method="post">
        <div class="form-group">
            <label>Offence Description</label>
            <input type="text" class="form-control input-lg" name="offence" value="<?php echo $offence;?>" required>
        </div>
         <div class="form-group ">
            <label>Offence Code</label>
            <input type="text" class="form-control input-lg" name="code" value="<?php echo $offence_code;?>" required>
        </div>
        <div class="form-group ">
            <label>Penalty</label>
            <input type="text" class="form-control input-lg"name="penalty" value="<?php echo $penalty;?>" required>
        </div>   
        <div class="form-group " required>
            <label>Degree</label>
            <select name="degree" default-value="<?php echo $degree;?>">
                <option value="1" >Degree 1</option>
                <option value="2" >Degree 2</option>
                <option value="3" >Degree 3</option>
            </select>
        </div>
         <div class="form-group " required>
            <label>Point</label>
            <select name="point" default="<?php echo $point;?>">
                <option value="1" >1 Point</option>
                <option value="2" >2 Point</option>
                <option value="3" >3 Point</option>
            </select>
        </div>
         <button type="submit" class="btn btn-lg btn-success">Submit</button>
</form>
                        </section>
                   </section>
</body>
</html>