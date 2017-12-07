<?php

 include_once("config.php");
 $result = mysqli_query($mysqli, "SELECT * from users");

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div class="">
       <a href="tambah.php">Tambah baru</a>
       <br><br>
       <table border="1">
         <tr>
           <th>Name</th>
           <th>Mobile</th>
           <th>Email</th>
           <th>Update</th>
         </tr>
         <?php

            while ($user_data = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>".$user_data['name']."</td>";
              echo "<td>".$user_data['mobile']."</td>";
              echo "<td>".$user_data['email']."</td>";
              echo "<td><a href='ubah.php?id=$user_data[id]'>ubah</a> | <a href='hapus.php?id=$user_data[id]'>hapus</a></td></tr>";
            }

          ?>
       </table>
     </div>
   </body>
 </html>
