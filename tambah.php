<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah pengguna</title>
  </head>
  <body>
    <a href="index.php">Home</a>
    <br><br>
    <form action="tambah.php" name="form_tambah" method="post">
      <table>
        <tr>
          <td>name</td>
          <td><input type="text" name="name"> </td>
        </tr>
        <tr>
          <td>email</td>
          <td><input type="email" name="email"> </td>
        </tr>
        <tr>
          <td>mobile</td>
          <td><input type="text" name="mobile"> </td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="Submit" value="Simpan"> </td>
        </tr>
      </table>
    </form>

    <?php

      if (isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email  = $_POST['email'];
        $mobile = $_POST['mobile'];

        include_once ("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO users(name, email, mobile) VALUES('$name','$email','$mobile')");

        echo "Tambah berhasil <a href='index.php'>lihat data</a>";
      }

     ?>
  </body>
</html>
