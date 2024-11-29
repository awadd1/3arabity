<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New employee</title>
  </head>
  <body>
    <form action="employee-save.php" method="post">
      <h1>New employee</h1>

      <label >Image</label>
      <input type="text" name="image"><br><br>
      <label >Name</label>
      <input type="text" name="name"><br><br>
      <label >Phone</label>
      <input type="text" name="phone"><br><br>
      <label >Address</label>
      <input type="text" name="address"><br><br>
      <label >Email</label>
      <input type="email" name="email"><br><br>
      <label >Department ID</label>
      <input type="text" name="department_id"><br><br>
      <label >Basic Salary</label>
      <input type="text" name="basic_salary"><br><br>

      <button type="submit" name="button">Save</button>
      <a href="#">Back</a>
    </form>
  </body>
</html>
