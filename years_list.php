<?php
$conn = mysqli_connect('localhost','root','','3arabity');
$sql="SELECT * FROM years";
$data= mysqli_query($conn,$sql);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
    
   </head>
   <body>

     <table>
       <tr>
         <td ><b>Cities List</b></td>
       </tr>
       <tr>
         <td><b>ID</b></td>
         <td><b>Name</b></td>
         <td><b>Actions</b></td>
       </tr>
       <?php while($year=mysqli_fetch_assoc($data)){ ?>
         <tr>


         <td><?php echo $year["id"]; ?></td>
         <td><?php echo $year["name"]; ?></td>
         <td>
           <button type="button" name="button">Edit</button>
           <button type="button" name="button">Delete</button>
         </td>
         </tr>
       <?php } ?>
     </table>

   </body>
 </html>
