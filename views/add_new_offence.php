
<?php 
    include('../include/dashboard2.php');
    
    ?>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Offence</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
           
    <section id="main-content">
          <section class="wrapper site-min-height">
              <h1 style="text-align: center;">Add New Offence</h1>
    <form class="form" action="../controllers/add_new_handler.php" method="post">
        <div class="form-group">
            <label>Offence Description</label>
            <input type="text" class="form-control input-lg" name="offence" placeholder="Offence Description"required>
        </div>
         <div class="form-group ">
            <label>Offence Code</label>
            <input type="text" class="form-control input-lg"name="code" placeholder="Offence Code" required>
        </div>
        <div class="form-group ">
            <label>Penalty</label>
            <input type="text" class="form-control input-lg"name="penalty" placeholder="Penalty" required>
        </div>   
        <div class="form-group " required>
            <label>Degree</label>
            <select name="degree">
                <option value="1" >Degree 1</option>
                <option value="2" >Degree 2</option>
                <option value="3" >Degree 3</option>
            </select>
        </div>
         <div class="form-group " required>
            <label>Point</label>
            <select name="point">
                <option value="1" >1 Point</option>
                <option value="2" >2 Point</option>
                <option value="3" >3 Point</option>
            </select>
        </div>
         <button type="submit" class="btn btn-lg btn-success">Submit</button>
</form>
     </section><! --/wrapper -->
              </section>
    </body>
    </html>