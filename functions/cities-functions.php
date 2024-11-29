<?php
function cities_list($status="active"){
  global $conn;
  if($status=="active"){
    $sql = "SELECT * FROM cities WHERE active=1";
  }elseif ($status=="deleted") {
    $sql = "SELECT * FROM cities WHERE active=0";
  }
  $data = mysqli_query($conn,$sql);
  return $data;
}
function cities_new($city){
  global $conn;
  $sql = "INSERT INTO cities (name) VALUES ('$city')";
  mysqli_query($conn,$sql);
  header("Location: cities_list.php");
}
function cities_delete($id,$action){
  global $conn;
  if ($action=="delete") {
    $sql="UPDATE cities SET active=0 WHERE id='$id'";
  }elseif ($action=="restore") {
    $sql="UPDATE cities SET active=1 WHERE id='$id'";
  }elseif ($action=="forever") {
    $sql="DELETE FROM cities WHERE id='$id'";
  }
  mysqli_query($conn,$sql);
  header("Location: cities_list.php");
}
function cities_edit($id){
  global $conn;
  $sql="SELECT * FROM cities WHERE id='$id'";
  $data=mysqli_query($conn,$sql);
  $city=mysqli_fetch_assoc($data);
  return $city;
}
function cities_update($id,$name){
  global $conn;
  $sql="UPDATE cities SET name = '$name' WHERE id='$id'";
  mysqli_query($conn,$sql);
  header("Location: cities_list.php");
}
 ?>
