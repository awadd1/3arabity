<?php
$id = $_POST["id"];
$name = $_POST["name"];
$conn=mysqli_connect('localhost','root','','3arabity');
$sql="UPDATE years SET name='$name' WHERE id='$id'";


mysqli_query($conn,$sql);





 ?>
