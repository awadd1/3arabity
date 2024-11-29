<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Customer</title>

  </head>
  <body>
    <form action="customers-update.php" method="post">
      <h1>Edit Customer</h1>
      <label for="id">ID</label>
      <input type="text" name="id"><br>
      <label for="Name">Name</label>
      <input type="text" name="name"><br>
      <label for="Image">Image</label>
      <input type="text" name="image"><br>
      <label for="Phone">Phone</label>
      <input type="text" name="phone"><br>
      <label for="Address">Address</label>
      <input type="text" name="address"><br>
      <label for="Email">Email</label>
      <input type="email" name="email"><br>
      <label for="Bdate">Birthday Date</label>
      <input type="date" name="bdate"><br>
      <label for="ID Number">ID Number</label>
      <input type="text" name="id_number"><br>
      <label for="ID Image">ID Image</label>
      <input type="text" name="id_image"><br>
      <label for="City">City</label>
      <select name="city_id">
        <?php while($city=mysqli_fetch_assoc($cities_list)){ ?>
        <option value="<?php echo $city["id"]; ?>"><?php echo $city["name"]; ?></option>
      <?php } ?>
      </select>  <br>
      <button type="submit" name="button">Save</button>
      <a href="#">Back</a>
    </form>
  </body>
</html>
