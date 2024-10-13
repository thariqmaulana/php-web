<?php
$title = "Hello PHP & HTML";
$body = "Hello PHP & HTML";

$color = "red"; // css pun bisa
$col = "color: yellow;";

// dont
// echo "<html></html>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <!-- sintaks lengkap printout -->
</head>
<body>
  <h1 style="background-color: <?= $color ?>; <?= $col ?>"><?= $body; ?></h1> 
  <!-- singkatan sintaks -->
</body>
</html>