<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit employee</title>
  </head>
  <body>
    <form action="employee-update.php" method="post">
      <h1>Edit Employee</h1>
      <label >ID</label>
      <input type="text" name="id"><br>
      <label >Image</label>
      <input type="text" name="image"><br>
      <label >name</label>
      <input type="text" name="name"><br>
      <label >phone</label>
      <input type="text" name="phone"><br>
      <label >address</label>
      <input type="text" name="address"><br>
      <label >email</label>
      <input type="email" name="email"><br>
      <label >department id</label>
      <input type="text" name="department_id"><br>
      <label >basic salary</label>
      <input type="text" name="basic_salary"><br>

      <button type="submit" name="button">Save</button>
      <a href="#">Back</a>
    </form>
  </body>
</html>
