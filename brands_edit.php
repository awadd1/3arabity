<?php
include "basic.php";
$brand = brand_edit($_GET["id"]);
if(isset($_post["NAME"])){
  
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Brands</title>
  </head>
  <body>
    <form action="brands_edit.php" method="post">
      <h1>Edit Brands</h1>
      <label for="id">ID</label>
      <input type="text" name="id"><br><br>

      <label for="Name">Name</label>
      <input type="text" name="name"><br><br>
      <button type="submit" name="button">Save</button>
      <a href="#">Back</a>
    </form>
  </body>
</html>
