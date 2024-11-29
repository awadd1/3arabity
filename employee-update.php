<?php
$id=$_POST["id"];
$image =$_POST["image"];
$name =  $_POST["name"];
$phone =  $_POST["phone"];
$address = $_POST["address"];
$email = $_POST["email"];
$department_id = $_POST["department_id"];
$basic_salary = $_POST["basic_salary"];

$conn = mysqli_connect('localhost','root','','3arabity');
$sql ="UPDATE employees SET image='$image',name='$name',phone='$phone',address='$address',email='$email',department_id='$department_id',basic_salary='$basic_salary'WHERE id='$id'";

mysqli_query($conn,$sql);





 ?>
