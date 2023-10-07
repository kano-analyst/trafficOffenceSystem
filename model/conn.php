<?php
$dbserver='localhost';
$dbuser='root';
$dbpass='';
$dbname='karota';
$conn= new mysqli ($dbserver, $dbuser, $dbpass, $dbname);
if($conn->connect_error) die ($conn->connect_error);
?>