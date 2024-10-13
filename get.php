<!-- $_GET key query = key di array -->
<?php
$say = "Hello " . $_GET['name'];
$gender = $_GET['gender'];
$users = $_GET['users']; 
/* query param belum tentu dikirim user.
jadi kita nanti perlu validasi dulu apakah user mengirim atau tidak.
agar tidak error karena invalid array key */

/* Multiple query parameter dengan memisahkan dengan & */

/* parameter dikirim sebagai array dengan menambahkan
key[]=value di query 
users[]=said&users[]=hasan&users[]=ahmad*/
?>

<!-- http://localhost:8080/get.php?name=thariq%20maulana&gender=male&users[]=said&users[]=hasan&users[]=ahmad -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>$_GET</title>
</head>
<body>
  <h1><?= $say ?></h1>
  <h1><?= $gender ?></h1>

  <h1><?= $users[0] ?></h1>
  <h1><?= $users[1] ?></h1>
  <h1><?= $users[2] ?></h1>
</body>
</html>