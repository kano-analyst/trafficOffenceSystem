
<?php 
    include('../include/dashboard2.php');
 $admin_username=$_SESSION['username'];
         
     $query = "SELECT * FROM `admin` WHERE `username`='$admin_username'";
                 $results = mysqli_query($conn, $query);
                  
while($row= mysqli_fetch_assoc($results)) {
                       $name=$row['name'];
                        $username=$row['username'];    
                       $staff_id=$row['staff_id'];
                       $rank=$row['rank'];
                         $password=$row['password'];                                                
 }
 ?>   
    ?>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit my Information</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
        <script src="../js/bootstrap.js"></script>
    </head>
    <body>
           
    <section id="main-content">
          <section class="wrapper site-min-height">
              <h1 style="text-align: center;">Edit Profile Information</h1>
    <form class="form" action="../controllers/edit_admin_profile_handler.php?username=<?php echo $username;?>" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control input-lg" name="name" value="<?php echo $name;?>" required>
        </div>
         <div class="form-group ">
            <label>Username</label>
            <input type="text" class="form-control input-lg"name="username" value="<?php echo $username;?>" required>
        </div>
        <div class="form-group ">
            <label>Staff I.D</label>
            <input type="text" class="form-control input-lg"name="staff_id" value="<?php echo $staff_id;?>" required>
        </div>  

        <div class="form-group">
            <label>Rank</label>
            <input type="text" class="form-control input-lg" name="rank" value="<?php echo $rank;?>"required>
        </div> 
           <div class="form-group ">
            <label>Password</label>
            <input type="text" class="form-control input-lg"name="password1" value="<?php echo $password;?>" required>
        </div><div class="form-group ">
            <label>Confirm Password</label>
            <input type="text" class="form-control input-lg"name="password" required>
        </div> 
          
         <button type="submit" class="btn btn-lg btn-success">Save</button>
    </form>
              </section><! --/wrapper -->
              </section>
    </body>
    </html>