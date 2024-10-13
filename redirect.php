<?php
/* 
untuk melakukan redirect:
1. tambahkan di header Location
2. isi valuenya. jika domain yg sama maka /member.php
3. jika domain berbeda maka lengkap https://www.google.com
*/

header('Location: /phpinfo.php');
exit();//memastikan tidak ada konten yg dikirim ke browser