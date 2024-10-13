<?php
if (!isset($_GET['name']) || $_GET['name'] == "") {
  http_response_code(400); //bad request
  echo "Name is required";
  exit(); //bawahnya tidak dieksekusi
}

$say = "Hello " . htmlspecialchars($_GET['name']);
?>

<html>
<body>
<h1><?= $say ?></h1>  
</body>
</html>