<?php 
require '../model/conn.php';
session_start();
	if(isset($_POST['Login']) && $_POST['admin']==true){ //check if browser has posted any data to be collected
$login_id =$_POST['email'];
$password=$_POST['password'];
//$password=md5($password);
	$query= "SELECT * FROM admin where username='$login_id' AND password='$password'"; //insert data to database
	$result=$conn->query($query);
    }
 if(isset($_POST['Login']) && $_POST['officer']==true){ //check if browser has posted any data to be collected
$login_id =$_POST['email'];
$password=$_POST['password'];
//$password=md5($password);
	$query2= "SELECT * FROM officers where username='$login_id' AND password='$password' AND status=1"; //insert data to database
	$result2=$conn->query($query2);
   
}
if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)) {
        $name= $row['name'];
           $username= $row['username'];
        $_SESSION['name']= $name;
       $_SESSION['logged_in']=1;
	$_SESSION['username']= $row['username'];
	header("location: ../views/admin_home.php");
    }
}
else if (mysqli_num_rows($result2) > 0){
  while($row = mysqli_fetch_assoc($result2)) {
        $name= $row['name'];
           $username= $row['username'];
        $_SESSION['name']= $name;
         $_SESSION['logged_in']=true;
        
	$_SESSION['username']= $row['username'];
	header("location: ../views/officer_home.php");
    }
}
else{
    
    echo"failed";
    	header("location: ../index.php");
}
?>