<?php
$id= $_POST["id"];
$name = $_POST["name"];
$phone =  $_POST["phone"];
$address =  $_POST["address"];
$email =  $_POST["email"];
$bdate = $_POST["bdate"];
$id_number = $_POST["id_number"];
$id_image = $_POST["id_image"];
$city_id = $_POST["city_id"];

$conn = mysqli_connect('localhost','root','','3arabity');
$sql ="UPDATE customers SET name='$name',phone='$phone',address='$address',email='$email',
bdate='$bdate',id_number='$id_number',id_image='$id_image',city_id='$city_id' WHERE id='$id'";
mysqli_query($conn,$sql);

header("Location: customers_list.php");
 ?>
