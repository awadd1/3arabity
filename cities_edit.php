<?php
include 'basic.php';
$city=cities_edit($_GET["id"]);
if(isset($_POST["name"])){
  cities_update($_POST["id"],$_POST["name"]);
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit City</title>
  </head>
  <body>
    <form action="cities_edit.php" method="post">
      <h1>Edit City</h1>
      <label for="id">ID</label>
      <input type="text" name="id" value="<?php echo $city['id']; ?>">

      <label for="Name">Name</label>
      <input type="text" name="name" value="<?php echo $city['name']; ?>">
      <button type="submit" name="button">Save</button>
      <a href="#">Back</a>
    </form>
  </body>
</html>
