<?php
 include "basic.php";
  $data=brands_list();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Brands List</title>
    <!-- <link rel="stylesheet" href="small-style.css"> -->
  </head>
  <body>
    <table>
      <tr>
        <td ><b>Brands List</b></td>
      </tr>
      <tr>
      <td><b>ID</b></td>
      <td><b>Name</b></td>
      <td><b>Actions</b></td>
      </tr>
    <?php while($brand = mysqli_fetch_assoc($data)) {?>
    <tr>
      <td><?php echo $brand["id"]; ?></td>
      <td><?php echo $brand["name"] ?></td>
      <td>
        <a href="brands_edit.php?id=<?php echo $brand["id"];?>">Edit</a>        
        <a href="brands_list.php?id=<?php echo $brand["id"];?>">delete</a>
      </td>
    </tr>
  <?php } ?>


    </table>
  </body>
</html>
