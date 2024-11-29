<?php
$conn = mysqli_connect('localhost','root','','3arabity');
$sql= "SELECT * FROM cars";
$data= mysqli_query($conn,$sql);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cars List</title>
    <!-- <link rel="stylesheet" href="big-style.css"> -->
  </head>
  <body>
    <table>
      <tr>
        <!-- <td ><b>Cars List</b></td> -->
      </tr>
      <tr>
      <td><b>ID</b></td>
      <td><b>Image</b></td>
      <td><b>Model ID</b></td>
      <td><b>Color ID</b></td>
      <td><b>Plate Number </b></td>
      <td><b>Year ID</b></td>
      <td><b>Price Per Hour</b></td>
      <td><b>Actions</b></td>
      </tr>
    <?php while($car = mysqli_fetch_assoc($data)) {?>
    <tr>
      <td><?php echo $car["id"]; ?></td>
      <td><?php echo $car["image"] ?></td>
      <td><?php echo $car["model_id"] ?></td>
      <td><?php echo $car["color_id"] ?></td>
      <td><?php echo $car["plate_number"] ?></td>
      <td><?php echo $car["year_id"] ?></td>
      <td><?php echo $car["price_per_hour"] ?></td>
      <td>
        <a href="cars_edit.php">Edit</a>
        <button type="button" name="button">Delete</button>
      </td>
    </tr>
  <?php } ?>


    </table>
  </body>
</html>
