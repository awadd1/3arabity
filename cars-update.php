<?php
$id=$_POST["id"];
$image =  $_POST["image"];
$model_id =  $_POST["model_id"];
$color_id =  $_POST["color_id"];
$plate_number =  $_POST["plate_number"];
$year_id = $_POST["year_id"];
$price_per_hour = $_POST["price_per_hour"];


$conn = mysqli_connect('localhost','root','','3arabity');
$sql = "UPDATE cars SET image='$image',model_id='$model_id',color_id='$color_id',plate_number='$plate_number',year_id='$year_id',price_per_hour='$price_per_hour'";
 mysqli_query($conn,$sql);
 ?>
