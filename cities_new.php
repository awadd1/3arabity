<?php
include "basic.php";
if(isset($_POST["name"])){
cities_new($_POST["name"]);
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New City</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script> -->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 class="display-1">New City</h1>
        <form action="cities_new.php" method="post">
          <div class="form-group mb-4">
            <label for="Name">Name</label>
            <input class="form-control" type="text" name="name">
          </div>
          <button class="btn btn-success" type="submit" name="button">Save</button>
          <a class="btn btn-secondary" href="#">Back</a>
        </form>
      </div>
    </div>

  </body>
</html>
