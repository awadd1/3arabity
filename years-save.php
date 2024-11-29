<?php
$name=$_POST["name"];

$conn= mysqli_connect('localhost','root','','3arabity');
$sql="INSERT INTO years (name) VALUES ('$name')";

mysqli_query($conn,$sql);
 ?>
