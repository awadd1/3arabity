<?php
 include "basic.php";
 if(isset($_GET["id"])){
    brands_delete($_GET["id"],$_GET["action"]);
 }
  $data=brands_list("deleted");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Brands trash</title>
    <!-- <link rel="stylesheet" href="small-style.css"> -->
  </head>
  <body>
    <table>
      <tr>
        <td ><b>Brands trash</b></td>
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
        <a href="brands_edit.php?id=<?php echo $brand["id"];?>">restore</a>        
        <a href="brands_list.php?id=<?php echo $brand["id"];?>">delete</a>
      </td>
    </tr>
  <?php } ?>


    </table>
  </body>
</html>
