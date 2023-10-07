<?php 
include('../model/conn.php');
include('../include/dashboard2.php');
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Offences</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
    <script src="../js/bootstrap.js"></script>
</head>
<body>
    
       <section id="main-content">
          <section class="wrapper site-min-height">
               <h3 style="padding-left:75px" class="form-signin-heading">ALL OFFENCES INFORMATION</h3>
            
                <form class="form-inline">
                  <div class="form-group">
                    <label style="padding-left:450px"for="search_offence.php"></label>
                    <input type="text" class="form-control" placeholder="Enter Keyword">
                </div>
                <button type="submit"  class="btn btn-lg btn-danger">Search</button>
                </form><br/>
              <?php
     $query = "SELECT id, offence, code, degree, point, penalty FROM `offences` ORDER BY id desc";
     $result = mysqli_query($conn, $query);
                        echo '<table class="table table-hover">';

                     echo '<tr><th>ID</th><th>OFFENCE</th><th>CODE</th><th>DEGREE</th><th>POINT</th>
                     <th>PENALTY</th><th>EDIT</th><th>DELETE</th></tr>';
                 while ($row = mysqli_fetch_assoc($result)) {
                        $code= $row['code'];
                        $url="../controllers/delete_offence_handler.php?code=".$code;
                        echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['offence'].'</td>';
                        echo '<td>'.$row['code'].'</td>';
                        echo '<td>'.$row['degree'].'</td>';
                        echo '<td>'.$row['point'].'</td>';
                        echo '<td>'.$row['penalty'].'</td>';
                        echo '<td><button type="submit" class="btn btn-lg btn-success">
                        <a style="color:white;" href="edit_offence.php?code='.$code.' ">Edit</a>
                        </button></td>';
 echo '<td><button style="position:center" href="delete_offence_handler.php" class="btn btn-lg btn-danger" onclick="ConfirmDelete()" >Delete</button></td>';
                                                echo '</tr>';
              } 
                        echo '</table>';
              
?>
  <script>
             function ConfirmDelete(){
               var x=confirm("Are you sure you want to delete this offence?");
               if(x){
                 //return true;
                 window.location.href= "<?php echo $url?>";
               }else{
                 return false;
               }
             }
             </script>

              </section><! --/wrapper -->
              </section>
            </body>
         
</html>