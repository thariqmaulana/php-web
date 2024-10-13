<!-- /* yg berhubungan dengan request dan server
 global variabel server dibuat ketika request masuk. request baru, variable baru
ada spesifikasi key dalam variabel server */ -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server</title>
</head>

<body style="background-color: purple; color: white;">
  <h1>$_SERVER</h1>

  <table border="1">
    <?php foreach ($_SERVER as $key => $value) { ?>
      <tr>
        <td><?= $key ?></td>
        <td><?= $value ?></td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>