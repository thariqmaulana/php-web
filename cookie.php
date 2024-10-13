<?php
/* 
**Cookie adalah data dalam bentuk key-value yg dikirim oleh server melalui
HTTP Response untuk disimpan di Client (web browser)

**Ketika browser menerima cookie, secara otomatis request selanjutnya akan 
membawa cookie pada setiap HTTP Request

di php kita bisa membuat cookie dengan mudah menggunakan fn setcookie()

httponly nya true agar terhindar dari kerentanan
agar cookie tidak bisa dibaca oleh javascript

**cookie merupakan bagian dari header. jadi pastikan untuk menulis sebelum body

**untuk membaca cookie yg dikirim oleh client. gunakan variable global
$_COOKIE

**jangan terlalu banyak data di cookie. karena akan dikirim terus

**cookie bisa diubah oleh user. jadi simpan di cookie sesuatu yg 
tidak berpengaruh apabila diubah oleh user
*/

setcookie('X-BELAJAR-COOKIE', 'Thariq Maulana');

header('Location: /show-cookie.php');
?>