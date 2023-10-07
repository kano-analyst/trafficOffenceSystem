<?php 
    include('../model/conn.php');
    include('../include/dashboard2.php');
    
    ?>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View Offences</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
         <section id="main-content">
          <section class="wrapper site-min-height">
              <h1 style="text-align: center;">All Offences Commited</h1>
                <form class="form-inline">
                  <div class="form-group">
                    <label style="padding-left:450px"for="search_offence.php"></label>
                    <input type="text" class="form-control" placeholder="Enter Keyword">
                </div>
                <button type="submit"  class="btn btn-lg btn-danger">Search</button>
                </form>
              <?php
     $query = "SELECT `id`, `name`, `chasis_no`, `vehicle_type`, `plate_no`, `offence`, `degree`, `confiscated_item`, `committed_location`, `committed_date`, `phone`,`reporting_officer`, `remark` FROM `offenders` ORDER BY `id` desc";
                 $results = mysqli_query($conn, $query);
                        echo '<table class="table table-hover">';

                     echo '<tr><th>ID</th><th>NAME</th><th>OFFENCE</th><th>DEGREE</th><th>VEHICLE TYPE</th>
                     <th>PLATE NUMBER</th><th>CHASIS NUMBER</th><th>DATE REPORTED</th><th>REPORTING OFFICER</th><th>LOCATION</th></tr>';
                while ($row = mysqli_fetch_assoc($results)) {
                        $id=$row['id'];
                        echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['name'].'</td>';
                        echo '<td>'.$row['offence'].'</td>';
                        echo '<td>'.$row['degree'].'</td>';
                        echo '<td>'.$row['vehicle_type'].'</td>';
                        echo '<td>'.$row['plate_no'].'</td>';
                         echo '<td>'.$row['chasis_no'].'</td>';
                        echo '<td>'.$row['committed_date'].'</td>';
                        echo '<td>'.$row['reporting_officer'];
                        echo '<td>'.$row['committed_location'].'</td>';
                        echo '<td><button type="submit" class="btn btn-lg btn-success">
                        <a style="color:white;" href="view_offender.php?identity='.$id.' ">View</a>
                        </button></td>';
                        echo '</tr>';
                 } 
                        echo '</table>';

                       
            
              
              
              ?>
              </section><! --/wrapper -->
              </section>
    </body>
    </html>