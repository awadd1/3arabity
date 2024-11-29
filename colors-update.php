<?php
$id=$_POST["id"];
$name=$_POST["name"];
$code=$_POST["code"];

$conn=mysqli_connect('localhost','root','','3arabity');
$sql="UPDATE colors SET name='$name',code='$code' WHERE id='$id'";
mysqli_query($conn,$sql);

 ?>
