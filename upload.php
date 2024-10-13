<?php

/** 
 * PHP UPLOAD FILE
 * File yg diupload akan tersedia di global variable $_FILES 
 * file akan disimpan sementara di temporary folder
 * ketika request selesai maka file akan dihapus
 * karena itu kita perlu memindahkan langsung ke tempat yg kita inginkan
 * 
 * Kirim file upload dengan method post
 * karena data akan dikirim melalui body
 * 
 * cttn: kenapa kalau di refresh tidak kembali mengosongkan form lagi
*/
//harus divalidasi dulu. karena kalau get methodnya
//maka berpotensi error
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $file_name = $_FILES['upload_file']['name'];
  $file_type = $_FILES['upload_file']['type'];
  $file_size = $_FILES['upload_file']['size'];
  $file_tmp_name = $_FILES['upload_file']['tmp_name'];
  $file_error = $_FILES['upload_file']['error'];

  move_uploaded_file($file_tmp_name, __DIR__ . '/file/' . $file_name);
  /**pastikan dahulu untuk membuat folder file */
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload</title>
</head>
<body>
  <?php if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
    <h1>UPLOADED FILE</h1>
    <table>
      <tr>
        <td>File Name</td>
        <td><?= $file_name ?></td>
      </tr>
      <tr>
        <td>File size</td>
        <td><?= $file_size ?> kb</td>
      </tr>
      <tr>
        <td>File Type</td>
        <td><?= $file_type ?></td>
      </tr>
      <tr>
        <td>File tmp name</td>
        <td><?= $file_tmp_name ?></td>
      </tr>
      <tr>
        <td>error code</td>
        <td><?= $file_error ?></td>
      </tr>
    </table>

    <img src="/file/<?= $file_name ?>" alt="pic">
  <?php } ?>
  
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <label> File : 
      <input type="file" name="upload_file">
    </label>
    <input type="submit" value="upload">
  </form>
</body>
</html>