
<?php 
    include('../include/dashboard2.php');
    
    ?>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add New Marshall</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
           
    <section id="main-content">
          <section class="wrapper site-min-height">
              <h1 style="text-align: center;">Add New Marshall</h1>
    <form class="form" action="../controllers/add_marshall_handler.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control input-lg" name="name" placeholder="Full Name"required>
        </div>
         <div class="form-group ">
            <label>Username</label>
            <input type="text" class="form-control input-lg"name="username" placeholder="Username" required>
        </div>
        <div class="form-group ">
            <label>Staff I.D</label>
            <input type="text" class="form-control input-lg"name="staff_id" placeholder="Staff I.D" required>
        </div>  
        <div class="form-group">
            <label>Rank</label>
            <input type="text" class="form-control input-lg" name="rank" placeholder="Rank"required>
        </div>
           <div class="form-group ">
            <label>Email</label>
            <input type="email" class="form-control input-lg"name="email" placeholder="Email" required>
        </div>      <div class="form-group ">
            <label>Phone</label>
            <input type="text" class="form-control input-lg"name="phone" placeholder="phone" required>
        </div>  
           <div class="form-group ">
            <label>Residential Address</label>
            <input type="text" class="form-control input-lg"name="address" placeholder="Residential Address" required>
        </div>  
           <div class="form-group ">
            <label>Password</label>
            <input type="password" class="form-control input-lg"name="password1" placeholder="Password" required>
        </div><div class="form-group ">
            <label>Confirm Password</label>
            <input type="password" class="form-control input-lg"name="password" placeholder="Password" required>
        </div> 
        <div class="form-group ">
            <label>Upload Passport</label>
            <input type="file" class="form-control input-lg"name="passport" required>
        </div>   
         <button type="submit" class="btn btn-lg btn-success">Register</button>
    </form>
              </section><! --/wrapper -->
              </section>
    </body>
    </html>