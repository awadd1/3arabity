<?php
$image =  $_POST["image"];
$name =  $_POST["name"];
$phone =  $_POST["phone"];
$address = $_POST["address"];
$email = $_POST["email"];
$department_id = $_POST["department_id"];
$basic_salary = $_POST["basic_salary"];

$conn = mysqli_connect('localhost','root','','3arabity');
$sql ="INSERT INTO employees (image,name,phone,address,email,department_id,basic_salary)VALUES('$image','$name','$phone','$address','$email','$department_id','$basic_salary')";

mysqli_query($conn,$sql);




 ?>
