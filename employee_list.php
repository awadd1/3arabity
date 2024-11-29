<?php
$conn = mysqli_connect('localhost','root','','3arabity');
$sql = "SELECT * FROM employees";
$data = mysqli_query($conn,$sql);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employee List</title>
    <!-- <link rel="stylesheet" href="big-style.css"> -->

  </head>
  <body>
    <table>
      <tr>
        <td ><b>Employee List</b></td>
      </tr>
      <tr>
      <td><b>ID</b></td>
      <td><b>Image</b></td>
      <td><b>Name</b></td>
      <td><b>Phone</b></td>
      <td><b>Address</b></td>
      <td><b>Email</b></td>
      <td><b>Department ID</b></td>
      <td><b>Basic Salary</b></td>
      <td><b>Actions</b></td>

      </tr>
<?php while ($employee=mysqli_fetch_assoc($data)) {?>
      <tr>
        <td><?php echo $employee["id"]; ?></td>
        <td><?php echo $employee["image"]; ?></td>
        <td><?php echo $employee["name"]; ?></td>
        <td><?php echo $employee["phone"]; ?></td>
        <td><?php echo $employee["address"]; ?></td>
        <td><?php echo $employee["email"]; ?></td>
        <td><?php echo $employee["department_id"]; ?></td>
        <td><?php echo $employee["basic_salary"]; ?></td>

        <td>
          <button type="button" name="button">Edit</button>
          <button type="button" name="button">Delete</button>
        </td>
      </tr>
<?php } ?>

    </table>





  </body>
</html>
