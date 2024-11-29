<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>New Cars</title>
  </head>
  <body>
    <form action="cars-update.php" method="post">
      <h1>New Cars</h1>
      <label for="id">ID</label>
       <input type="text" name="id"><br><br>
      <label for="image">Image</label>
       <input type="text" name="image"><br><br>
      <label for="model_id">Model Id</label>
      <input type="text" name="model_id"><br><br>
      <label for="color_id">Color Id</label>
      <input type="text" name="color_id"><br><br>
      <label for="plate_number">Plate Number</label>
      <input type="text" name="plate_number"><br><br>
      <label for="year_id">Year Id</label>
      <input type="text" name="year_id"><br><br>
      <label for="price_per_hour">Price Per Hour</label>
      <input type="text" name="price_per_hour"><br><br>
      <button type="submit" name="button">Save</button>
      <a href="#">Back</a>
    </form>
  </body>
</html>
