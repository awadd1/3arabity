<?php
$name=$_POST["name"];
$brand_id=$_POST["brand_id"];
$conn=mysqli_connect('localhost','root','','3arabity');
$sql="INSERT INTO model (name,brand_id) VALUES ('$name','$brand_id')";

mysqli_query($conn,$sql);


 ?>
