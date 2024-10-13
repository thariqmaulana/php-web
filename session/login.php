<?php
/*
pastikan session support enabled di php
data session disimpan di global variable $_SESSION
sebelum menggunakan session, kita perlu melakukan start
 */

 session_start();
//validasi ada atau tidak dulu login
 if ($_SESSION['login'] == true) {
  header('Location: /session/member.php');
  exit();
  /*kalau login sudah true maka langsung redirect agar user yg sudah login
   tidak lagi bisa membuka halaman login. akan aneh dan potensi err */
 }

 $error = "";
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if ($_POST['username'] == "thariq" && $_POST['password'] == "123") {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $_POST['username'];
    header('Location: /session/member.php');
    exit();//agar html tidak dirender karena action form
  } else {
    $error = "Login gagal";
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
</head>
<body>
  <?php if ($error != "") { ?>
    <h2><?= $error ?></h2>
  <?php } ?>
  <h1>Login</h1>
  <form action="/session/login.php" method="post">
    <label> username :
      <input type="text" name="username">
    </label>
    <br><br>
    <label> password :
      <input type="password" name="password">
    </label>
    <br><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>
