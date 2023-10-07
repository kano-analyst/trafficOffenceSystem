
<?php 
    include('../include/dashboard2.php');
 $id=$_GET['identity'];
         
     $query = "SELECT * FROM `officers` WHERE `id`='$id'";
                 $results = mysqli_query($conn, $query);
                  
while($row= mysqli_fetch_assoc($results)) {
                       $name=$row['name'];
                        $username=$row['username'];    
                       $rank=$row['rank'];
                       $email=$row['email'];
                       $staff_id=$row['staff_id'];
                       $phone=$row['phone'];    
                        $address=$row['address'];
                         $password=$row['password'];                                                
 }
 ?>   
    ?>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit Marshall Information</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
        <script src="../js/bootstrap.js"></script>
    </head>
    <body>
           
    <section id="main-content">
          <section class="wrapper site-min-height">
              <h1 style="text-align: center;">Edit Marshall Information</h1>
    <form class="form" action="../controllers/edit_marshall_handler.php?id=<?php echo $id;?>" method="post">
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
            <label>Email</label>
            <input type="email" class="form-control input-lg"name="email" value="<?php echo $email;?>" required>
        </div>      <div class="form-group ">
            <label>Phone</label>
            <input type="text" class="form-control input-lg"name="phone"value="<?php echo $phone;?>" required>
        </div>  
           <div class="form-group ">
            <label>Residential Address</label>
            <input type="text" class="form-control input-lg"name="address" value="<?php echo $address;?>" required>
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