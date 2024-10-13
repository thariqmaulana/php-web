<!-- 
  header digunakan untuk menyimpan informasi tambahan diluar URL, Method, dan Body
  kita bisa menangkap header request atau membuat header untuk response di PHP
  semua header yg dikirim client akan masuk ke global variable $_SERVER
  Key untuk header akan dikonversi otomatis menjadi uppercase
  dan spasi/- akan diubah menjadi _
  khusus request header akan ditambahkan prefix HTTP_
  Content-Type = HTTP_CONTENT_TYPE;

  Menambah header response dengan fn header('key:value')
  buat dibagian atas .sebelum content. sebelum html juga(input kan dari sini)

  header itu case insensitive
 -->

 <?php

  header('Application:Belajar php web');
  header('abcd: 123456');

 $client = $_SERVER['HTTP_CLIENT_NAME'];// by default tidak dibuat header ini
 //lihat kembali di server.php dengan awalan prefix http (belum tentu semua)

 echo "Hello $client";