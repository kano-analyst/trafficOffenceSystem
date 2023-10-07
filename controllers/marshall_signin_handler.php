<?php 
require '../model/conn.php';
session_start();
	if(isset($_POST['Login'])){ //check if browser has posted any data to be collected
$username =$_POST['username'];
$password=$_POST['password'];
//$password=md5($password);
	$query= "SELECT * FROM officers where username='$username' AND password='$password'"; //insert data to database
	$result=$conn->query($query);
    }
if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)) {
        $name= $row['name'];
        $_SESSION['name']= $name;
        
	$_SESSION['username']= $username;
	header("location: ../views/marshall_home.php");
    }
}
else{
    echo"failed";
    	header("location: ../index.php");
}
?>