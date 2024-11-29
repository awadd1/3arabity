<?php
function brands_list($status="active"){
    global $conn ; 
    if($status=="active"){
       $sql= "SELECT *from brands WHERE active ='1'"; 
    }elseif($status=="deleted"){
    $sql= "SELECT *from brands WHERE active ='0'"; 
    }
    $data= mysqli_query($conn,$sql);
    return $data;

}


function brands_new($name){
    global $conn;
    $sql="INSERT INTO brands (name) VALUES ('$name')";
    mysqli_query($conn,$sql);
      header("Location: brands_list.php");
}

function brands_delete($id,$action){
    global $conn ;
    if ($action=="delete") {
        $sql="UPDATE brands SET active=0 WHERE id='$id'";
      }elseif ($action=="restore") {
        $sql="UPDATE brands SET active=1 WHERE id='$id'";
      }elseif ($action=="forever") {
        $sql="DELETE FROM brands WHERE id='$id'";

}
}








function brands_edit( $id ){
    global $conn;
    $sql= "SELECT * from brands WHERE id='id'";
    $data = mysqli_query($conn,$sql);
    $brand =mysqli_fetch_assoc($data);
    return $brand;

}

function brand_update($id,$name){
global $conn;
$sql="update brand SET name ='name' WHERE id ='id'";
$mysqli_query($conn,$sql);
header("Location: brands_list.php");

}




?>