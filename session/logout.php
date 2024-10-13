<?php
session_start();
// $_SESSION['login'] = false;
//dari pada 1-1
session_destroy();
header('Location: /session/login.php');
exit();
?>