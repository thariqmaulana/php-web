<!-- Bahaya XSS melalui query param.
seluruh input dari user itu rentan. jadi perlu validasi.
kalau kita tidak mau hacker mengirimkan text yg berisi tag HTML
maka kita bisa gunakan fn htmlspecialchars() 
merender tag HTML menjadi tag biasa
< -> $lt lalu menjadi text biasa < ketika ditampilkan-->

<?php
$say = "Hello " . htmlspecialchars($_GET['name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XSS</title>
</head>
<body>
  <h1><?= $say ?></h1>
  <!--
  Hasil = Hello <alert>hack</alert>thariq 
  <h1>Hello &lt;alert&gt;hack&lt;/alert&gt;thariq</h1>
  -->
</body>
</html>