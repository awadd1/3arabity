<?php
$id=$_POST["id"];
$name=$_POST["name"];
$brand_id=$_POST["brand_id"];
$conn=mysqli_connect('localhost','root','','3arabity');
$sql = "UPDATE model SET name='$name',brand_id='$brand_id'WHERE id='$id'";
mysqli_query($conn,$sql);


 ?>
