<?php
include 'basic.php';
if(isset($_POST["name"])){
  brands_new($_POST["name"]);
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New Brand</title>
  </head>
  <body>
    <h1>New Brand</h1>
    <form action="brands_new.php" method="post">
      <label for="Name">Name</label>
      <input type="text" name="name"><br><br>
      <button type="submit" name="button">Save</button>
      <a href="#">Back</a>

    </form>
  </body>
</html>
