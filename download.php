<?php

if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
  echo "Valid key";
  header("Content-Disposition: attachment; filename='webku.png'");
  header("Content-Type: image/jpeg");//tidak wajib
  readfile(__DIR__ . '/file/webku.png');//terkirim sebagai binary
  exit();
} else {
  echo "Invalid key";
}