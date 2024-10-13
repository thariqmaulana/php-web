<?php
/** Download
 * HEader: content-disposisiton memaksa  client mendownload file
 * bisa dirender, bisa di download
 * inline dirender saja file yg didownload. attachment disimpan di client
 */

 header('Content-Disposition: attachment; filename="download.html"');
 /** konten html dibawah jadi didownload bukan dirender
  * kalau inline dia seperti normal di render
  */

  /** Bagaimana dengan file?
   * kita gunakan fn readfile()
   * membaca file dan menulis ke output buffer php
   */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Download</title>
</head>
<body>
  <h1>Download File</h1>
</body>
</html>