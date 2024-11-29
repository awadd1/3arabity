<?php
$name=$_POST["name"];
$code=$_POST["code"];

$conn=mysqli_connect('localhost','root','','3arabity');
$sql="INSERT INTO colors (name,code) VALUES ('$name','$code')";

mysqli_query($conn,$sql);
 ?>
