<?php 
    include('../include/dashboard2.php');
    
    ?>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View All Marshall</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <section id="main-content">
          <section class="wrapper site-min-height">
              <h1 style="text-align: center;">All Marshals</h1>
              <form class="form-inline">
                  <div class="form-group">
                    <label style="padding-left:450px"for="search_offence.php"></label>
                    <input type="text" class="form-control" placeholder="Enter Keyword">
                </div>
                <button type="submit"  class="btn btn-lg btn-danger">Search</button>
                </form>
              <?php
     $query = "SELECT * FROM `officers` ORDER BY staff_id desc";
     $result = mysqli_query($conn, $query);
                        echo '<table class="table table-hover">';

                     echo '<tr><th>STAFF ID</th><th>NAME</th><th>RANK</th><th>EMAIL</th><th>USERNAME</th>
                     <th>PHONE</th><th>ADDRESS</th><th>VIEW</th><th>EDIT</th><th>ACCOUNT STATUS</th><th>ACCOUNT STATUS</th></tr>';
                 while ($row = mysqli_fetch_assoc($result)) {
                        $id= $row['id'];
                        $status= $row['status'];
                        echo '<tr>';
                        echo '<td>'.$row['staff_id'].'</td>';
                        echo '<td>'.$row['name'].'</td>';
                        echo '<td>'.$row['rank'].'</td>';
                        echo '<td>'.$row['email'].'</td>';
                         echo '<td>'.$row['username'].'</td>';
                        echo '<td>'.$row['phone'].'</td>';
                        echo '<td>'.$row['address'].'</td>';
                        echo '<td><button type="submit" class="btn btn-lg btn-success">
                        <a style="color:white;" href="view_marshall.php?identity='.$id.' ">View</a>
                        </button></td>';
                         echo '<td><button type="submit" class="btn btn-lg btn-success">
                        <a style="color:white;" href="edit_marshall.php?identity='.$id.' ">Edit</a>
                        </button></td>';
                         if($status==1){
                           echo '<td>Active</td>'; } 
                             else if($status==0){
                           echo '<td>Suspended</td>';   }
                        if($status==1){
                          echo '<td><button type="submit" class="btn btn-lg btn-danger">
                        <a style="color:white;" href="../controllers/acct_status_handler.php?id='.$id.'&status=1">Deactivate</a>
                        </button></td>';
                        }else if($status==0){
                           echo '<td><button type="submit" class="btn btn-lg btn-success">
                        <a style="color:white;" href="../controllers/acct_status_handler.php?id='.$id.'&status=0">Activate</a>
                        </button></td>';  
                        }
                       
                        echo '</tr>';
                 } 
                        echo '</table>';

                       
            
              
              
              ?>
              </section><! --/wrapper -->
              </section>
    </body>
    </html>