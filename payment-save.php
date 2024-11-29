<?php
$name=$_POST["name"];
$conn=mysqli_connect('localhost','root','','3arabity');
$sql="INSERT INTO payment_method (name) VALUES ('$name')";

mysqli_query($conn,$sql);

 ?>
