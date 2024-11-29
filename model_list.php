<?php
$conn = mysqli_connect('localhost','root','','3arabity');
$sql= "SELECT * FROM model";
$data= mysqli_query($conn,$sql);
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- <link rel="stylesheet" href="small-style.css"> -->
  </head>
  <body>
    <table>
      <tr>
        <td ><b>Models List</b></td>
      </tr>
      <tr>
      <td><b>ID</b></td>
      <td><b>Name</b></td>
      <td><b>Brand ID</b></td>
      <td><b>Actions</b></td>
      </tr>
    <?php while($model = mysqli_fetch_assoc($data)) {?>
    <tr>
      <td><?php echo $model["id"]; ?></td>
      <td><?php echo $model["name"] ?></td>
      <td><?php echo $model["brand_id"] ?></td>

      <td>
        <button type="button" name="button">Edit</button>
        <button type="button" name="button">Delete</button>
      </td>
    </tr>
  <?php } ?>


    </table>
  </body>
</html>
