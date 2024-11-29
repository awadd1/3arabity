<?php
$name = $_POST["name"];
$phone =  $_POST["phone"];
$address =  $_POST["address"];
$email =  $_POST["email"];
$bdate = $_POST["bdate"];
$id_number = $_POST["id_number"];
$id_image = $_POST["id_image"];
$city_id = $_POST["city_id"];

$conn = mysqli_connect('localhost','root','','3arabity');
$sql ="INSERT INTO customers (name,phone,address,email,bdate,
id_number,id_image,city_id)VALUES('$name','$phone','$address',
'$email','$bdate','$id_number','$id_image','$city_id')";

mysqli_query($conn,$sql);
header("Location: customers_list.php");



 ?>
