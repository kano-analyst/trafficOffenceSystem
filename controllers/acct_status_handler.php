<?php 
include('../model/conn.php');
$id=$_GET['id'];
$status=$_GET['status'];
echo $id;
echo $status;
if($status==0){
 $query="UPDATE `officers` SET `status`=1 WHERE `id`='$id' ";
mysqli_query($conn, $query);
header('location: ../views/view_all_marshall.php');
}elseif ($status==1) {
    $query="UPDATE `officers` SET `status`=0 WHERE `id`='$id' ";
mysqli_query($conn, $query);
header('location: ../views/view_all_marshall.php');

}

?>